<?php

$GLOBALS['TL_DCA']['tl_iso_related_product']['fields']['products'] = [
    'label'                 => &$GLOBALS['TL_LANG']['tl_iso_related_product']['products'],
    'exclude'               => true,
    'inputType'             => 'picker',
    'eval'                  => array('mandatory'=>true, 'tl_class'=>'long'),
    'sql'                   => "blob NULL",
    'relation'                => array('type'=>'hasMany', 'load'=>'lazy', 'table'=>'tl_iso_product')
];
