<?php
defined( 'ABSPATH' ) || exit;

// Template name: Contacto

get_header();
?>



<div class="contact-wrapper">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-8 col-lg-6">
				<h1>Contacto</h1>
				<p>Envianos un mensaje o dejanos tus datos. Nos pondremos en contacto contigo para ayudarte a tomar la mejor decisión para tu futuro.</p>
			</div>
		</div>
		<div class="wizzard">
			<div class="indicators">
				<span class="step1 active">1</span>
				<span class="step2">2</span>
				<span class="step3">3</span>
				<span class="step4">4</span>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<?php echo do_shortcode('[contact-form-7 id="29"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();
