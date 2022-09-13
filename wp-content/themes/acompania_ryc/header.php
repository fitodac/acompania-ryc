<?php
defined( 'ABSPATH' ) || exit;

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package acompania_ryc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<style type="text/css">.n2-ss-spinner-simple-white-container{position:absolute;top:50%;left:50%;margin:-20px;background:#fff;width:20px;height:20px;padding:10px;border-radius:50%;z-index:1000}.n2-ss-spinner-simple-white{outline:1px solid RGBA(0,0,0,0);width:100%;height:100%}.n2-ss-spinner-simple-white:before{position:absolute;top:50%;left:50%;width:20px;height:20px;margin-top:-11px;margin-left:-11px}.n2-ss-spinner-simple-white:not(:required):before{content:'';border-radius:50%;border-top:2px solid #333;border-right:2px solid transparent;animation:n2SimpleWhite .6s linear infinite}@keyframes n2SimpleWhite{to{transform:rotate(360deg)}}</style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'acompania_ryc' ); ?></a>


	<div id="topbar">
		<div class="container">
			<div class="row">

				<div class="col-md-6"></div>
				<div class="col-md-6">
					<section id="custom_html-2" class="widget_text widget widget_custom_html">
						<div class="textwidget custom-html-widget">
							<span class="phone d-block text-right">Informate 0800 8939</span>
						</div>
					</section>
				</div>

			</div>
		</div>
	</div>


	<nav class="navbar menu-2 bsnav navbar-expand-lg bsnav-light bsnav-sticky bsnav-sticky-slide main-menu" id="mainNavbar">
		<div class="container">
			<?php if( is_front_page() ): ?>
				<h1 class="navbar-brand m-0" rel="home">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/acompania-ryc-brand-white.svg" width="auto" height="42px" style="height:42px;" alt="<?php echo get_bloginfo('name'); ?>">
					<span class="sr-only"><?php echo get_bloginfo('name'); ?></span>
				</h1>
			<?php else: ?>
				<a class="navbar-brand m-0" rel="home">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/acompania-ryc-brand-white.svg" width="auto" height="42px" style="height:42px;"  alt="<?php echo get_bloginfo('name'); ?>">
					<span class="sr-only"><?php echo get_bloginfo('name'); ?></span>
				</a>
			<?php endif; ?>
			<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>

<!--			<div class="collapse navbar-collapse justify-content-sm-end justify-content-sm-end">-->

<!--				<ul id="menu-main-nav" class="navbar-nav navbar-mobile mr-0">-->
<!--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-18 nav-item" id="menu-item-18">-->
<!--						<a class="nav-link" href="./">Inicio</a>-->
<!--					</li>-->
<!--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22 nav-item" id="menu-item-22">-->
<!--						<a class="nav-link" href="./servicios/">Servicios</a>-->
<!--					</li>-->
<!--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21 nav-item" id="menu-item-21">-->
<!--						<a class="nav-link" href="./quienes-somos/">Quienes Somos</a>-->
<!--					</li>-->
<!--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19 nav-item" id="menu-item-19">-->
<!--						<a class="nav-link" href="./como-funciona/">Cómo Funciona</a>-->
<!--					</li>-->
<!--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20 nav-item" id="menu-item-20">-->
<!--						<a class="nav-link" href="./faqs/">FAQS</a>-->
<!--					</li>-->
<!--					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24 nav-item" id="menu-item-24">-->
<!--						<a class="nav-link" href="./contacto/">Contacto</a>-->
<!--					</li>-->
<!--				</ul>-->

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
							'container_class' => 'collapse navbar-collapse justify-content-sm-end',
							'menu_class' => 'navbar-nav navbar-mobile mr-0',
							'add_li_class' => 'nav-item',
							'link_class' => 'nav-link'
						)
					);
				?>
<!--			</div>-->
		</div>
	</nav>
