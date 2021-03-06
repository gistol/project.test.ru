<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2017 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
*/

namespace CoreShop\Bundle\CoreBundle\Report;

use Carbon\Carbon;
use CoreShop\Component\Core\Report\ReportInterface;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\ParameterBag;

class AbandonedCartsReport implements ReportInterface
{
    /**
     * @var Connection
     */
    private $db;

    /**
     * @var array
     */
    private $pimcoreClasses;

    /**
     * AbandonedCartsReport constructor.
     * @param Connection $db
     * @param array $pimcoreClasses
     */
    public function __construct(Connection $db, array $pimcoreClasses)
    {
        $this->db = $db;
        $this->pimcoreClasses = $pimcoreClasses;
    }

    /**
     * {@inheritdoc}
     */
    public function getData(ParameterBag $parameterBag) {
        $fromFilter = $parameterBag->get('from' , strtotime(date('01-m-Y')));
        $toFilter = $parameterBag->get('to', strtotime(date('t-m-Y')));
        $from = Carbon::createFromTimestamp($fromFilter);
        $to = Carbon::createFromTimestamp($toFilter);

        $maxToday = new Carbon();
        $minToday = new Carbon();

        //abandoned = 48h before today.
        $maxTo = $maxToday->subDay(2)->addSecond(1);
        $minFrom = $minToday->subDay(3);

        $page = $parameterBag->get('page', 1);
        $limit = $parameterBag->get('limit', 25);
        $offset = $parameterBag->get('offset', $page === 1 ? 0 : ($page-1)*$limit);

        $userClassId = $this->pimcoreClasses['customer'];
        $cartClassId = $this->pimcoreClasses['cart'];

        $fromTimestamp = $from->getTimestamp();
        $toTimestamp = $to->getTimestamp();

        if ($from->gt($minFrom)) {
            $fromTimestamp = $minFrom->getTimestamp();
        }

        if ($to->gt($maxTo)) {
            $to = $maxTo;
            $toTimestamp = $to->getTimestamp();
        }

        $sqlQuery = "SELECT SQL_CALC_FOUND_ROWS
                         cart.o_creationDate as creationDate,
                         cart.o_modificationDate as modificationDate,
                         cart.items,
                         cart.oo_id as cartId,
                         user.email, CONCAT(user.firstname, ' ', user.lastname) as userName
                        FROM object_$cartClassId as cart
                        LEFT JOIN object_$userClassId as user ON user.oo_id = cart.customer__id
                        WHERE cart.items <> ''
                          AND cart.order__id IS NULL
                          AND cart.o_creationDate > ?
                          AND cart.o_creationDate < ?
                     GROUP BY cart.oo_id
                     ORDER BY cart.o_creationDate DESC
                     LIMIT $offset,$limit";

        $data = $this->db->fetchAll($sqlQuery, [$fromTimestamp, $toTimestamp]);

        foreach ($data as &$entry) {
            $entry['itemsInCart'] = count(array_filter(explode(',', $entry['items'])));
            $entry['userName'] = empty($entry['userName']) ? '--' : $entry['userName'];
            $entry['email'] = empty($entry['email']) ? '--' : $entry['email'];
            //$entry['selectedPayment'] = empty($entry['selectedPayment']) ? '--' : $entry['selectedPayment'];

            unset($entry['items']);
        }

        return array_values($data);
    }
}
