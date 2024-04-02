<link rel="stylesheet" type="text/css" href="custom/include/SugarFields/sugarFields.css" />
{assign var="custom_readonly" value={{sugarvar key='custom_readonly' string=true}}}
<input type="text" name="{{sugarvar key='name'}}"  class={{if empty($displayParams.class) }}"sqsEnabled{if $custom_readonly eq 1} custom_input_readonly{/if}"{{else}} "{{$displayParams.class}}{if $custom_readonly eq 1} custom_input_readonly{/if}" {{/if}} {{if !empty($tabindex)}} tabindex="{{$tabindex}}" {{/if}}  id="{{sugarvar key='name'}}" size="{{$displayParams.size}}" value="{{sugarvar key='value'}}" title='{{$vardef.help}}' autocomplete="off" {{$displayParams.readOnly}} {{$displayParams.field}} {if $custom_readonly eq 1} readonly{/if}>
<input type="hidden" {{if $displayParams.useIdSearch}}name="{{sugarvar memberName='vardef.id_name' key='name'}}"{{/if}} id="{{sugarvar memberName='vardef.id_name' key='name'}}" value="{{sugarvar memberName='vardef.id_name' key='value'}}">
{{if empty($displayParams.hideButtons) }}
<span class="id-ff multiple">
{{if empty($displayParams.clearOnly) }}
<button type="button" name="btn_{{sugarvar key='name'}}" {{if !empty($tabindex)}} tabindex="{{$tabindex}}" {{/if}}  title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button{{if empty($displayParams.selectOnly) }} firstChild{{/if}}" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{{sugarvar key='module'}}", 600, 400, "{{$displayParams.initial_filter}}", true, false, {{$displayParams.popupData}}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button>{{/if}}
{{if empty($displayParams.selectOnly) }}<button type="button" name="btn_clr_{{sugarvar key='name'}}" {{if !empty($tabindex)}} tabindex="{{$tabindex}}" {{/if}}  title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button{{if empty($displayParams.clearOnly) }} lastChild{{/if}}" onclick="this.form.{{sugarvar key='name'}}.value = ''; this.form.{{sugarvar memberName='vardef.id_name' key='name'}}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
{{/if}}
</span>
{{/if}}
{{if !empty($displayParams.allowNewValue) }}
<input type="hidden" name="{{sugarvar key='name'}}_allow_new_value" id="{{sugarvar key='name'}}_allow_new_value" value="true">
{{/if}}
