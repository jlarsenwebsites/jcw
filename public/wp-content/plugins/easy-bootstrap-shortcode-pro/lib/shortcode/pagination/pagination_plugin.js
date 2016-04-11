var pagination={
    title:"Custom Pagination Shortcode",
    id :'oscitas-form-sectionhead',
    pluginName: 'pagination',
    setRowColors:false

};


function pagination_generate_shortcode(pluginObj,form,table){
    var shortcode=jQuery('#oscitas-direct-insert-shortcode').val();
    return shortcode;
}

function create_oscitas_pagination(pluginObj){
    var form = jQuery(pluginObj.hashId);

    var table = form.find('table');

}

(function() {

    tinymce.create('tinymce.plugins.oscitasPagination', {
        init : function(ed, url) {

            var t = this;
            ed.addButton('oscitaspagination', {
                title : pagination.title,
                image : url+'/icon.png',
                onclick : function() {
                    open_dialogue(pagination);
                    t._handleMoreBreak(ed, url);
                }
            });
            t._handleMoreBreak(ed, url);
        },
        _handleMoreBreak: function(ed, url) {
        var moreHTML, custompaginationHTML;
        custompaginationHTML = '<img src="' + url + '/trans.gif" class="mce-wp-custompagination mceItemNoResize"  />';


        // Display morebreak instead if img in element path
        ed.onPostRender.add(function() {
            if (ed.theme.onResolveName) {
                ed.theme.onResolveName.add(function(th, o) {
                    if (o.node.nodeName == 'IMG') {
                        if ( ed.dom.hasClass(o.node, 'mce-wp-custompagination') )
                            o.name = 'wpcustompage';
                    }

                });
            }
        });


        // Replace morebreak with images
        ed.onBeforeSetContent.add(function(ed, o) {
            if ( o.content ) {
                o.content = o.content.replace(/<!--custompagination-->/g, custompaginationHTML);
            }
        });

        // Replace images with morebreak
        ed.onPostProcess.add(function(ed, o) {
            if (o.get)
                o.content = o.content.replace(/<img[^>]+>/g, function(im) {

                    if (im.indexOf('class="mce-wp-custompagination') !== -1)
                        im = '<!--custompagination-->';

                    return im;
                });
        });

        // Set active buttons if user selected pagebreak or more break
        ed.onNodeChange.add(function(ed, cm, n) {
            cm.setActive('wp_custompage', n.nodeName === 'IMG' && ed.dom.hasClass(n, 'mce-wp-custompagination'));
        });
    },

        createControl : function(n, cm) {
            return null;
        },
        getInfo : function() {
            plugininfo.longname=pagination.title;
            return plugininfo;
        }
    });

    tinymce.PluginManager.add('oscitaspagination', tinymce.plugins.oscitasPagination);
})();

