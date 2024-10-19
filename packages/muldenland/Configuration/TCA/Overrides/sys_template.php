<?php

defined('TYPO3') or die();

call_user_func(static function () {
	TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
		'muldenland',
		'Configuration/TypoScript/',
		'Project Leipziger Muldenland'
	);
});

// deaktiveren des Datensatz Record Types :: System Records //TypoScript record
$GLOBALS['TCA']['sys_template']['ctrl']['hideTable'] = true;