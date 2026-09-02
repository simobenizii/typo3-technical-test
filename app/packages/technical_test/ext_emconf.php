<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Technical Test',
    'description' => 'Custom site package for the TYPO3 technical test',
    'category' => 'templates',
    'author' => 'Mohamed Ben Izi',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
        ],
    ],
];