<?php

/**
 * Extension Manager/Repository config file for ext "muldenland".
 */
$EM_CONF[$_EXTKEY] = [
	'title' => 'Muldenland Template',
	'description' => 'Sitepackage for TYPO3 v12.4',
	'categoriy' => 'templates',
	'author' => 'Steffen Matthes',
	'author_email' => 'info@dermatthes-frauhofer.de',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '1.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '12.4.0-12.4.99',
		],
		'conflicts' => [],
		'suggest' => [],
	],
];