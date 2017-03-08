//zoltan toth ZTWEB 2015

;(function(jQuery, win) {
  jQuery.fn.inViewport = function(cb) {
     return this.each(function(i,el) {
       function visPx(){
         var elH = jQuery(el).outerHeight(),
             H = jQuery(win).height(),
             r = el.getBoundingClientRect(), t=r.top, b=r.bottom;
         return cb.call(el, Math.max(0, t>0? Math.min(elH, H-t) : (b<H?b:H)));  
       }
       visPx();
       jQuery(win).on("resize scroll", visPx);
     });
  };
}(jQuery, window));


jQuery(window).load(function() {
	(function(){
		jQuery(".se-pre-con").fadeOut(2000);;
		jQuery(".none_js").attr('class','js');
		jQuery('#content').fadeIn(2000);
		var h = jQuery(window).height(),
			g = h * 0.6;
		jQuery('.hero-content').css('top', g+'px');
		jQuery('.sectionPart').css('height', h+'px');
	})();
	
	
	jQuery('nav a, #arrowDown').on('click', function() {
    	var scrollAnchor = jQuery(this).attr('data-scroll'),
        scrollPoint = jQuery('section[data-anchor="' + scrollAnchor + '"]').offset().top -73;

        jQuery('body,html').animate({
        	scrollTop: scrollPoint
        	}, 700);
        	return false;
    })
	jQuery(window).scroll(function() {
	    var windscroll = jQuery(window).scrollTop();
	    if (windscroll >= 100) {
	        jQuery('#content section').each(function(i) {
	            if (jQuery(this).position().top <= windscroll +150 ) {
	                jQuery('nav a.active').removeClass('active');
	                jQuery('nav a').eq(i).addClass('active');
	            }
	        });
	    } else { 
	        jQuery('nav a.active').removeClass('active');
	        jQuery('nav a:first').addClass('active');
	    }
	
	}).scroll();
	
	
	jQuery(".boxes").inViewport(function(px) {
		if(px > 150){
			 jQuery(this).css('visibility', 'visible').stop().addClass("animated fadeIn");
	    }
	}); 
	
	
	jQuery("#teteje").inViewport(function(px) {
		if(px ){
			 jQuery(".leftIn").css('visibility', 'visible').stop().addClass("animated fadeIn");
	    }
	});
	
	(function() {
	  "use strict";
	  var toggle = document.getElementById("menuTab"),
	  		nav = jQuery('#mainNav');
	  toggleHandler(toggle, nav);
	  
	  function toggleHandler(toggle,nav) {
	    toggle.addEventListener( "click", function(e) {
	      e.preventDefault();
	      if(this.classList.contains("is-active")){
	      	 this.classList.remove("is-active");
	      	 nav.slideUp(500);
	      }else{
	      	this.classList.add("is-active");
	      	 nav.slideDown(500);
	      }
	    }); 
	  }
	  jQuery(window).resize(function () {
	      var w = jQuery(window).width();
	      //console.log(w);
	      ( w > 780 ? nav.css('display','block') : nav.css('display','none'));
	    })
	})();	
	
});//end of ready function