// jQuery Initialization
jQuery(document).ready(function($){
"use strict"; 

    var cause_div = $('.cause_div').height();
    cause_div = cause_div ;
    $('.thumb4 *,.cause_div').stop(true,true).animate({
                                    'height' : cause_div
                                },{queue:false, duration:450, easing: 'easeOutCubic'}); 
   
    $('#fade').list_ticker({
      speed:4000,
      effect:'fade'
    });

    $('#tick').list_ticker({
      speed:4000,
      effect:'fade'
    });


        if (jQuery('.lightbox, .button-fullsize, .fullsize').length > 0) {
        jQuery('.lightbox, .button-fullsize, .fullsize').fancybox({
            padding    : 0,
            margin    : 0,
            maxHeight  : '90%',
            maxWidth   : '90%',
            loop       : true,
            fitToView  : false,
            mouseWheel : false,
            autoSize   : false,
            closeClick : false,
            overlay    : { showEarly  : true },
            helpers    : { media : {} }
        });
    }

  

});