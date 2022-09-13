// $.noConflict();


var smpx = {

	featured_image_gallery: function(){

		if( jQuery.isFunction( jQuery.fn.slick ) ){
			jQuery('.single-featured-image .wp-block-gallery').slick({
				autoplay: 1,
				autoplaySpeed: 5000,
				dots: false,
				arrows: true,
				swipe:  true,
				swipeToSlide: true,
				cssEase: 'cubic-bezier(0.445, 0.05, 0.55, 0.95)',
				fade: true,
				speed: 500,
				slidesToScroll: 0,
			});
		}

	}




}







jQuery(document).ready(function($){

	if( jQuery('.single-featured-image .wp-block-gallery').length ){
		smpx.featured_image_gallery();
	}

});


// (function($){
// 'use strict';




// })(jQuery)