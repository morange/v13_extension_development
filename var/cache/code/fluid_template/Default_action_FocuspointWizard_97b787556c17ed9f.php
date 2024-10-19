<?php
class Default_action_FocuspointWizard_97b787556c17ed9f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '<div class="modal-panel-main">
    <div id="t3js-crop-image-container" class="cropper-image-container">
        <div id="focuspoint-container">
            <img src="" data-src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'src' => '',
'treatIdAsReference' => false,
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'absolute' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('image'),
'maxWidth' => 1280,
'maxHeight' => 980,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '"
                 class="cropper-image-container-image"
                 alt="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.properties.alternative')]);

$output0 .= '"
                 id="t3js-crop-image"
                 data-original-width="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.properties.width')]);

$output0 .= '"
                 data-original-height="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('image.properties.height')]);

$output0 .= '"
            />

            <div data-focuspointBoxId="x"
                 class="focuspoint-item focuspoint-item-hidden ui-draggable ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('focusPoints.singlePoint.resizable'),
'1' => '==1',
];

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments3 = [
'then' => 'ui-resizable',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, static fn() => '', $renderingContext)
;

$output0 .= ' focuspoint-item-dummy">
                <span>x</span>
            </div>
        </div>
    </div>
</div>

<div class="modal-panel-sidebar">
    <div class="panel-group" id="accordion-cropper-variants" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default panel-hidden panel-dummy">
            <div class="panel-heading" role="tab" data-append-id="id" id="cropper-accordion-heading-">
                <h4 class="panel-title">
                    <a role="button"
                       data-bs-toggle="collapse"
                       data-parent="#accordion-cropper-variants"
                       href="#cropper-collapse-"
                       aria-expanded="false"
                       aria-controls="cropper-collapse-"
                       class="t3js-crop-variant-trigger collapsed panel-link"
                       data-append-id="href,aria-controls"
                       data-crop-variant>
                        <span data-nr="" data-append-id="data-nr">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-chevron-down',
'size' => 'small',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('focusPoints.singlePoint.title'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '
                        </span>
                    </a>
                </h4>
            </div>
            <div id="cropper-collapse-"
                 class="panel-collapse collapse"
                 role="tabpanel"
                 aria-labelledby="cropper-accordion-heading-"
                 data-append-id="id,aria-labelledby">
                <div class="panel-body">
                    <form>
                        <input type="hidden" name="x" data-focuspointPanelId="x"/> <input type="hidden"
                                                                                          name="y"
                                                                                          data-focuspointPanelId="x"/>
                        <input type="hidden"
                               value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('focusPoints.singlePoint.defaultHeight')]);

$output0 .= '"
                               name="height"
                               data-focuspointPanelId="x"/> <input type="hidden"
                                                                   value="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('focusPoints.singlePoint.defaultWidth')]);

$output0 .= '"
                                                                   name="width"
                                                                   data-focuspointPanelId="x"/>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
$output12 = '';

$output12 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$array15 = [
'field' => $renderingContext->getVariableProvider()->getByPath('field'),
'fieldname' => $renderingContext->getVariableProvider()->getByPath('fieldname'),
'j' => $renderingContext->getVariableProvider()->getByPath('j'),
];

$arguments13 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'FocuspointWizardInput',
'arguments' => $array15,
];

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
                        ';
return $output12;
};

$arguments10 = [
'reverse' => false,
'each' => $renderingContext->getVariableProvider()->getByPath('focusPoints.singlePoint.fields'),
'as' => 'field',
'key' => 'fieldname',
'iteration' => 'j',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
                        <div class="input-group">
                            <button data-delete class="btn btn-danger singlepoint-delete">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-delete',
'size' => 'small',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:bw_focuspoint_images/Resources/Private/Language/locallang_db.xlf:wizard.single_point.button.delete',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output0 .= '
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="panel-body">
        <button data-method="new" class="btn btn-success btn-block">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-plus',
'size' => 'small',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:bw_focuspoint_images/Resources/Private/Language/locallang_db.xlf:wizard.single_point.button.addnew',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output0 .= '
        </button>
    </div>
</div>

<style type="text/css">
    .modal.modal-focuspoints .modal-dialog {
        width: auto;
        max-width: calc(100vw - 60px);
        max-height: 100vh;
    }

    .modal.modal-focuspoints .modal-dialog .modal-content {
        margin-top: 0 !important;
    }

    .modal.modal-focuspoints .panel-default, .panel, .modal.modal-focuspoints .panel-default, .panel-default {
        background-color: inherit;
        border: 0;
    }

    .modal-body-focuspoints {
        display: flex;
        flex-wrap: nowrap;
        padding: 0;
    }

    .modal-body-focuspoints .modal-panel-main {
        flex-grow: 1;
        padding: 15px;
        max-width: calc(100vw - 372px);
    }

    .modal-body-focuspoints .modal-panel-linkbrowser {
        background-color: #fafafa;
        color: #000;
        flex-grow: 1;
        max-width: calc(100vw - 372px);
        display: none;
        margin: 5px;
    }

    .modal-body-focuspoints .btn.btn-danger {
        gap: 8px;
    }

    .modal-body-focuspoints .form-wizards-wrap {
        display: flex;
    }

    .modal-body-focuspoints .form-wizards-wrap .form-wizards-element {
        flex-grow: 1;
    }

    .modal-body-focuspoints .form-wizards-wrap .form-wizards-items-aside {
        display: grid;
        align-self: stretch;
    }

    .modal-body-focuspoints .modal-panel-linkbrowser.open {
        display: block;
    }

    .modal-body-focuspoints .modal-panel-linkbrowser.open + .modal-panel-main {
        display: none;
    }

    .modal-body-focuspoints .modal-panel-linkbrowser .nav-tabs {
        padding: 15px 15px 0 15px;
        position: relative;
    }

    .modal-body-focuspoints .modal-panel-linkbrowser-content {
        background: #fafafa;
        padding: 15px;
        max-height: calc(100vh - 200px);
        overflow-y: scroll;
    }

    .modal-body-focuspoints .modal-panel-linkbrowser-item:not(.active) {
        display: none;
    }

    .modal-body-focuspoints .modal-panel-linkbrowser-content .recordlist tr {
        cursor: pointer;
    }

    .modal-body-focuspoints .modal-panel-linkbrowser-content .recordlist thead .btn-group {
        display: none;
    }

    .modal-body-focuspoints .modal-panel-linkbrowser-content .recordlist tbody tr:first-child[data-uid="0"],
    .modal-body-focuspoints .modal-panel-linkbrowser-content .recordlist tbody tr:last-child[data-uid="0"] {
        display: none;
    }

    .pagetree-link.has-sub {
        position: relative;
    }

    .pagetree-link.has-sub.active .pagetree-opener {
        transform: rotate(90deg);
    }

    .pagetree-opener {
        width: 0;
        height: 0;
        display: inline-block;
        border-top: 5px solid transparent;
        border-left: 5px solid #333;
        border-bottom: 5px solid transparent;
        position: absolute;
        margin-left: -12px;
        margin-top: 4px;
        box-shadow: 0 0 0 1px #fafafa;
        background-color: #fafafa;
        z-index: 1;
        transition: transform 0.2s ease;
    }

    .db_list_normal.is-child:not(.open) {
        display: none;
    }

    #closelinkbrowser, .linkbrowser-remove {
        position: absolute;
        right: 0;
        font-size: 14px;
        padding: 12px;
        top: 0;
        opacity: 0.8;
    }

    .linkbrowser-remove {
        right: 25px;
        padding: 5px 10px;
        opacity: 0.5;
    }

    .modal-body-focuspoints .modal-panel-main .cropper-image-container {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: none !important;
    }

    .modal-body-focuspoints .modal-panel-main .cropper-image-container img {
        max-width: 100%;
        max-height: calc(100vh - 190px);
        width: auto;
        height: auto;
    }

    .modal-body-focuspoints .modal-panel-main .cropper-image-container #focuspoint-container {
        position: relative;
    }

    .modal-body-focuspoints .modal-panel-main .cropper-image-container .focuspoint-item {
        position: absolute;
        background-color: rgba(0, 0, 0, 0.6);
        color: #fff;

        line-height: 7.6px;
        top: 0;
        left: 0;
        cursor: move;
    }

    .modal-body-focuspoints .modal-panel-main .cropper-image-container .focuspoint-item.active {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-body-focuspoints .modal-panel-main .cropper-image-container .focuspoint-item.focuspoint-item-dummy,
    .modal-body-focuspoints .modal-panel-main .cropper-image-container .focuspoint-item.focuspoint-item-hidden {
        display: none;
    }

    .modal-body-focuspoints .modal-panel-main .cropper-image-container .focuspoint-item span {
        border: 1px dotted rgba(255, 255, 255, 0.6);
        padding: 5px;
        display: flex;
        width: 100%;
        height: 100%;
        justify-content: center;
        align-items: center;
    }


    .modal-body-focuspoints .modal-panel-sidebar {
        background-color: #333;
        height: 100%;
        max-height: calc(100vh - 137px);
        overflow: scroll;
        -ms-overflow-style: none;
        scrollbar-width: none;
        min-width: 344px;
    }

    .modal-body-focuspoints .modal-panel-sidebar::-webkit-scrollbar {
        display: none;
    }

    .modal-body-focuspoints .modal-panel-sidebar .panel-group {
        margin: 0;
        min-width: 332px;
    }

    .modal-body-focuspoints .help-block {
        color: #eee;
    }

    .modal-body-focuspoints .help-block:empty {
        display: none;
    }

    .modal-body-focuspoints .modal-panel-sidebar .panel-hidden,
    .modal-body-focuspoints .modal-panel-sidebar .panel-dummy {
        display: none;
    }

    .modal-body-focuspoints .modal-panel-sidebar span[data-nr]:after {
        content: attr(data-nr);
    }

    .modal-body-focuspoints .modal-panel-sidebar a[aria-expanded="true"] .icon-actions-chevron-down {
        transform: rotate(-180deg);
    }

    .modal-body-focuspoints .modal-panel-sidebar input, .modal-body-focuspoints .modal-panel-sidebar textarea, .modal-body-focuspoints .modal-panel-sidebar select {
        color: #333;
    }

    .modal-panel-sidebar select {
        height: 30px;
    }

    .modal-body-focuspoints .modal-panel-sidebar .focus-input-group:not(.focus-input-group--link) {
        display: grid;
        grid-template-columns: auto min-content;
    }

    .modal-body-focuspoints .modal-panel-sidebar label:not(.element1), .modal-body-focuspoints .modal-panel-sidebar .singlepoint-delete {
        margin-top: 15px;
    }

    .modal-body-focuspoints .linkbrowser__target {
        display: grid;
        grid-column: 1 / 3;
        grid-template-columns: min-content auto;
        gap: 10px;
        align-items: baseline;
    }

    .modal-body-focuspoints .linkbrowser__target label {
        margin-top: 10px;
    }

    .modal-body-focuspoints .t3js-form-field-inputlink-input {
        border-radius: 0;
    }

    .modal-body-focuspoints .form-control-clearable button {
        color: #000;
    }

    .modal-body-focuspoints .form-control.hidden + .close {
        display: none;
    }

    /*!
     * jQuery UI Resizable @VERSION
     */
    .ui-resizable {
        position: relative;
    }

    .ui-resizable-handle {
        position: absolute;
        font-size: 0.1px;
        display: block;
        -ms-touch-action: none;
        touch-action: none;
    }

    .ui-resizable-disabled .ui-resizable-handle,
    .ui-resizable-autohide .ui-resizable-handle {
        display: none;
    }

    .ui-resizable-n {
        cursor: n-resize;
        height: 7px;
        width: 100%;
        top: -5px;
        left: 0;
    }

    .ui-resizable-s {
        cursor: s-resize;
        height: 7px;
        width: 100%;
        bottom: -5px;
        left: 0;
    }

    .ui-resizable-e {
        cursor: e-resize;
        width: 7px;
        right: -5px;
        top: 0;
        height: 100%;
    }

    .ui-resizable-w {
        cursor: w-resize;
        width: 7px;
        left: -5px;
        top: 0;
        height: 100%;
    }

    .ui-resizable-se {
        cursor: se-resize;
        width: 12px;
        height: 12px;
        right: 1px;
        bottom: 1px;
    }

    .ui-resizable-sw {
        cursor: sw-resize;
        width: 9px;
        height: 9px;
        left: -5px;
        bottom: -5px;
    }

    .ui-resizable-nw {
        cursor: nw-resize;
        width: 9px;
        height: 9px;
        left: -5px;
        top: -5px;
    }

    .ui-resizable-ne {
        cursor: ne-resize;
        width: 9px;
        height: 9px;
        right: -5px;
        top: -5px;
    }
</style>
';

    return $output0;
}

}

#