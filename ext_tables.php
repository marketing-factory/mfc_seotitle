<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$tempColumns = array(
	'tx_mfcseotitle_title' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:mfc_seotitle/Resources/Private/Language/locallang_tca.xml:pages.tx_mfcseotitle_title',
		'config' => array(
			'type' => 'input',
			'max' => 200,
			'size' => 50,
		),
	),
);

t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages', $tempColumns, 1);
t3lib_extMgm::addFieldsToPalette('pages', 'title', '--linebreak--, tx_mfcseotitle_title', 'after:title');

t3lib_div::loadTCA('pages_language_overlay');
t3lib_extMgm::addTCAcolumns('pages_language_overlay', $tempColumns, 1);
t3lib_extMgm::addFieldsToPalette('pages_language_overlay', 'title', '--linebreak--, tx_mfcseotitle_title', 'after:title');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Title');

?>