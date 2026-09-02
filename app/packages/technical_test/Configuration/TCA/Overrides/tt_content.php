<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'Contact Box',
        'value' => 'contact_box',
        'icon' => 'content-text',
    ]
);
$GLOBALS['TCA']['tt_content']['types']['contact_box'] = [
    'showitem' => '
        --palette--;;general,
        header,
        bodytext,
        tx_technicaltest_email,
        header_link,
        --div--;Access,
        --palette--;;hidden,
        --palette--;;access
    ',
];
$tempColumns = [
    'tx_technicaltest_email' => [
        'label' => 'Email address',
        'config' => [
            'type' => 'email',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $tempColumns
);