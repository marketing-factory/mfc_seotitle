<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "mfc_seotitle".
 *
 * Auto generated 06-01-2014 10:22
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'SEO-Title',
	'description' => 'Build another title as displayed in BE if you want',
	'category' => 'Marketing Factory',
	'shy' => 0,
	'version' => '0.2.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'pages,pages_language_overlay',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Simon Schmidt',
	'author_email' => 'sfs@marketing-factory.de',
	'author_company' => 'Marketing Factory Consulting GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.3.0-5.5.99',
			'typo3' => '6.2.0-7.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:16:"ext_autoload.php";s:4:"996f";s:12:"ext_icon.gif";s:4:"3527";s:17:"ext_localconf.php";s:4:"915a";s:14:"ext_tables.php";s:4:"9ae4";s:14:"ext_tables.sql";s:4:"5347";s:22:"Classes/User/Title.php";s:4:"02ca";s:38:"Configuration/TypoScript/constants.txt";s:4:"b26a";s:34:"Configuration/TypoScript/setup.txt";s:4:"04eb";s:44:"Resources/Private/Language/locallang_tca.xml";s:4:"22db";}',
	'suggests' => array(
	),
);

?>
