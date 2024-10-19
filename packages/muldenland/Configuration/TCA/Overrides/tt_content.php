<?php
declare(strict_types=1);
defined('TYPO3') or die();

$alledCE = "dermatthesfrauhofer_iconwithheadline, dermatthesfrauhofer_projectbox, textmedia";
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	(
		new \B13\Container\Tca\ContainerConfiguration(
			'2cols', // CType
			'2 Spalten', // label
			'50% / 50%', // description
			[
				[
					['name' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/be_locallang.xlf:plugin.col.left', 'colPos' => 201, 'allowed' => ['CType' => $alledCE]],
					['name' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/be_locallang.xlf:plugin.col.right', 'colPos' => 203, 'allowed' => ['CType' => $alledCE]]
				]
			] // grid configuration
		)
	)
		// override default configurations
		->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
		->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['2cols']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	(
		new \B13\Container\Tca\ContainerConfiguration(
			'3cols', // CType
			'3 Spalten', // label
			'33% / 33% / 33%', // description
			[
				[
					['name' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/be_locallang.xlf:plugin.col.left', 'colPos' => 201, 'allowed' => ['CType' => $alledCE]],
					['name' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/be_locallang.xlf:plugin.col.center', 'colPos' => 202, 'allowed' => ['CType' => $alledCE]],
					['name' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/be_locallang.xlf:plugin.col.right', 'colPos' => 203, 'allowed' => ['CType' => $alledCE]]
				]
			] // grid configuration
		)
	)
		// override default configurations
		->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
		->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
$GLOBALS['TCA']['tt_content']['types']['3cols']['showitem'] = 'sys_language_uid,CType,header,header_layout,layout,colPos,tx_container_parent';

/*
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
	(
		new \B13\Container\Tca\ContainerConfiguration(
			'accordion', // CType
			'LLL:EXT:muldenland/Resources/Private/Site/Language/be_locallang.xlf:plugin.accordion.title', // label
			'LLL:EXT:muldenland/Resources/Private/Site/Language/be_locallang.xlf:plugin.accordion.description', // description
			[
				[
					[
						'name' => 'Akkordeon Elemente',
						'colPos' => 1001,
						'disallowed' => [
							'CType' =>
								'2cols, 3cols, accordion,
								header, text, textpic, image, ext_labelcontent, ext_textmedia,
								bullets, table, uploads, menu_abstract,
								menu_categorized_content, menu_categorized_pages, menu_pages, menu_subpages, menu_related_pages, menu_section, menu_section_pages, menu_sitemap, menu_recently_updated, menu_sitemap_pages,
								felogin_login, list, div, html, card_group, shortcut,
								news_pi1, news_newsliststicky, news_newsdetail, news_newsdatemenu, news_newssearchform, news_newssearchresult, news_newsselectedlist, news_categorylist, news_taglist'
						]
					]
				]
			] // grid configuration
		)
	)
	// override default configurations
	->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
	->setSaveAndCloseInNewContentElementWizard(true)
);
// override default settings
// $GLOBALS['TCA']['tt_content']['types']['accordion']['showitem'] = 'sys_language_uid, CType, header, header_layout, layout, space_before_class, space_after_class, colPos, tx_container_parent';
*/

// Pflichtfeld Header definieren
$GLOBALS['TCA']['tt_content']['columns']['header']['config']['eval'] = 'required';


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
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['default'] = $defaultCropSettings;
// $GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['xlarge'] = $xlargeCropSettings;
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['large'] = $largeCropSettings;
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['medium'] = $mediumCropSettings;
$GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['small'] = $smallCropSettings;
// $GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['extrasmall'] = $extrasmallCropSettings;


// Pages
foreach ([1, 3, 4] as $type) {
	$GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['default'] = $defaultCropSettings;
	// $GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['xlarge'] = $xlargeCropSettings;
	$GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['large'] = $largeCropSettings;
	$GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['medium'] = $mediumCropSettings;
	$GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['small'] = $smallCropSettings;
	// $GLOBALS['TCA']['pages']['types'][$type]['columnsOverrides']['thumbnail']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['extrasmall'] = $extrasmallCropSettings;
}
