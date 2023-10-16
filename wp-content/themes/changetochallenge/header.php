<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Change_to_challenge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">

	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<script>var siteURL = '<?php echo get_site_url(); ?>';</script>
</head>
<body class="is-preload">

<!-- Wrapper -->
	<div id="wrapper">

<!--
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'changetochallenge' ); ?></a>

	<header id="masthead" class="site-header" >
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$changetochallenge_description = get_bloginfo( 'description', 'display' );
			if ( $changetochallenge_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $changetochallenge_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!- - .site-branding  - ->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'changetochallenge' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!- - #site-navigation - ->
	</header><!-  - #masthead -->

	
		<!-- Header -->
		<header id="header">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo1"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/header/C2C-blanco-RGB 1.png" alt=""></a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo-mob"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/header/C2C-B-blanco-mob.png" alt=""></a>
			<nav>
				<ul class="links-max">
					<li><a href="index.html" class="cont-ave">Tipos de<br>aventura<img src="images/right-arrow-icon.png" alt=""></a> </li>
					<li><a href="landing.html">Tienda</a></li>
					<li><a href="generic.html">Es/EN</a></li>
				</ul>
				<nav class="menu-min">
					<a href="#menu"><img src="images/menu.png" alt="menu"></a>
				</nav>
			</nav>

		</header>
		<nav id="menu">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="images/C2C-blue-RGB.png" class="logo-mob" alt=""></a>
			<ul class="links">
				<li class="links-mob">Tipos de aventura</li>
				<li>
					<a href="#submenu" class="arrow no-cerrar-menu" data-toggle="submenu"><img src="images/right-arrow-icon-27 3.png" alt=""></a>
						<ul id="submenu">
							<li><a href="#">Grupo ambierto</a></li>
							<li><a href="#">Grupo cerrado</a></li>
							<li><a href="#">Building empresarial</a></li>
						</ul>
				</li>
				<li><a class="links-mob" href="landing.html">Tienda</a></li>
				</ul>
				<ul class="contact">
				<li>Escríbenos en:</li>
				<li><img src="images/icon-whatsapp.svg" alt="" srcset=""><a href="http://"> 55 7358 6711</a></li>
				<li><img src="images/icon-mail.svg" alt="" srcset=""><a href="mailto:info@chancetochallenge.com"> info@chancetochallenge.com</a></li>
				<li>Síguenos en:</li>
				<li>
					<a href="http://"><img src="images/group_sm.svg" alt="" srcset=""></a>
				</li>
				</ul>
			</nav>
