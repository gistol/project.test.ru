<?php 

/** 
* Generated at: 2017-10-19T10:40:39+03:00
* Inheritance: no
* Variants: no
* Changed by: system (0)


Fields Summary: 
- product [href]
- quantity [numeric]
- isGiftItem [checkbox]
- itemPriceNet [coreShopMoney]
- itemPriceGross [coreShopMoney]
- itemRetailPriceNet [coreShopMoney]
- itemRetailPriceGross [coreShopMoney]
- itemWholesalePrice [coreShopMoney]
- itemTax [coreShopMoney]
- taxes [fieldcollections]
*/ 


return Pimcore\Model\DataObject\ClassDefinition::__set_state(array(
   'name' => 'CoreShopCartItem',
   'description' => NULL,
   'creationDate' => NULL,
   'modificationDate' => 1508398839,
   'userOwner' => 0,
   'userModification' => 0,
   'parentClass' => 'CoreShop\\Component\\Core\\Model\\CartItem',
   'useTraits' => NULL,
   'allowInherit' => false,
   'allowVariants' => false,
   'showVariants' => false,
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'labelWidth' => 100,
     'layout' => NULL,
     'name' => 'pimcore_root',
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => NULL,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'childs' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Tabpanel::__set_state(array(
         'fieldtype' => 'tabpanel',
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => NULL,
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => NULL,
         'bodyStyle' => NULL,
         'datatype' => 'layout',
         'permissions' => NULL,
         'childs' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'name' => 'Info',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Info',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Href::__set_state(array(
                 'fieldtype' => 'href',
                 'width' => '',
                 'assetUploadPath' => '',
                 'relationType' => true,
                 'queryColumnType' => 
                array (
                  'id' => 'int(11)',
                  'type' => 'enum(\'document\',\'asset\',\'object\')',
                ),
                 'phpdocType' => '\\Pimcore\\Model\\Document\\Page | \\Pimcore\\Model\\Document\\Snippet | \\Pimcore\\Model\\Document | \\Pimcore\\Model\\Asset | \\Pimcore\\Model\\DataObject\\AbstractObject',
                 'objectsAllowed' => true,
                 'assetsAllowed' => false,
                 'assetTypes' => 
                array (
                ),
                 'documentsAllowed' => false,
                 'documentTypes' => 
                array (
                ),
                 'lazyLoading' => false,
                 'classes' => 
                array (
                  0 => 
                  array (
                    'classes' => 'CoreShopProduct',
                  ),
                ),
                 'pathFormatterClass' => '',
                 'name' => 'product',
                 'title' => 'Product',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'columnType' => NULL,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              1 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
                 'fieldtype' => 'numeric',
                 'width' => '',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'double',
                 'columnType' => 'double',
                 'phpdocType' => 'float',
                 'integer' => false,
                 'unsigned' => false,
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'unique' => NULL,
                 'decimalSize' => NULL,
                 'decimalPrecision' => NULL,
                 'name' => 'quantity',
                 'title' => 'Quantity',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              2 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Checkbox::__set_state(array(
                 'fieldtype' => 'checkbox',
                 'defaultValue' => 0,
                 'queryColumnType' => 'tinyint(1)',
                 'columnType' => 'tinyint(1)',
                 'phpdocType' => 'boolean',
                 'name' => 'isGiftItem',
                 'title' => 'Is Gift Item',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
             'fieldtype' => 'panel',
             'labelWidth' => 100,
             'layout' => NULL,
             'name' => 'Numbers',
             'type' => NULL,
             'region' => NULL,
             'title' => 'Numbers',
             'width' => NULL,
             'height' => NULL,
             'collapsible' => false,
             'collapsed' => false,
             'bodyStyle' => '',
             'datatype' => 'layout',
             'permissions' => NULL,
             'childs' => 
            array (
              0 => 
              CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                 'fieldtype' => 'coreShopMoney',
                 'width' => '',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'bigint(20)',
                 'columnType' => 'bigint(20)',
                 'phpdocType' => 'int',
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'name' => 'itemPriceNet',
                 'title' => 'Item Price Net',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              1 => 
              CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                 'fieldtype' => 'coreShopMoney',
                 'width' => '',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'bigint(20)',
                 'columnType' => 'bigint(20)',
                 'phpdocType' => 'int',
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'name' => 'itemPriceGross',
                 'title' => 'Item Price Gross',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              2 => 
              CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                 'fieldtype' => 'coreShopMoney',
                 'width' => '',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'bigint(20)',
                 'columnType' => 'bigint(20)',
                 'phpdocType' => 'int',
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'name' => 'itemRetailPriceNet',
                 'title' => 'Retail Price Net',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              3 => 
              CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                 'fieldtype' => 'coreShopMoney',
                 'width' => '',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'bigint(20)',
                 'columnType' => 'bigint(20)',
                 'phpdocType' => 'int',
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'name' => 'itemRetailPriceGross',
                 'title' => 'Retail Price Gross',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              4 => 
              CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                 'fieldtype' => 'coreShopMoney',
                 'width' => '',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'bigint(20)',
                 'columnType' => 'bigint(20)',
                 'phpdocType' => 'int',
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'name' => 'itemWholesalePrice',
                 'title' => 'Wholesale Price',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              5 => 
              CoreShop\Bundle\MoneyBundle\CoreExtension\Money::__set_state(array(
                 'fieldtype' => 'coreShopMoney',
                 'width' => '',
                 'defaultValue' => NULL,
                 'queryColumnType' => 'bigint(20)',
                 'columnType' => 'bigint(20)',
                 'phpdocType' => 'int',
                 'minValue' => NULL,
                 'maxValue' => NULL,
                 'name' => 'itemTax',
                 'title' => 'Item Tax',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
              6 => 
              Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections::__set_state(array(
                 'fieldtype' => 'fieldcollections',
                 'phpdocType' => '\\Pimcore\\Model\\DataObject\\Fieldcollection',
                 'allowedTypes' => 
                array (
                  0 => 'CoreShopTaxItem',
                ),
                 'lazyLoading' => true,
                 'maxItems' => '',
                 'disallowAddRemove' => false,
                 'disallowReorder' => false,
                 'collapsed' => false,
                 'collapsible' => false,
                 'name' => 'taxes',
                 'title' => 'Taxes',
                 'tooltip' => '',
                 'mandatory' => false,
                 'noteditable' => true,
                 'index' => false,
                 'locked' => false,
                 'style' => '',
                 'permissions' => NULL,
                 'datatype' => 'data',
                 'columnType' => NULL,
                 'queryColumnType' => NULL,
                 'relationType' => false,
                 'invisible' => false,
                 'visibleGridView' => false,
                 'visibleSearch' => false,
              )),
            ),
             'locked' => false,
          )),
        ),
         'locked' => false,
      )),
    ),
     'locked' => false,
  )),
   'icon' => NULL,
   'previewUrl' => NULL,
   'group' => NULL,
   'showAppLoggerTab' => NULL,
   'linkGeneratorReference' => NULL,
   'propertyVisibility' => 
  array (
    'grid' => 
    array (
      'id' => true,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
    'search' => 
    array (
      'id' => true,
      'path' => true,
      'published' => true,
      'modificationDate' => true,
      'creationDate' => true,
    ),
  ),
   'dao' => NULL,
));
