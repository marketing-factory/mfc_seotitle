<?php
defined('TYPO3_MODE') or die('Access denied.');
/** @var string $_EXTKEY */

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript/',
    'Title'
);
