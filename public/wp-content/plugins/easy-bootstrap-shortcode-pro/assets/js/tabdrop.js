/* =========================================================
 * bootstrap-tabdrop.js 
 * http://www.eyecon.ro/bootstrap-tabdrop
 * =========================================================
 * Copyright 2012 Stefan Petre
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================= */


!function ($) { "use strict";

    // DROPDOWN CLASS DEFINITION
    // =========================
    if ($.fn.dropdown) {
        //return false;
    }

    var backdrop = '.dropdown-backdrop'
    var toggle   = '[data-toggle=dropdown]';

    var Dropdown = function (element) {
        //console.log('first');
        $(element).unbind('show.bs.dropdown');
        var $el = $(element).on('click.bs.dropdown', this.toggle)
    };
    //console.log(Dropdown);

    Dropdown.prototype.toggle = function (e) {
        var $this = $(this)

        if ($this.is('.disabled, :disabled')) return

        var $parent  = getParent($this)
        var isActive = $parent.hasClass('open')

        clearMenus()

        if (!isActive) {
            if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
                // if mobile we we use a backdrop because click events don't delegate
                $('<div class="dropdown-backdrop"/>').insertAfter($(this)).on('click', clearMenus)
            }

            $parent.trigger(e = $.Event('show.bs.dropdown'))

            if (e.isDefaultPrevented()) return

            $parent
                .toggleClass('open')
                .trigger('shown.bs.dropdown')
            $this.focus()
        }

        return false
    }

    Dropdown.prototype.keydown = function (e) {
        if (!/(38|40|27)/.test(e.keyCode)) return

        var $this = $(this)

        e.preventDefault()
        e.stopPropagation()

        if ($this.is('.disabled, :disabled')) return

        var $parent  = getParent($this)
        var isActive = $parent.hasClass('open')

        if (!isActive || (isActive && e.keyCode == 27)) {
            if (e.which == 27) $parent.find(toggle).focus()

            return $this.click()
        }

        var $items = $('[role=menu] li:not(.divider):visible a', $parent)

        if (!$items.length) return

        var index = $items.index($items.filter(':focus'))

        if (e.keyCode == 38 && index > 0)                 index--                        // up
        if (e.keyCode == 40 && index < $items.length - 1) index++                        // down
        if (!~index)                                      index=0

        $items.eq(index).focus()
    }

    function clearMenus() {
        $(backdrop).remove()
        $(toggle).each(function (e) {
            var $parent = getParent($(this))
            if (!$parent.hasClass('open')) return
            $parent.trigger(e = $.Event('hide.bs.dropdown'))
            if (e.isDefaultPrevented()) return
            $parent.removeClass('open').trigger('hidden.bs.dropdown')
        })
    }

    function getParent($this) {
        var selector = $this.attr('data-target')

        if (!selector) {
            selector = $this.attr('href')
            selector = selector && /#/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') //strip for ie7
        }

        var $parent = selector && $(selector)

        return $parent && $parent.length ? $parent : $this.parent()
    }


    // DROPDOWN PLUGIN DEFINITION
    // ==========================

    var old = $.fn.dropdown

    $.fn.dropdown = function (option) {
        return this.each(function () {
            var $this = $(this)
            var data  = $this.data('dropdown')

            if (!data) $this.data('dropdown', (data = new Dropdown(this)))
            if (typeof option == 'string') data[option].call($this)
        })
    }

    $.fn.dropdown.Constructor = Dropdown


    // DROPDOWN NO CONFLICT
    // ====================

    $.fn.dropdown.noConflict = function () {
        $.fn.dropdown = old
        return this
    }


    // APPLY TO STANDARD DROPDOWN ELEMENTS
    // ===================================

    $(document)
        .on('click.bs.dropdown.data-api', clearMenus)
        .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
        .on('click.bs.dropdown.data-api'  , toggle, Dropdown.prototype.toggle)
        .on('keydown.bs.dropdown.data-api', toggle + ', [role=menu]' , Dropdown.prototype.keydown)

}(window.jQuery);




 function __ebsp_content_regarding_window(hide,id){
    jQuery('.ebs-tab-acc-show-'+id).hide();
    jQuery('.ebs-tab-show-'+id).hide();
    var width=jQuery(window).width();
    if (hide) {
        jQuery('.ebs-tab-acc-show-'+id).hide();
        jQuery('.ebs-tab-show-'+id).show();
    } else {
        if(width<768){
            if(jQuery('.ebs-tab-show-'+id).hasClass('ebs_tab_show_xs')){
                jQuery('.ebs-tab-show-'+id+'.ebs_tab_show_xs').show();
            } else{
                jQuery('.ebs-tab-acc-show-'+id+'.ebs_tab_show_xs').show();
            }

        }
        else if( width >= 768 && width < 992){
            jQuery('.ebs_tab_show_sm').show();
        }
        else if( width >= 992 && width < 1220){
            if(jQuery('.ebs-tab-show-'+id).hasClass('ebs_tab_show_md')){
                jQuery('.ebs-tab-show-'+id+'.ebs_tab_show_md').show();
            } else{
                jQuery('.ebs-tab-acc-show-'+id+'.ebs_tab_show_md').show();
            }
        }
        else if(width>1200){
            if(jQuery('.ebs-tab-show-'+id).hasClass('ebs_tab_show_lg')){
                jQuery('.ebs-tab-show-'+id+'.ebs_tab_show_lg').show();
            } else{
                jQuery('.ebs-tab-acc-show-'+id+'.ebs_tab_show_lg').show();
            }

        }
    }

}



!function( $ ) {

    var WinReszier = (function(){
        var registered = [];
        var inited = false;
        var timer;
        var resize = function(ev) {

            clearTimeout(timer);
            timer = setTimeout(notify, 100);

        };
        var notify = function() {
            for(var i=0, cnt=registered.length; i<cnt; i++) {
                registered[i].apply();
            }
        };
        return {
            register: function(fn) {
                registered.push(fn);
                if (inited === false) {
                    $(window).bind('resize', resize);
                    inited = true;

                }

            },
            unregister: function(fn) {
                for(var i=0, cnt=registered.length; i<cnt; i++) {
                    if (registered[i] == fn) {
                        delete registered[i];
                        break;
                    }
                }
            }
        }
    }());

    var TabDrop = function(element, options) {
        this.element = $(element);
        this.dropdown = $('<li class="dropdown hide pull-right tabdrop oscitas-bootstrap-container"><a class="dropdown-toggle" data-toggle="dropdown" href="#">'+options.text+' <b class="caret"></b></a><ul class="dropdown-menu"></ul></li>')
            .prependTo(this.element);
        if (this.element.parent().is('.tabs-below')) {
            this.dropdown.addClass('dropup');
        }
        this.id=options.id
        var $this=this;
        WinReszier.register($.proxy($this.layout, $this));
        $this.layout($this);

    };

    TabDrop.prototype = {
        constructor: TabDrop,
        layout: function(event) {
            var id=this.id;
            var collection = [];
            this.dropdown.removeClass('hide');
            this.element
                .append(this.dropdown.find('li'))
                .find('>li')
                .not('.tabdrop')
                .each(function(){
                    var t = parseInt (jQuery(this).css('margin-top').replace('px', ''));
                    if(this.offsetTop > t+1) {
                        collection.push(this);
                    }
                });

            if (collection.length > 0) {
                collection = $(collection);
                this.dropdown
                    .find('ul')
                    .empty()
                    .append(collection);
                if (this.dropdown.find('.active').length == 1) {
                    this.dropdown.addClass('active');
                } else {
                    this.dropdown.removeClass('active');
                }

            } else {
                this.dropdown.addClass('hide');
            }
            if (this.dropdown.hasClass('hide')) {
                __ebsp_content_regarding_window(true,id);
            } else {
                __ebsp_content_regarding_window(false,id);
            }
        }
    }

    $.fn.tabdrop = function ( option ) {
        return this.each(function () {
            var $this = $(this),
                data = $this.data('tabdrop'),
                options = typeof option === 'object' && option;
            if (!data)  {
                $this.data('tabdrop', (data = new TabDrop(this, $.extend({}, $.fn.tabdrop.defaults,options))));
            }
            if (typeof option == 'string') {
                data[option]();
            }
        })
    };

    $.fn.tabdrop.defaults = {
        text: '<i class="icon-align-justify"></i>',
        id:0
    };

    $.fn.tabdrop.Constructor = TabDrop;

}( window.jQuery );

//!function( $ ) {
//
//    var WinReszier = (function(){
//        var registered = [];
//        var inited = false;
//        var timer;
//        var resize = function(ev) {
//            clearTimeout(timer);
//            timer = setTimeout(notify, 100);
//        };
//        var notify = function() {
//            for(var i=0, cnt=registered.length; i<cnt; i++) {
//                registered[i].apply();
//            }
//        };
//        return {
//            register: function(fn) {
//                registered.push(fn);
//                if (inited === false) {
//                    $(window).bind('resize', resize);
//                    inited = true;
//                }
//            },
//            unregister: function(fn) {
//                var registeredFnIndex = registered.indexOf(fn);
//                if (registeredFnIndex > -1) {
//                    registered.splice(registeredFnIndex, 1);
//                }
//            }
//        }
//    }());
//
//    function updateSelection(e) {
//        this.element.find('li').removeClass('active');
//        $(e.currentTarget).addClass('active');
//        this.layout();
//    }
//
//    var TabDrop = function(element, options) {
//        this.element = $(element);
//        this.options = options;
//        this.dropdown = $('<li class="dropdown hide pull-right tabdrop"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="display-tab"></span><b class="caret"></b></a><ul class="dropdown-menu"></ul></li>')
//            .prependTo(this.element);
//        if (this.element.parent().is('.tabs-below')) {
//            this.dropdown.addClass('dropup');
//        }
//
//        var boundLayout = $.proxy(this.layout, this);
//        var boundUpdateSelection = $.proxy(updateSelection, this);
//
//        WinReszier.register(boundLayout);
//        this.element.on('click', 'li:not(.tabdrop)', boundUpdateSelection);
//
//        this.teardown = function() {
//            WinReszier.unregister(boundLayout);
//            this.element.off('click', 'li:not(.tabdrop)', boundUpdateSelection);
//        };
//
//        this.layout();
//    };
//
//    TabDrop.prototype = {
//        constructor: TabDrop,
//
//        layout: function() {
//            var collection = [];
//            var dropdown = this.dropdown;
//            var options = this.options;
//            this.dropdown.removeClass('hide');
//
//            function setDropdownText(text) {
//                dropdown.find('a span.display-tab').html(text);
//            }
//
//            function setDropdownDefaultText(collection) {
//                var text;
//                if (jQuery.isFunction(options.text)) {
//                    text = options.text(collection);
//                } else {
//                    text = options.text;
//                }
//                setDropdownText(text);
//            }
//            this.element
//                .append(this.dropdown.find('li'))
//                .append(this.dropdown.find('li'))
//                .find('>li')
//                .not('.tabdrop')
//                .each(function(){
//                    var t = parseInt (jQuery(this).css('margin-top').replace('px', ''));
//                    console.log(t);
//                    console.log(this.offsetTop);
//                    if(this.offsetTop >= t+1) {
//                    //if(this.offsetTop > options.offsetTop) {
//                        collection.push(this);
//                    }
//                });
//
//            if (collection.length > 0) {
//
//
//                collection = $(collection);
//                this.dropdown
//                    .find('ul')
//                    .empty()
//                    .append(collection);
//
//                if (this.dropdown.find('.active').length == 1) {
//                    this.dropdown.addClass('active');
//                    setDropdownText(this.dropdown.find('.active > a').html());
//                } else {
//                    this.dropdown.removeClass('active');
//                    setDropdownDefaultText(collection);
//                }
//            } else {
//                this.dropdown.addClass('hide');
//            }
//        }
//    }
//
//    $.fn.tabdrop = function ( option ) {
//        return this.each(function () {
//            var $this = $(this),
//                data = $this.data('tabdrop'),
//                options = typeof option === 'object' && option;
//            if (!data)  {
//                $this.data('tabdrop', (data = new TabDrop(this, $.extend({}, $.fn.tabdrop.defaults,options))));
//            }
//            if (typeof option == 'string') {
//                data[option]();
//            }
//        })
//    };
//
//    $.fn.tabdrop.defaults = {
//        text: '<i class="fa fa-align-justify"></i>',
//        offsetTop: 0
//    };
//
//    $.fn.tabdrop.Constructor = TabDrop;
//
//}( window.jQuery );