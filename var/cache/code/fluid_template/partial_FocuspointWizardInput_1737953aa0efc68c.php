<?php
class partial_FocuspointWizardInput_1737953aa0efc68c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bw' => 
  array (
    0 => 'Blueways\\BwFocuspointImages\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '<html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers">



';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('field.title'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
    <label class="element';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('j.cycle')]);

$output4 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('field.title');
};

$arguments5 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('field.title'),
];

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output4 .= '
    </label>
';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
<div class="focus-input-group focus-input-group--';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('field.type')]);

$output0 .= '">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output24 = '';

$output24 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
            <input class="form-control" type="text" name="';

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldname')]);

$output27 .= '" data-focuspointPanelId="x"/>
        ';
return $output27;
};

$arguments25 = [
'value' => 'text',
];

$output24 .= '';

$output24 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
            <textarea class="form-control" name="';

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldname')]);

$output30 .= '" data-focuspointPanelId="x"></textarea>
        ';
return $output30;
};

$arguments28 = [
'value' => 'textarea',
];

$output24 .= '';

$output24 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
$output33 = '';

$output33 .= '
            <select class="form-control form-select" name="';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldname')]);

$output33 .= '" data-focuspointPanelId="x">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '
                    <option value="';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('optionname')]);

$output36 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('option'),
];

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '</option>
                ';
return $output36;
};

$arguments34 = [
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('field.options'),
'as' => 'option',
'key' => 'optionname',
'iteration' => 'k',
];

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
            </select>
        ';
return $output33;
};

$arguments31 = [
'value' => 'select',
];

$output24 .= '';

$output24 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
$output41 = '';

$output41 .= '

            <div class="form-wizards-wrap">
                <div class="form-wizards-element">
                    <div class="input-group t3js-form-field-inputlink">
                        <span class="t3js-form-field-inputlink-icon input-group-addon"></span>
                        <input class="form-control t3js-form-field-inputlink-explanation"
                               data-bs-toggle="tooltip"
                               title=""
                               value=""
                               readonly>
                        <div class="form-control-clearable form-control-clearable-wrapper"><input type="text"
                                                                   id="formengine-input-6138b15cb744c617898547"
                                                                   class="form-control t3js-clearable t3js-form-field-inputlink-input hidden hasDefaultValue t3js-charcounter-initialized"
                                                                   maxlength="1024">
                            <button type="button" tabindex="-1" class="close" style="visibility: hidden;">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-close',
'size' => 'small',
];

$output41 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                            </button>
                        </div>
                        <button class="btn btn-default t3js-form-field-inputlink-explanation-toggle"
                                type="button"
                                title="Linkerläuterung umschalten">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-eye-link',
'size' => 'small',
];

$output41 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output41 .= '
                        </button>
                        <input type="hidden"
                               name="data[tt_content][4267][header_link]"
                               value="t3://page?uid=117 _blank css titel">
                    </div>
                </div>
                <div class="form-wizards-items-aside">
                    <a href="#"
                       class="linkbrowser btn btn-default"
                       data-focuspointPanelId="x"
                       data-fieldname="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldname')]);

$output41 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-link',
'size' => 'small',
];

$output41 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output41 .= '
                    </a>
                </div>
            </div>

        ';
return $output41;
};

$arguments39 = [
'value' => 'link',
];

$output24 .= '';

$output24 .= '
    ';
return $output24;
};

$arguments7 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('field.type'),
];

$output0 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 'text';
}): return call_user_func(function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            <input class="form-control" type="text" name="';

$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldname')]);

$output9 .= '" data-focuspointPanelId="x"/>
        ';
return $output9;
});
case call_user_func(function() use ($renderingContext) {

return 'textarea';
}): return call_user_func(function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            <textarea class="form-control" name="';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldname')]);

$output10 .= '" data-focuspointPanelId="x"></textarea>
        ';
return $output10;
});
case call_user_func(function() use ($renderingContext) {

return 'select';
}): return call_user_func(function() use ($renderingContext) {
$output11 = '';

$output11 .= '
            <select class="form-control form-select" name="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldname')]);

$output11 .= '" data-focuspointPanelId="x">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
                    <option value="';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('optionname')]);

$output14 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('option'),
];

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output14 .= '</option>
                ';
return $output14;
};

$arguments12 = [
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('field.options'),
'as' => 'option',
'key' => 'optionname',
'iteration' => 'k',
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
            </select>
        ';
return $output11;
});
case call_user_func(function() use ($renderingContext) {

return 'link';
}): return call_user_func(function() use ($renderingContext) {
$output17 = '';

$output17 .= '

            <div class="form-wizards-wrap">
                <div class="form-wizards-element">
                    <div class="input-group t3js-form-field-inputlink">
                        <span class="t3js-form-field-inputlink-icon input-group-addon"></span>
                        <input class="form-control t3js-form-field-inputlink-explanation"
                               data-bs-toggle="tooltip"
                               title=""
                               value=""
                               readonly>
                        <div class="form-control-clearable form-control-clearable-wrapper"><input type="text"
                                                                   id="formengine-input-6138b15cb744c617898547"
                                                                   class="form-control t3js-clearable t3js-form-field-inputlink-input hidden hasDefaultValue t3js-charcounter-initialized"
                                                                   maxlength="1024">
                            <button type="button" tabindex="-1" class="close" style="visibility: hidden;">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-close',
'size' => 'small',
];

$output17 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                            </button>
                        </div>
                        <button class="btn btn-default t3js-form-field-inputlink-explanation-toggle"
                                type="button"
                                title="Linkerläuterung umschalten">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-eye-link',
'size' => 'small',
];

$output17 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
                        </button>
                        <input type="hidden"
                               name="data[tt_content][4267][header_link]"
                               value="t3://page?uid=117 _blank css titel">
                    </div>
                </div>
                <div class="form-wizards-items-aside">
                    <a href="#"
                       class="linkbrowser btn btn-default"
                       data-focuspointPanelId="x"
                       data-fieldname="';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldname')]);

$output17 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-link',
'size' => 'small',
];

$output17 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output17 .= '
                    </a>
                </div>
            </div>

        ';
return $output17;
});
default:
return '';
}
}, array($arguments7));

$output0 .= '
</div>

</html>
';

    return $output0;
}

}

#