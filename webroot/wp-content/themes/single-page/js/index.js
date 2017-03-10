
jQuery(window).load(function() {

	//var con = jQuery("#con");
	//con.load('content/home.php');
	//con.fadeIn(500);
	
	// jQuery('.navLink').on('click', function(e){
	// 	e.preventDefault();
	// 	con.fadeOut(600);
	// 	var page = jQuery(this).attr('href');
	// 	setTimeout(function(){
	// 		con.load('content/'+ page + '.php');
	// 	},600);
	// 	con.fadeIn(1000);
	//
	// });
	
	jQuery('#info, #info-mobile').on('click', function(){
		jQuery('#info-box').stop().fadeToggle(300);
		console.log('rrr');
		
	});
	jQuery('#closeInfo').on('click', function(){
		jQuery('#info-box').stop().fadeOut(300);
	});
		

	
});