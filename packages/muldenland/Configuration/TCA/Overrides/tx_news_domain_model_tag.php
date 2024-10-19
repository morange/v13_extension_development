<?php
defined('TYPO3') or die('Access denied.');


// deaktiveren des Record Types :: News Tag
$GLOBALS['TCA']['tx_news_domain_model_tag']['ctrl']['hideTable'] = true;

// Add crop variants
$defaultCropSettings = [
	'title' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:option.default',
	'allowedAspectRatios' => [
		'16:9' => [
			'title' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:ratio.16_9',
			'value' => 16 / 9
		],
		'4:3' => [
			'title' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:ratio.4_3',
			'value' => 4 / 3
		],
		'1:1' => [
			'title' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:ratio.1_1',
			'value' => 1.0
		],
		'NaN' => [
			'title' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:ratio.free',
			'value' => 0.0
		],
	],
	'selectedRatio' => 'NaN',
	'cropArea' => [
		'x' => 0.0,
		'y' => 0.0,
		'width' => 1.0,
		'height' => 1.0,
	]
];
//$xlargeCropSettings = $defaultCropSettings;
// $xlargeCropSettings['title'] = 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:option.xlarge';
$largeCropSettings = $defaultCropSettings;
$largeCropSettings['title'] = 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:option.large';
$mediumCropSettings = $defaultCropSettings;
$mediumCropSettings['title'] = 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:option.medium';
$smallCropSettings = $defaultCropSettings;
$smallCropSettings['title'] = 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:option.small';
// $extrasmallCropSettings = $defaultCropSettings;
// $extrasmallCropSettings['title'] = 'LLL:EXT:muldenland/Resources/Private/Site/Language/fluid_styled_content/locallang.xlf:option.extrasmall';


// Textmedia content element
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['fal_media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['default'] = $defaultCropSettings;
// $GLOBALS['TCA']['tx_news_domain_model_news']['columns']['fal_media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['xlarge'] = $xlargeCropSettings;
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['fal_media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['large'] = $largeCropSettings;
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['fal_media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['medium'] = $mediumCropSettings;
$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['fal_media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['small'] = $smallCropSettings;
// $GLOBALS['TCA']['tx_news_domain_model_news']['columns']['fal_media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['extrasmall'] = $extrasmallCropSettings;


// Pages
foreach ([1, 3, 4] as $type) {
	$GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['default'] = $defaultCropSettings;
	// $GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['xlarge'] = $xlargeCropSettings;
	$GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['large'] = $largeCropSettings;
	$GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['medium'] = $mediumCropSettings;
	$GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['small'] = $smallCropSettings;
	// $GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['extrasmall'] = $extrasmallCropSettings;
}