<?php

call_user_func(function () {
    $ll = 'LLL:EXT:mfc_seotitle/Resources/Private/Language/locallang_tca.xml:';

    $columns = [
        'tx_mfcseotitle_title' => [
            'exclude' => 0,
            'label' => $ll . 'pages.tx_mfcseotitle_title',
            'config' => [
                'type' => 'input',
                'max' => 200,
                'size' => 50,
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'pages_language_overlay',
        $columns
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'pages_language_overlay',
        'title',
        '--linebreak--, tx_mfcseotitle_title',
        'after:title'
    );
});
