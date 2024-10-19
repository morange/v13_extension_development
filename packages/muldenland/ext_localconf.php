<?php

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['MyRTEPreset'] = 'EXT:muldenland/Configuration/RTE/MyRTEPreset.yaml';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
	'@import "EXT:muldenland/Configuration/TSConfig/User_general.tsconfig"'
);
