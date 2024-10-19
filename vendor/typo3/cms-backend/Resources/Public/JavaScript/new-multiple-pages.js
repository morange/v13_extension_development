/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
import DocumentService from"@typo3/core/document-service.js";import RegularEvent from"@typo3/core/event/regular-event.js";var Identifiers;!function(e){e.containerSelector=".t3js-newmultiplepages-container",e.addMoreFieldsButtonSelector=".t3js-newmultiplepages-createnewfields",e.pageTitleSelector=".t3js-newmultiplepages-page-title",e.doktypeSelector=".t3js-newmultiplepages-select-doktype",e.resetFieldsSelector=".t3js-newmultiplepages-reset-fields",e.templateRow=".t3js-newmultiplepages-newlinetemplate"}(Identifiers||(Identifiers={}));class NewMultiplePages{constructor(){this.lineCounter=5,DocumentService.ready().then((()=>{this.initializeEvents()}))}initializeEvents(){new RegularEvent("click",this.createNewFormFields.bind(this)).delegateTo(document,Identifiers.addMoreFieldsButtonSelector),new RegularEvent("change",this.actOnPageTitleChange).delegateTo(document,Identifiers.pageTitleSelector),new RegularEvent("change",this.actOnTypeSelectChange).delegateTo(document,Identifiers.doktypeSelector),new RegularEvent("click",this.resetFieldAttributes).delegateTo(document,Identifiers.resetFieldsSelector)}createNewFormFields(){const e=document.querySelector(Identifiers.containerSelector),t=document.querySelector(Identifiers.templateRow)?.innerHTML||"";if(null!==e&&""!==t){for(let i=0;i<5;i++){const n=this.lineCounter+i+1;e.innerHTML+=t.replace(/\[0\]/g,(this.lineCounter+i).toString()).replace(/\[1\]/g,n.toString())}this.lineCounter+=5}}actOnPageTitleChange(){this.setAttribute("value",this.value)}actOnTypeSelectChange(){for(const e of this.options)e.removeAttribute("selected");const e=this.options[this.selectedIndex],t=document.querySelector(this.dataset.target);null!==e&&null!==t&&(e.setAttribute("selected","selected"),t.innerHTML=e.dataset.icon)}resetFieldAttributes(){document.querySelectorAll(Identifiers.containerSelector+" "+Identifiers.pageTitleSelector).forEach((e=>{e.removeAttribute("value")})),document.querySelectorAll(Identifiers.containerSelector+" "+Identifiers.doktypeSelector).forEach((e=>{for(const t of e)t.removeAttribute("selected");const t=e.options[0]?.dataset.icon,i=document.querySelector(e.dataset.target);t&&null!==i&&(i.innerHTML=t)}))}}export default new NewMultiplePages;