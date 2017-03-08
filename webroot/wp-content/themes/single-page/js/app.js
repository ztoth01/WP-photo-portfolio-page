jQuery(document).ready(function() {

    jQuery(window).scroll(function() {

        const windscroll = jQuery(window).scrollTop();

        if (windscroll >= 100) {
            jQuery('#main section').each(function(i) {
              if(jQuery(this).position().top <= windscroll + 130) {
                  jQuery('#site-navigation .a').removeClass('is-active');
                  jQuery('#site-navigation .a').eq(i).addClass('is-active');
                  jQuery('#nav-to-scroll').addClass('scroll-nav');
                  jQuery('.navigation-outer').addClass('navigation-outer-bg');
             }
            });
        }else{
            jQuery('#site-navigation .a').removeClass('is-active');
            jQuery('#site-navigation .a:first').addClass('is-active');
            jQuery('#nav-to-scroll').removeClass('scroll-nav');
            jQuery('.navigation-outer').removeClass('navigation-outer-bg');
        }

        jQuery('.box').each(function(){

            if(jQuery(window).scrollTop() > jQuery(this).offset().top - ( jQuery(window).height() * .8)){
                jQuery(this).addClass('fadeIn');
             }
                // else{
            //     jQuery(this).css('width','100');
            // }
          });
        }).scroll();

    (function(){
        const x = (y)=>{
            const scrollPoint = jQuery('section[data-anchor="' + y + '"]').offset().top - 104;
            jQuery('body,html').animate({
                scrollTop: scrollPoint
            }, 1000, 'swing');
            return false;
        };

        jQuery('#site-navigation .a').on('click', function() {
            const scrollAnchor = jQuery(this).attr('data-scroll');
            x(scrollAnchor);
        });

        let urlHash = location.hash;
        if(urlHash != "" ){
            let scrollAnchor = urlHash.slice(1,urlHash.length);
            x(scrollAnchor);
        }
    })();
});

(function ( window, document, undefined ) {
    const iframes = document.getElementsByTagName( 'iframe' );
    for ( var i = 0; i < iframes.length; i++ ) {
        let iframe = iframes[i],
            players = /www.youtube.com|player.vimeo.com/;

        if ( iframe.src.search( players ) > 0 ) {
            let videoRatio        = ( iframe.height / iframe.width ) * 100;

            iframe.style.position = 'absolute';
            iframe.style.top      = '0';
            iframe.style.left     = '0';
            iframe.width          = '100%';
            iframe.height         = '100%';
            iframe.style.zIndex   = '1';
            let wrap              = document.createElement( 'div' );
            wrap.className        = 'fluid-vids';
            wrap.style.width      = '100%';
            wrap.style.position   = 'relative';
            wrap.style.paddingTop = videoRatio + '%';
            let iframeParent      = iframe.parentNode;
            iframeParent.insertBefore( wrap, iframe );
            wrap.appendChild( iframe );
        }
    }
})( window, document );





