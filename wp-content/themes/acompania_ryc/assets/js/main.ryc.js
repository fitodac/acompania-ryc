var acompaniaRYC = {
	init: function(){
		return;
	},



	/*---------------------------------------------------*/
	/*	MODAL VIDEO
	/*---------------------------------------------------*/
	videoReel: function(){

		if( jQuery('.video-link a').length ){

			var _modal = jQuery('#videoReel'),
					_iframe = jQuery('#videoReel iframe'),
					_src = _iframe.attr('src');

			_iframe.attr('src','');


			jQuery('.video-link a').on('click', (e) => {
				e.preventDefault();

				_modal
						.modal('show')
						.on('shown.bs.modal', () => {
							_iframe.attr('src', _src+'&autoplay=1&loop=1&autopause=0');
						})
						.on('hidden.bs.modal', () => {
							_iframe.attr('src', '');
						});
			})
		}

	},




	/*---------------------------------------------------*/
	/*	FAQ COMPONENT
	/*---------------------------------------------------*/
	faq: function(){
		if( jQuery('.smpx-faq').length ){

			jQuery('.smpx-faq .smpx-faq-nav').addClass('sticky-top');
			var _faq_nav_top = jQuery('.smpx-faq .smpx-faq-nav').offset().top;

			jQuery('.smpx-faq .nav-item').on('click', function(e){
				e.preventDefault();
				var _id = jQuery(this).attr('href'),
						_top = jQuery(_id).offset().top;
				// console.log( $(_id).offset().top );

				$('body, html').animate({scrollTop: _top - 80}, 800);
			});


			// Add margin top to faq menu
			function amttfm(){
				if( jQuery(window).scrollTop() > _faq_nav_top ){
					jQuery('.smpx-faq .smpx-faq-nav').css('paddingTop', 80);
				}else{
					jQuery('.smpx-faq .smpx-faq-nav').css('paddingTop', 0);
				}
			}

			amttfm();
			jQuery(window).on('scroll', amttfm);

		}


		if( jQuery('.wpcf7-form').length ){
			jQuery('.wpcf7-form').on('submit', function(){ jQuery('.wpcf7-form .wpcf7-submit').fadeOut(300) });
		}

	},




	/*---------------------------------------------------*/
	/*	CONTACT
	/*---------------------------------------------------*/
	contact: function(){

		function validate(el){

			var field = jQuery('#'+jQuery(el).data('validate')),
					valid = false,
					message = '';


			// Valida si es un input email
			if( field.hasClass('wpcf7-validates-as-email') ){
				valid = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i.test(field.val());
				message = 'Debes completar este campo con un email válido para continuar';

				// Valida si es un input text
			}else{
				valid = ( field.val() != '' );
				message = 'Debes completar este campo para continuar';
			}


			if( valid ){
				field.removeClass('wpcf7-not-valid');
				field.next( jQuery('.wpcf7-not-valid-tip') ).length ? field.next('.wpcf7-not-valid-tip' ).hide() : false;
			}else{
				field.addClass('wpcf7-not-valid');
				field.next( jQuery('.wpcf7-not-valid-tip') ).length ? field.next('.wpcf7-not-valid-tip' ).show() : field.after('<span class="wpcf7-not-valid-tip">'+message+'</span>' );
			}

			return valid;

		}



		if( jQuery('.page-template-page-contact').length ){

			jQuery('.wpcf7-form').attr('data-step', 'step1');

			jQuery('[data-next]').on('click', function(){
				if( validate( jQuery(this) ) ){
					jQuery('.wpcf7-form').attr('data-step', jQuery(this).data('next'));
					jQuery('.step').removeClass('active');
					jQuery('#'+jQuery(this).data('next')).addClass('active');

					jQuery('.wizzard .indicators span').removeClass('active');
					jQuery('.wizzard .indicators span.'+jQuery(this).data('next')).addClass('active');
				}
			});
		}

	},



	/*---------------------------------------------------*/
	/*	NOVEDADES
	/*---------------------------------------------------*/
	whatsNew: function(){
		if( jQuery('#presentationsVideos .slider').length ){
			var _slider = jQuery('#presentationsVideos .slider');

			_slider.slick({
				arrows: false,
				dots: true
			});

			function setDataUrl(){
				jQuery('#presentationsVideos .btn-play').attr('data-url', _slider.find('.slick-current figure').data('video'));
			}
			setDataUrl();

			_slider.on('afterChange', function(){ setDataUrl() });

		}
	},


	videoModal: function(){
		jQuery('.video-modal-launcher').on('click', function(){
			jQuery('#novedadesModal iframe').attr('src', jQuery(this).attr('data-url'));
		});

		jQuery('#novedadesModal').on('hide.bs.modal', function(){
			jQuery('#novedadesModal iframe').attr('src', '');
		});
	}



};


(function(){
	acompaniaRYC.faq();
	acompaniaRYC.contact();
	acompaniaRYC.videoReel();
	acompaniaRYC.whatsNew();

	if( jQuery('.video-modal-launcher').length && jQuery('#novedadesModal').length ){
		acompaniaRYC.videoModal();
	}
	// $(document).ready(function(){
	// });
})()