// Created by Zoltán Tóth  2015 zoltantoth.co. uk
var pageItem = {
	
	fadeHide: function(button, buttonO, element){
		
		jQuery(button).on('click',function(){
			jQuery(button).fadeOut(500);
			jQuery(buttonO).fadeIn(500);
			jQuery(element).fadeIn(500);
			jQuery('.images, .lSAction').fadeOut(500);
		});
	},
	fadeHideT: function(button, buttonO, element){
		
		jQuery(button).on('click',function(){
			jQuery(button).fadeOut(500);
			jQuery(buttonO).fadeIn(500);
			jQuery(element).fadeOut(500);
			jQuery('.images, .lSAction').fadeIn(500);
		});
	}
}

jQuery(document).ready(function() {
	
	pageItem.fadeHide('#thumbnailsIcon', '#closeThumbNails', '.lSGallery');
	pageItem.fadeHideT('#closeThumbNails', '#thumbnailsIcon', '.lSGallery');
    	 	
	// jQuery('#image-gallery').lightSlider({
	// 	showAfterLoad:true,
	// 	gallery:true,
	//
    //
	// 	keyPress:true,
	//
	// 	mode: 'lg-fade',
	//
	// 	easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
	// 	slideMargin: 0,
	// 	enableTouch: true,
	// 	speed:900,
    //
	// 	loop:true,
	// 	onSliderLoad: function() {
	// 		jQuery('#image-gallery').removeClass('cS-hidden');
	// 	}
	// });
});