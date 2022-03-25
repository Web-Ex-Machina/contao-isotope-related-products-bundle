<?php

$GLOBALS['TL_DCA']['tl_iso_related_product']['fields']['products'] = [
    'label'                 => &$GLOBALS['TL_LANG']['tl_iso_related_product']['products'],
    'exclude'               => true,
    'inputType'             => 'select',
    'foreignKey' 		    => 'tl_iso_product.name',
    'load_callback'         => array(
    	array(ContaoIsotopeRelatedProductsBundle\DataContainer\IsotopeRelatedProductContainer::class, 'serializeOptions')
    ),
    'save_callback'         => array(
    	array(ContaoIsotopeRelatedProductsBundle\DataContainer\IsotopeRelatedProductContainer::class, 'deserializeOptions')
    ),
    'eval'                  => array('mandatory'=>true, 'tl_class'=>'long', 'multiple'=>true, 'chosen'=>true),
    'sql'                   => "blob NULL",
    'relation'              => array('type'=>'hasMany', 'load'=>'lazy')
];
