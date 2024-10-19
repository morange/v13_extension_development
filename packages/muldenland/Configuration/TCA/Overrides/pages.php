<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
	'muldenland',
	'Configuration/TSConfig/BackendLayouts.tsconfig',
	'Default Backendlayouts'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
	'muldenland',
	'Configuration/TSConfig/BackendLayoutsDoku.tsconfig',
	'Doku Backendlayouts'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
	'muldenland',
	'Configuration/TSConfig/Page_general.tsconfig',
	'Default PageTSConfig'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
	'muldenland',
	'Configuration/TSConfig/Restrictions/Restrict_calendarize.tsconfig',
	'EXT:calendarize :: Restrict pages to calendarize records'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
	'muldenland',
	'Configuration/TSConfig/Restrictions/Restrict_category.tsconfig',
	'SYS:category :: Restrict pages to category records'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
	'muldenland',
	'Configuration/TSConfig/Restrictions/Restrict_users.tsconfig',
	'SYS:fe_users :: Restrict pages to FE usergroups and FE user records'
);