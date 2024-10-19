<?php
class partial_Operator_902173ca5304b646 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
    2 => NULL,
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
	<div class="row operator">
		<div class="columns frame-type-2cols frame-layout-110 text-center large-12 medium-12 small-12">
			
			<div class="grid-x grid-margin-x">
				<div class="cell">
				</div>
			</div>
			
			<div class="row">
				<div class="sign columns text-uppercase small-12 medium-12 large-12">
					<svg data-name="signet-kontakt" id="signet-kontakt" version="1.1" viewBox="0 0 80 76.3"
					     xmlns="http://www.w3.org/2000/svg">
						<path class="signet kontakt"
						      d="M76.7,21.4c-3.5-9-11.3-14.3-19.7-18.2C48.5-.8,37.9-.8,29,1.8,19,4.7,11.6,10.8,5.7,19.3c-9.1,13.3-7,28.8,3.4,40.7,9.6,10.9,25.8,19,40.5,15.6,15.7-3.7,29.6-19.3,30.3-35.7.1-6.3-1-12.6-3.2-18.4ZM37.7,16.1c2.1,4.1,3.6,10.5-1.4,12.5-1.4-3.9-4.7-15.1-4.7-15.1,2.4-.8,5.1.3,6.1,2.7h0ZM41.4,60.6c-3.4-2.4-10.3-9.7-14.3-19.8-2.2-5.5-2.9-11.6-2.9-18.4.1-6,2.7-7.7,5.3-8.5l4.8,15s-3.3,1.1-1.9,5.3c1.2,5.4,3.7,10.5,7.2,14.7.8,1.3,2.1,1.3,3.9,0,1.3,3.2,7,13.8,7,13.8,0,0-3.7,1.5-9-2.2h0ZM52.9,61.8l-7.3-13.6c4.2-2.4,6.2.6,6.2.6,0,0,1.9,3.8,3.6,6.9s-2.5,6.1-2.5,6.1Z"
						      data-name="Pfad 69"
						      id="Pfad_69"/>
					</svg>
					<div class="line"></div>
				</div>
				
				
				<div class="columns small-12 medium-12 large-12">
					<p class="ce__header--1">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fe_locallang.xlf:frontend.contact',
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
					</p>
					<p class="ce__header--2">';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.operatorFooter')]);

$output3 .= '</p>
					<p>';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.address')]);

$output3 .= '</p>
				</div>
			</div>
			
			<div class="grid-x grid-margin-x contact">
				<div class="cell text-center large-6 medium-6 small-12">
					<p aria-describedby="phoneLabel" class="text-uppercase text-right">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fe_locallang.xlf:frontend.constants.phone',
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output3 .= ':
						<a href="tel:';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.phone')]);

$output3 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fe_locallang.xlf:frontend.constants.callme',
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '"><span
								class="label" id="phoneLabel">';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.phone')]);

$output3 .= '</span>
						</a>
					</p>
				</div>
				
				<div class="cell text-center large-6 medium-6 small-12">
					<p aria-describedby="mobilephoneLabel" class="text-uppercase text-left">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fe_locallang.xlf:frontend.constants.mobilePhone',
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output3 .= ':
						<a href="tel:';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.mobilephone')]);

$output3 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fe_locallang.xlf:frontend.constants.callme',
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output3 .= '"><span
								class="label" id="mobilephoneLabel">';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.mobilephone')]);

$output3 .= '</span>
						</a>
					</p>
				</div>
			
			</div>
		
		</div>
	</div>
';
return $output3;
};

$arguments1 = [
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

    return $output0;
}

}

#