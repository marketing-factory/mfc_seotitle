<?php

call_user_func(function () {

    $ll = 'LLL:EXT:mfc_seotitle/Resources/Private/Language/locallang_tca.xml:';

    $columns = array(
        'tx_mfcseotitle_title' => array(
            'exclude' => 0,
            'label' => $ll . 'pages.tx_mfcseotitle_title',
            'config' => array(
                'type' => 'input',
                'max' => 200,
                'size' => 50,
            ),
        ),
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'pages',
        $columns,
        true
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'title',
        '--linebreak--, tx_mfcseotitle_title', 'after:title'
    );

});
