jQuery(window).load(function() {
	//making the main navigation responsive
	jQuery('#navigation').superfish({
		
		  hoverClass: 'sfHover',
		  delay:         		600,                
		  animation:   		{opacity:'show',height:'show'},  // fade-in and slide-down animation
		  animationOut:  	{opacity:'hide'},   
		  speed:         		'slow',           
		  speedOut:      	'slow',             
		  autoArrows:  		false                            // disable generation of arrow mark-up		
	});
	
		jQuery('#navigation_bar').prepend('<div id="menu_trigger"><span class="menu_icon"></span>Menu</div>');		
			jQuery("#menu_trigger").on("click", function(){
				jQuery("#navigation").slideToggle(200);
		});
		
		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) jQuery('#navigation ul').addClass('no-transition');
});
jQuery(document).ready(function($) {
	window.setTimeout(function() {
		$('.skype_pnh_container').html('');
		$('.skype_pnh_print_container').removeClass('skype_pnh_print_container');
		$('.skype_pnh_container').remove();
	}, 5000);
}); 