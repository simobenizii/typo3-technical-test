<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'technical_test',
    'setup',
    "@import 'EXT:technical_test/Configuration/TypoScript/setup.typoscript'"
);