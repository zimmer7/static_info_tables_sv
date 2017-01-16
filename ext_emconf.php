<?php
########################################################################
# Extension Manager/Repository config file for ext "static_info_tables_sv".
#
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables (sv)',
	'description' => 'Swedish language pack for Static Info Tables. (Authored by a Norwegian. Any Swedes willing to take it over?)',
	'category' => 'misc',
	'shy' => 0,
	'version' => '6.2.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Mathas Bolt Lesniak, LiliO Design',
	'author_email' => 'mathias@lilio.com',
	'author_company' => 'LiliO Design',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'static_info_tables' => '6.3.4-0.0.0',
			'typo3' => '6.2.0-7.9.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
