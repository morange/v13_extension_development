import{Command as e,Plugin as t}from"@ckeditor/ckeditor5-core";import{ColorSelectorView as o,createDropdown as n,addListToDropdown as l,MenuBarMenuView as i,MenuBarMenuListView as r,MenuBarMenuListItemView as s,MenuBarMenuListItemButtonView as a,ViewModel as c,normalizeColorOptions as u,getLocalizedColorOptions as m,focusChildOnDropdownOpen as d}from"@ckeditor/ckeditor5-ui";import{Collection as p,CKEditorError as h}from"@ckeditor/ckeditor5-utils";import{isLength as g,isPercentage as b,addBackgroundRules as f}from"@ckeditor/ckeditor5-engine";
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class w extends e{constructor(e,t){super(e),this.attributeKey=t}refresh(){const e=this.editor.model,t=e.document;this.value=t.selection.getAttribute(this.attributeKey),this.isEnabled=e.schema.checkAttributeInSelection(t.selection,this.attributeKey)}execute(e={}){const t=this.editor.model,o=t.document.selection,n=e.value,l=e.batch,i=e=>{if(o.isCollapsed)n?e.setSelectionAttribute(this.attributeKey,n):e.removeSelectionAttribute(this.attributeKey);else{const l=t.schema.getValidRanges(o.getRanges(),this.attributeKey);for(const t of l)n?e.setAttribute(this.attributeKey,n,t):e.removeAttribute(this.attributeKey,t)}};l?t.enqueueChange(l,(e=>{i(e)})):t.change((e=>{i(e)}))}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */const v="fontSize",y="fontFamily",x="fontColor",C="fontBackgroundColor";function k(e,t){const o={model:{key:e,values:[]},view:{},upcastAlso:{}};for(const e of t)o.model.values.push(e.model),o.view[e.model]=e.view,e.upcastAlso&&(o.upcastAlso[e.model]=e.upcastAlso);return o}function L(e){return t=>t.getStyle(e).replace(/\s/g,"")}function A(e){return(t,{writer:o})=>o.createAttributeElement("span",{style:`${e}:${t}`},{priority:7})}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
class N extends w{constructor(e){super(e,y)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */function z(e){return e.map(F).filter((e=>void 0!==e))}function F(e){return"object"==typeof e?e:"default"===e?{title:"Default",model:void 0}:"string"==typeof e?function(e){const t=e.replace(/"|'/g,"").split(","),o=t[0],n=t.map(S).join(", ");return{title:o,model:n,view:{name:"span",styles:{"font-family":n},priority:7}}}(e):void 0}function S(e){return(e=e.trim()).indexOf(" ")>0&&(e=`'${e}'`),e}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class B extends t{static get pluginName(){return"FontFamilyEditing"}constructor(e){super(e),e.config.define(y,{options:["default","Arial, Helvetica, sans-serif","Courier New, Courier, monospace","Georgia, serif","Lucida Sans Unicode, Lucida Grande, sans-serif","Tahoma, Geneva, sans-serif","Times New Roman, Times, serif","Trebuchet MS, Helvetica, sans-serif","Verdana, Geneva, sans-serif"],supportAllValues:!1})}init(){const e=this.editor;e.model.schema.extend("$text",{allowAttributes:y}),e.model.schema.setAttributeProperties(y,{isFormatting:!0,copyOnEnter:!0});const t=z(e.config.get("fontFamily.options")).filter((e=>e.model)),o=k(y,t);e.config.get("fontFamily.supportAllValues")?(this._prepareAnyValueConverters(),this._prepareCompatibilityConverter()):e.conversion.attributeToElement(o),e.commands.add(y,new N(e))}_prepareAnyValueConverters(){const e=this.editor;e.conversion.for("downcast").attributeToElement({model:y,view:(e,{writer:t})=>t.createAttributeElement("span",{style:"font-family:"+e},{priority:7})}),e.conversion.for("upcast").elementToAttribute({model:{key:y,value:e=>e.getStyle("font-family")},view:{name:"span",styles:{"font-family":/.*/}}})}_prepareCompatibilityConverter(){this.editor.conversion.for("upcast").elementToAttribute({view:{name:"font",attributes:{face:/.*/}},model:{key:y,value:e=>e.getAttribute("face")}})}}var T='<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11.03 3h6.149a.75.75 0 1 1 0 1.5h-5.514L11.03 3zm1.27 3h4.879a.75.75 0 1 1 0 1.5h-4.244L12.3 6zm1.27 3h3.609a.75.75 0 1 1 0 1.5h-2.973L13.57 9zm-2.754 2.5L8.038 4.785 5.261 11.5h5.555zm.62 1.5H4.641l-1.666 4.028H1.312l5.789-14h1.875l5.789 14h-1.663L11.436 13z"/></svg>';
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class V extends t{static get pluginName(){return"FontFamilyUI"}init(){const e=this.editor,t=e.t,o=this._getLocalizedOptions(),u=e.commands.get(y),m=t("Font Family"),d=function(e,t){const o=new p;for(const n of e){const e={type:"button",model:new c({commandName:y,commandParam:n.model,label:n.title,role:"menuitemradio",withText:!0})};e.model.bind("isOn").to(t,"value",(e=>e===n.model||!(!e||!n.model)&&e.split(",")[0].replace(/'/g,"").toLowerCase()===n.model.toLowerCase())),n.view&&"string"!=typeof n.view&&n.view.styles&&e.model.set("labelStyle",`font-family: ${n.view.styles["font-family"]}`),o.add(e)}return o}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(o,u);e.ui.componentFactory.add(y,(t=>{const o=n(t);return l(o,d,{role:"menu",ariaLabel:m}),o.buttonView.set({label:m,icon:T,tooltip:!0}),o.extendTemplate({attributes:{class:"ck-font-family-dropdown"}}),o.bind("isEnabled").to(u),this.listenTo(o,"execute",(t=>{e.execute(t.source.commandName,{value:t.source.commandParam}),e.editing.view.focus()})),o})),e.ui.componentFactory.add(`menuBar:${y}`,(t=>{const o=new i(t);o.buttonView.set({label:m,icon:T}),o.bind("isEnabled").to(u);const n=new r(t);for(const l of d){const i=new s(t,o),r=new a(t);r.set({role:"menuitemradio",isToggleable:!0}),r.bind(...Object.keys(l.model)).to(l.model),r.delegate("execute").to(o),r.on("execute",(()=>{e.execute(l.model.commandName,{value:l.model.commandParam}),e.editing.view.focus()})),i.children.add(r),n.items.add(i)}return o.panelView.children.add(n),o}))}_getLocalizedOptions(){const e=this.editor,t=e.t;return z(e.config.get(y).options).map((e=>("Default"===e.title&&(e.title=t("Default")),e)))}}class P extends t{static get requires(){return[B,V]}static get pluginName(){return"FontFamily"}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class E extends w{constructor(e){super(e,v)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */function O(e){return e.map((e=>function(e){"number"==typeof e&&(e=String(e));if("object"==typeof e&&(t=e,t.title&&t.model&&t.view))return _(e);var t;const o=function(e){return"string"==typeof e?$[e]:$[e.model]}(e);if(o)return _(o);if("default"===e)return{model:void 0,title:"Default"};if(function(e){let t;if("object"==typeof e){if(!e.model)throw new h("font-size-invalid-definition",null,e);t=parseFloat(e.model)}else t=parseFloat(e);return isNaN(t)}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(e))return;return function(e){"string"==typeof e&&(e={title:e,model:`${parseFloat(e)}px`});return e.view={name:"span",styles:{"font-size":e.model}},_(e)}(e)}(e))).filter((e=>void 0!==e))}const $={get tiny(){return{title:"Tiny",model:"tiny",view:{name:"span",classes:"text-tiny",priority:7}}},get small(){return{title:"Small",model:"small",view:{name:"span",classes:"text-small",priority:7}}},get big(){return{title:"Big",model:"big",view:{name:"span",classes:"text-big",priority:7}}},get huge(){return{title:"Huge",model:"huge",view:{name:"span",classes:"text-huge",priority:7}}}};function _(e){return e.view&&"string"!=typeof e.view&&!e.view.priority&&(e.view.priority=7),e}const H=["x-small","x-small","small","medium","large","x-large","xx-large","xxx-large"];class D extends t{static get pluginName(){return"FontSizeEditing"}constructor(e){super(e),e.config.define(v,{options:["tiny","small","default","big","huge"],supportAllValues:!1})}init(){const e=this.editor;e.model.schema.extend("$text",{allowAttributes:v}),e.model.schema.setAttributeProperties(v,{isFormatting:!0,copyOnEnter:!0});const t=e.config.get("fontSize.supportAllValues"),o=O(this.editor.config.get("fontSize.options")).filter((e=>e.model)),n=k(v,o);t?(this._prepareAnyValueConverters(n),this._prepareCompatibilityConverter()):e.conversion.attributeToElement(n),e.commands.add(v,new E(e))}_prepareAnyValueConverters(e){const t=this.editor,o=e.model.values.filter((e=>!g(String(e))&&!b(String(e))));if(o.length)throw new h("font-size-invalid-use-of-named-presets",null,{presets:o});t.conversion.for("downcast").attributeToElement({model:v,view:(e,{writer:t})=>{if(e)return t.createAttributeElement("span",{style:"font-size:"+e},{priority:7})}}),t.conversion.for("upcast").elementToAttribute({model:{key:v,value:e=>e.getStyle("font-size")},view:{name:"span",styles:{"font-size":/.*/}}})}_prepareCompatibilityConverter(){this.editor.conversion.for("upcast").elementToAttribute({view:{name:"font",attributes:{size:/^[+-]?\d{1,3}$/}},model:{key:v,value:e=>{const t=e.getAttribute("size"),o="-"===t[0]||"+"===t[0];let n=parseInt(t,10);o&&(n=3+n);const l=H.length-1,i=Math.min(Math.max(n,0),l);return H[i]}}})}}!function(e,{insertAt:t}={}){if("undefined"==typeof document)return;const o=document.head||document.getElementsByTagName("head")[0],n=document.createElement("style");n.type="text/css",window.litNonce&&n.setAttribute("nonce",window.litNonce),"top"===t&&o.firstChild?o.insertBefore(n,o.firstChild):o.appendChild(n),n.styleSheet?n.styleSheet.cssText=e:n.appendChild(document.createTextNode(e))}(".ck-content .text-tiny{font-size:.7em}.ck-content .text-small{font-size:.85em}.ck-content .text-big{font-size:1.4em}.ck-content .text-huge{font-size:1.8em}");var G='<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.816 11.5 7.038 4.785 4.261 11.5h5.555zm.62 1.5H3.641l-1.666 4.028H.312l5.789-14h1.875l5.789 14h-1.663L10.436 13zm7.55 2.279.779-.779.707.707-2.265 2.265-2.193-2.265.707-.707.765.765V4.825c0-.042 0-.083.002-.123l-.77.77-.707-.707L17.207 2.5l2.265 2.265-.707.707-.782-.782c.002.043.003.089.003.135v10.454z"/></svg>';
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class q extends t{static get pluginName(){return"FontSizeUI"}init(){const e=this.editor,t=e.t,o=this._getLocalizedOptions(),u=e.commands.get(v),m=t("Font Size"),d=function(e,t){const o=new p;for(const n of e){const e={type:"button",model:new c({commandName:v,commandParam:n.model,label:n.title,class:"ck-fontsize-option",role:"menuitemradio",withText:!0})};n.view&&"string"!=typeof n.view&&(n.view.styles&&e.model.set("labelStyle",`font-size:${n.view.styles["font-size"]}`),n.view.classes&&e.model.set("class",`${e.model.class} ${n.view.classes}`)),e.model.bind("isOn").to(t,"value",(e=>e===n.model)),o.add(e)}return o}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */(o,u);e.ui.componentFactory.add(v,(t=>{const o=n(t);return l(o,d,{role:"menu",ariaLabel:m}),o.buttonView.set({label:m,icon:G,tooltip:!0}),o.extendTemplate({attributes:{class:["ck-font-size-dropdown"]}}),o.bind("isEnabled").to(u),this.listenTo(o,"execute",(t=>{e.execute(t.source.commandName,{value:t.source.commandParam}),e.editing.view.focus()})),o})),e.ui.componentFactory.add(`menuBar:${v}`,(t=>{const o=new i(t);o.buttonView.set({label:m,icon:G}),o.bind("isEnabled").to(u);const n=new r(t);for(const l of d){const i=new s(t,o),r=new a(t);r.set({role:"menuitemradio",isToggleable:!0}),r.bind(...Object.keys(l.model)).to(l.model),r.delegate("execute").to(o),r.on("execute",(()=>{e.execute(l.model.commandName,{value:l.model.commandParam}),e.editing.view.focus()})),i.children.add(r),n.items.add(i)}return o.panelView.children.add(n),o}))}_getLocalizedOptions(){const e=this.editor,t=e.t,o={Default:t("Default"),Tiny:t("Tiny"),Small:t("Small"),Big:t("Big"),Huge:t("Huge")};return O(e.config.get(v).options).map((e=>{const t=o[e.title];return t&&t!=e.title&&(e=Object.assign({},e,{title:t})),e}))}}class I extends t{static get requires(){return[D,q]}static get pluginName(){return"FontSize"}normalizeSizeOptions(e){return O(e)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class K extends w{constructor(e){super(e,x)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class R extends t{static get pluginName(){return"FontColorEditing"}constructor(e){super(e),e.config.define(x,{colors:[{color:"hsl(0, 0%, 0%)",label:"Black"},{color:"hsl(0, 0%, 30%)",label:"Dim grey"},{color:"hsl(0, 0%, 60%)",label:"Grey"},{color:"hsl(0, 0%, 90%)",label:"Light grey"},{color:"hsl(0, 0%, 100%)",label:"White",hasBorder:!0},{color:"hsl(0, 75%, 60%)",label:"Red"},{color:"hsl(30, 75%, 60%)",label:"Orange"},{color:"hsl(60, 75%, 60%)",label:"Yellow"},{color:"hsl(90, 75%, 60%)",label:"Light green"},{color:"hsl(120, 75%, 60%)",label:"Green"},{color:"hsl(150, 75%, 60%)",label:"Aquamarine"},{color:"hsl(180, 75%, 60%)",label:"Turquoise"},{color:"hsl(210, 75%, 60%)",label:"Light blue"},{color:"hsl(240, 75%, 60%)",label:"Blue"},{color:"hsl(270, 75%, 60%)",label:"Purple"}],columns:5}),e.conversion.for("upcast").elementToAttribute({view:{name:"span",styles:{color:/[\s\S]+/}},model:{key:x,value:L("color")}}),e.conversion.for("upcast").elementToAttribute({view:{name:"font",attributes:{color:/^#?\w+$/}},model:{key:x,value:e=>e.getAttribute("color")}}),e.conversion.for("downcast").attributeToElement({model:x,view:A("color")}),e.commands.add(x,new K(e)),e.model.schema.extend("$text",{allowAttributes:x}),e.model.schema.setAttributeProperties(x,{isFormatting:!0,copyOnEnter:!0})}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class j extends t{constructor(e,{commandName:t,componentName:o,icon:n,dropdownLabel:l}){super(e),this.commandName=t,this.componentName=o,this.icon=n,this.dropdownLabel=l,this.columns=e.config.get(`${this.componentName}.columns`)}init(){const e=this.editor,t=e.locale,l=t.t,r=e.commands.get(this.commandName),s=e.config.get(this.componentName),a=u(s.colors),c=m(t,a),p=s.documentColors,h=!1!==s.colorPicker;e.ui.componentFactory.add(this.componentName,(t=>{const i=n(t);let a=!1;const u=function({dropdownView:e,colors:t,columns:n,removeButtonLabel:l,colorPickerLabel:i,documentColorsLabel:r,documentColorsCount:s,colorPickerViewConfig:a}){const c=e.locale,u=new o(c,{colors:t,columns:n,removeButtonLabel:l,colorPickerLabel:i,documentColorsLabel:r,documentColorsCount:s,colorPickerViewConfig:a});return e.colorSelectorView=u,e.panelView.children.add(u),u}({dropdownView:i,colors:c.map((e=>({label:e.label,color:e.model,options:{hasBorder:e.hasBorder}}))),columns:this.columns,removeButtonLabel:l("Remove color"),colorPickerLabel:l("Color picker"),documentColorsLabel:0!==p?l("Document colors"):"",documentColorsCount:void 0===p?this.columns:p,colorPickerViewConfig:!!h&&(s.colorPicker||{})});return u.bind("selectedColor").to(r,"value"),i.buttonView.set({label:this.dropdownLabel,icon:this.icon,tooltip:!0}),i.extendTemplate({attributes:{class:"ck-color-ui-dropdown"}}),i.bind("isEnabled").to(r),u.on("execute",((t,o)=>{i.isOpen&&e.execute(this.commandName,{value:o.value,batch:this._undoStepBatch}),"colorPicker"!==o.source&&e.editing.view.focus(),"colorPickerSaveButton"===o.source&&(i.isOpen=!1)})),u.on("colorPicker:show",(()=>{this._undoStepBatch=e.model.createBatch()})),u.on("colorPicker:cancel",(()=>{this._undoStepBatch.operations.length&&(i.isOpen=!1,e.execute("undo",this._undoStepBatch)),e.editing.view.focus()})),i.on("change:isOpen",((t,o,n)=>{a||(a=!0,i.colorSelectorView.appendUI()),n&&(0!==p&&u.updateDocumentColors(e.model,this.componentName),u.updateSelectedColors(),u.showColorGridsFragment())})),d(i,(()=>i.colorSelectorView.colorGridsFragmentView.staticColorsGrid.items.find((e=>e.isOn)))),i})),e.ui.componentFactory.add(`menuBar:${this.componentName}`,(t=>{const n=new i(t);n.buttonView.set({label:this.dropdownLabel,icon:this.icon}),n.bind("isEnabled").to(r);let s=!1;const a=new o(t,{colors:c.map((e=>({label:e.label,color:e.model,options:{hasBorder:e.hasBorder}}))),columns:this.columns,removeButtonLabel:l("Remove color"),colorPickerLabel:l("Color picker"),documentColorsLabel:0!==p?l("Document colors"):"",documentColorsCount:void 0===p?this.columns:p,colorPickerViewConfig:!1});return a.bind("selectedColor").to(r,"value"),a.delegate("execute").to(n),a.on("execute",((t,o)=>{e.execute(this.commandName,{value:o.value,batch:this._undoStepBatch}),e.editing.view.focus()})),n.on("change:isOpen",((t,o,n)=>{s||(s=!0,a.appendUI()),n&&(0!==p&&a.updateDocumentColors(e.model,this.componentName),a.updateSelectedColors(),a.showColorGridsFragment())})),n.panelView.children.add(a),n}))}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
class M extends j{constructor(e){const t=e.locale.t;super(e,{commandName:x,componentName:x,icon:'<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M12.4 10.3 10 4.5l-2.4 5.8h4.8zm.5 1.2H7.1L5.7 15H4.2l5-12h1.6l5 12h-1.5L13 11.5zm3.1 7H4a1 1 0 0 1 0-2h12a1 1 0 0 1 0 2z"/></svg>',dropdownLabel:t("Font Color")})}static get pluginName(){return"FontColorUI"}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class U extends t{static get requires(){return[R,M]}static get pluginName(){return"FontColor"}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class W extends w{constructor(e){super(e,C)}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class Y extends t{static get pluginName(){return"FontBackgroundColorEditing"}constructor(e){super(e),e.config.define(C,{colors:[{color:"hsl(0, 0%, 0%)",label:"Black"},{color:"hsl(0, 0%, 30%)",label:"Dim grey"},{color:"hsl(0, 0%, 60%)",label:"Grey"},{color:"hsl(0, 0%, 90%)",label:"Light grey"},{color:"hsl(0, 0%, 100%)",label:"White",hasBorder:!0},{color:"hsl(0, 75%, 60%)",label:"Red"},{color:"hsl(30, 75%, 60%)",label:"Orange"},{color:"hsl(60, 75%, 60%)",label:"Yellow"},{color:"hsl(90, 75%, 60%)",label:"Light green"},{color:"hsl(120, 75%, 60%)",label:"Green"},{color:"hsl(150, 75%, 60%)",label:"Aquamarine"},{color:"hsl(180, 75%, 60%)",label:"Turquoise"},{color:"hsl(210, 75%, 60%)",label:"Light blue"},{color:"hsl(240, 75%, 60%)",label:"Blue"},{color:"hsl(270, 75%, 60%)",label:"Purple"}],columns:5}),e.data.addStyleProcessorRules(f),e.conversion.for("upcast").elementToAttribute({view:{name:"span",styles:{"background-color":/[\s\S]+/}},model:{key:C,value:L("background-color")}}),e.conversion.for("downcast").attributeToElement({model:C,view:A("background-color")}),e.commands.add(C,new W(e)),e.model.schema.extend("$text",{allowAttributes:C}),e.model.schema.setAttributeProperties(C,{isFormatting:!0,copyOnEnter:!0})}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
class J extends j{constructor(e){const t=e.locale.t;super(e,{commandName:C,componentName:C,icon:'<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm8.38 9.262H7.62L10 5.506l2.38 5.756zm.532 1.285L14.34 16h1.426L10.804 4H9.196L4.234 16H5.66l1.428-3.453h5.824z"/></svg>',dropdownLabel:t("Font Background Color")})}static get pluginName(){return"FontBackgroundColorUI"}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class Q extends t{static get requires(){return[Y,J]}static get pluginName(){return"FontBackgroundColor"}}
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */class X extends t{static get requires(){return[P,I,U,Q]}static get pluginName(){return"Font"}}export{X as Font,Q as FontBackgroundColor,Y as FontBackgroundColorEditing,J as FontBackgroundColorUI,U as FontColor,R as FontColorEditing,M as FontColorUI,P as FontFamily,B as FontFamilyEditing,V as FontFamilyUI,I as FontSize,D as FontSizeEditing,q as FontSizeUI};