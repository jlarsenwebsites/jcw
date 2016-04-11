/*
EBS shortcode template for Add new items
 */
jQuery(document).ready(function(){

    _.templateSettings = {
        interpolate: /\{\{(.+?)\}\}/g
    };
    ebsBtnGrpTmp='<tr class="osc_btngrp_list_item">\
        <td class="width175">\
        <select name="btngrp[{{key}}][type]" class="oscitas-btngrpitem-style">\
            <option value="btn-default">Simple</option>\
            <option value="btn-primary">Primary</option>\
            <option value="btn-success">Success</option>\
            <option value="btn-info">Information</option>\
            <option value="btn-warning">Warning</option>\
            <option value="btn-danger">Danger</option>\
            <option value="btn-link">Link</option>\
        </select>\
        </td>\
        <td class="width175 osc_btg_type_change">\
            <select name="btngrp[{{key}}][linktype]"  class="oscitas-btngrpitem-type">\
                <option value="link">Link</option>\
                <option value="button">Button</option>\
            </select>\
        </td>\
    <td class="width175 osc_btg_hide">\
        <input type="text" name="btngrp[{{key}}][link]" class="oscitas-btngrpitem-link" value="#" />\
        </td>\
    <td class="width175 osc_btg_hide">\
        <input type="checkbox" name="btngrp[{{key}}][target]" class="oscitas-btngrpitem-target" value="true">\
        </td>\
        <td class="width175">\
            <input type="text" name="btngrp[{{key}}][title]" class="oscitas-btngrpitem-title" value="Button"/>\
        </td>\
        <td><a class="osc_remove_element osc_remove_btgitem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a></td>\
    </tr>';
    ebsDropdownTmp='<tr class="osc_dropdown_list_item">' +
        '<td class="osc_type_change">' +
        '<select name="dropdown[{{key}}][type]" class="oscitas-dropdownitem-type">' +
        '<option value="menuitem">Menu Item</option>' +
        '<option value="divider">Divider</option>' +
        '</select>' +
        '</td>' +
        '<td class="osc_hide">' +
        '<input type="text" name="dropdown[{{key}}][link]" class="oscitas-dropdownitem-link" value="#"/>' +
        '</td>' +
        '<td class="osc_hide">' +
        '<input type="text" name="dropdown[{{key}}][title]" class="oscitas-dropdownitem-title" value="Dropdown Item"/>' +
        '</td>' +
        '<td class="osc_hide">' +
        '<input type="checkbox" name="dropdown[{{key}}][disabled]" class="oscitas-dropdownitem-disabled" value="disabled"/>' +
        '</td>' +
        '<td>' +
        '<a class="osc_remove_element osc_remove_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a>' +
        '</td>' +
        '</tr>';

    ebsToggleTmp='<tr class="osc_dropdown_list_item">' +
        '<td  class="width200"><input type="text" name="toggle[{{key}}][title]" class="oscitas-itemtoggle-title" value="Title"/></td>\
        <td class="width200 toggle_custom_icon"><div class="oscitas-icon-div oscitas-itemtoggle-showicon"><span class="oscitas-itemtoggle-iconpreview"></span><span class="show-drop"></span></div><input type="hidden" class="oscitas-itemtoggle-icon" name="toggle[{{key}}][icon]" value=""><input type="hidden" class="oscitas-itemtoggle-icontype" name="toggle[{{key}}][icontype]" value=""></td>\
        <td class="width300 toggle_custom_icon"><input type="text" name="toggle[{{key}}][iconcolor]" class="oscitas-itemtoggle-iconcolor color" data-default-color="" value=""/></td>'+
        '<td class="width100"><a class="osc_remove_element osc_remove_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a>' +
        '</td>' +
        '</tr>';

    ebsTabTmp='<tr class="osc_dropdown_list_item">' +
        '<td>' +
        '<input type="text"  name="tab[{{key}}][title]" class="oscitas-itemtab-title" value="Title"/>' +
        '</td>' +
        '<td>' +
        '<div class="oscitas-icon-div oscitas-itemtab-showicon"><span class="oscitas-itemtab-iconpreview"></span><span class="show-drop"></span></div>' +
        '<input type="hidden" class="oscitas-itemtab-icon" name="tab[{{key}}][icon]"  value="">' +
        '<input type="hidden" class="oscitas-itemtab-icontype" name="tab[{{key}}][icontype]" value="">' +
        '</td>' +
        '<td><input type="text" name="tab[{{key}}][iconcolor]" class="oscitas-itemtab-iconcolor color" data-default-color="" value=""/>' +
        '</td>' +
        '<td><input type="radio" name="activetab" class="oscitas-itemtab-active" value="{{key}}"/></td>' +
        '<td><a class="osc_remove_element osc_remove_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a></td>' +
        '</tr>';

    ebsSliderTmp='<tr class="osc_dropdown_list_item">\
        <td class="width200"><input type="text" name="slider[{{key}}][title]" class="oscitas-itemslider-title" value="Title"/></td>\
        <td class="width200"><input class="oscitas-itemslider-image" type="hidden" name="slider[{{key}}][image]"  value="" />\
            <input id="_btn" class="upload_image_button" type="button" value="Upload Image" /><div class="image_preview"></div></td>\
    <td class="width350"><textarea name="slider[{{key}}][caption]" class="oscitas-itemslider-caption"></textarea></td>\
    <td class="width150"><input type="radio" name="activeslider" class="oscitas-itemslider-active" value="{{key}}" /></td>\
                                    <td><a class="osc_remove_element osc_remove_dditem" href="javascript:;" style="text-decoration:none;"><i class="glyphicon  glyphicon-remove"></i></a></td>\
                                </tr>';

})