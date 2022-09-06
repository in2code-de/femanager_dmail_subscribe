<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'femanager direct mail subscription',
    'description' => 'Adds direct mail fields to femanager',
    'category' => 'plugin',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '2.1.3',
    'constraints' => array(
        'depends' => array(
            'typo3' => '11.5.0-11.5.99',
            'femanager' => '7.0.0',
            'direct_mail' => ''
        ),
        'conflicts' => array(),
        'suggests' => array(),
    )
);