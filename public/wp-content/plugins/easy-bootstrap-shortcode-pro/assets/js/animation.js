jQuery(document).ready(function() {
    jQuery('.osc-have-animation').live('inview', function(event, visible) {
        var $this=jQuery(this);
        var animatetime=jQuery(this).attr('data-animatetime');
        var delay=jQuery(this).attr('data-delay');
        var duration=jQuery(this).attr('data-duration');
        if(typeof duration!='undefined'){
            var id=$this.attr('id');
            jQuery('#'+id).css({
                '-webkit-animation-duration':duration+'s',
                '-moz-animation-duration': duration+'s',
                '-o-animation-duration': duration+'s',
                'animation-duration':duration+'s'
            });
        }if(typeof delay!='undefined'){
            var id=$this.attr('id');
            jQuery('#'+id).css({
                '-webkit-animation-delay':delay+'s',
                '-moz-animation-delay': delay+'s',
                '-o-animation-delay': delay+'s',
                'animation-delay':delay+'s'
            });
        }
        $this.addClass(jQuery(this).attr('data-animation'));
        if (visible == true) {
                $this.addClass(jQuery(this).attr('data-animation'));

        }
        else {
            if(animatetime=='everytime'){
                jQuery(this).removeClass($this.attr('data-animation'));
            }
        }

    });
});