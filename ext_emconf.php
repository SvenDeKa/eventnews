<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'News events',
    'description' => 'Events for news',
    'category' => 'plugin',
    'author' => 'Georg Ringer - FORK by SVEN KÜLPMANN',
    'author_email' => '',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '2.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0-9.9.99',
            'news' => '3.2.0-7.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
