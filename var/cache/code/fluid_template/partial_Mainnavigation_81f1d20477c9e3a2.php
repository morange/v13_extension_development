<?php
class partial_Mainnavigation_81f1d20477c9e3a2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
	<nav class="row expanded">
		<div class="columns megamenu-group DisclosureNav">
			
			<div class="title-bar">
				<button aria-label="Menu" class="menu-icon dark" data-toggle="megamenu" tabindex="0" type="button">
					<!-- Menu is closed -->
					<svg class="normal is-closed" height="70.001" viewBox="0 0 70 70.001" width="70"
					     xmlns="http://www.w3.org/2000/svg">
						<rect class="cls-1" height="10" width="10" x="30" y="10"/>
						<rect class="cls-1" height="10" width="10" x="30" y="30"/>
						<rect class="cls-1" height="10" width="10" x="50" y="30"/>
						<rect class="cls-1" height="10" width="10" x="50" y="10"/>
						<rect class="cls-1" height="10" width="10" x="30" y="50"/>
						<rect class="cls-1" height="10" width="10" x="50" y="50"/>
						<rect class="cls-1" height="10" width="10" x="10" y="50"/>
						<rect class="cls-1" height="10" width="10" x="10" y="30"/>
						<rect class="cls-1" height="10" width="10" x="10" y="10"/>
						<path class="cls-2"
						      d="M70,70H0V0h70v70ZM50,50v10h10v-10h-10ZM30,50v10h10v-10h-10ZM10,50v10h10v-10h-10ZM50,30v10h10v-10h-10ZM30,30v10h10v-10h-10ZM10,30v10h10v-10h-10ZM50,10v10h10v-10h-10ZM30,10v10h10v-10h-10ZM10,10v10h10v-10h-10Z"
						      id="menu"/>
					</svg>
					
					<!-- Menu is open -->
					<svg class="hidden is-open" height="70.001" viewBox="0 0 70 70.001" width="70"
					     xmlns="http://www.w3.org/2000/svg">
						<path class="cls-2" d="M70,70H0V0h70v70ZM50,30v10h10v-10h-10ZM30,30v10h10v-10h-10ZM10,30v10h10v-10h-10Z"
						      id="menu-is-active"/>
						<rect class="cls-1" height="10" width="10" x="30" y="30"/>
						<rect class="cls-1" height="10" width="10" x="50" y="30"/>
						<rect class="cls-1" height="10" width="10" x="10" y="30"/>
					</svg>
				</button>
				<span>
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
'key' => 'LLL:EXT:muldenland/Resources/Private/Site/Language/fe_locallang.xlf:frontend.menu',
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
				</span>
			</div>
			
			<div class="top-bar" data-toggler="is-active" id="megamenu">
				<div class="top-bar-left">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'partial' => 'Navigation',
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
					<ul class="horizontal menu accordion-menu menu-formal hide-for-xxlarge" >
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'partial' => 'Formalnavigation',
];

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
						';
return $output10;
};

$arguments8 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'as' => 'item',
'each' => $renderingContext->getVariableProvider()->getByPath('formalesMenu'),
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output3 .= '
					</ul>
					
					';

$output3 .= '';

$output3 .= '
				</div>
			</div>
		</div>
	</nav>
	<!-- End Top Bar -->
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