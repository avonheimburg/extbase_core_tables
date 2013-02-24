<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "extbase_core_tables"
 *
 * Auto generated by Extension Builder 2013-02-24
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

/** @var $_EXTKEY TYPE_NAME */
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Core Tables for Extbase',
	'description' => 'Basic TYPO3 tables for use with extbase.

Currently supported:
pages, pages_language_overlay, tt_content, sys_language, sys_domain
',
	'category' => 'misc',
	'author' => 'Anno v. Heimburg',
	'author_email' => 'anno@vonheimburg.de',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.0',
			'fluid' => '6.0',
			'typo3' => '6.0',
            'static_info_tables_extbase' => '1.1.0'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>