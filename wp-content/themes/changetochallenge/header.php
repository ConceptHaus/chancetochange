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
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(''); ?>/assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(''); ?>/assets/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>

	<!-- Scripts -->
	<script src="<?php echo get_template_directory_uri(''); ?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(''); ?>/assets/js/jquery.scrolly.min.js"></script>
	<script src="<?php echo get_template_directory_uri(''); ?>/assets/js/jquery.scrollex.min.js"></script>
	<script src="<?php echo get_template_directory_uri(''); ?>/assets/js/browser.min.js"></script>
	<script src="<?php echo get_template_directory_uri(''); ?>/assets/js/breakpoints.min.js"></script>
	<script src="<?php echo get_template_directory_uri(''); ?>/assets/js/util.js"></script>
	<script src="<?php echo get_template_directory_uri(''); ?>/assets/js/main.js"></script>
	<script src="<?php echo get_template_directory_uri(''); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script>var siteURL = '<?php echo get_site_url(); ?>';</script>
</head>
<body class="">

<!-- Wrapper -->
	<div id="wrapper">


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'changetochallenge' ); ?></a>

	<script type="text/javascript">
		function showHide() {
			var x = document.getElementById("menuDesk");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}
	</script>
	
	<!-- Header -->
	<header id="header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo1"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/header/C2C-blanco-RGB 1.png" alt=""></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo-mob"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/header/C2C-B-blanco-mob.png" alt=""></a>
		<nav>
			<ul class="links-max">
				<li>
					<a class="cont-ave opcDesk" onclick="showHide()">Tipos de<br>aventura</a> 
					<div id="menuDesk" class="content-menu-des">
						<ol>
							<li><a href="<?php echo esc_url( "/grupo-abierto" ); ?>">Grupo abierto</a></li>
							<li><a href="<?php echo esc_url( "/grupo-cerrado" ); ?>">Grupo cerrado</a></li>
							<li><a href="<?php echo esc_url( "/empresarial" ); ?>">Building empresarial</a></li>
						</ol>
					</div>
				</li>
				<li><a href="<?php echo esc_url( "/shop" ); ?>">Tienda</a></li>
				<li><a href="#"><span class="active-menu">ESP</span>/EN</a></li>
			</ul>
			
			<div class="menu-min">
				<a href="#menu" class="menuBtnMob"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/menu.png" alt="menu"></a>
			</div>
		</nav>
	</header>
	<nav id="menu">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/C2C-blue-RGB.png" class="logo-mob" alt=""></a>
			<ul class="links">
				<li class="links-mob">				
					Tipos de aventura				
				</li>
				<li>
					<a href="#submenu" class="arrow no-cerrar-menu" data-toggle="submenu"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/right-arrow-icon-27 3.png" alt=""></a>
					<ul id="submenu">
						<li><a href="<?php echo esc_url( "/grupo-abierto" ); ?>">Grupo abierto</a></li>
						<li><a href="<?php echo esc_url( "/grupo-cerrado" ); ?>">Grupo cerrado</a></li>
						<li><a href="<?php echo esc_url( "/empresarial" ); ?>">Building empresarial</a></li>
					</ul>
				</li>
				<li><a class="links-mob" href="<?php echo esc_url( "/shop" ); ?>">Tienda</a></li>
			</ul>
			<ul class="contact">
				<li>Escríbenos en:</li>
				<li><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/icon-whatsapp.svg" alt="" srcset=""><a href="http://"> 55 7358 6711</a></li>
				<li><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/icon-mail.svg" alt="" srcset=""><a href="mailto:info@chancetochallenge.com"> info@chancetochallenge.com</a></li>
				<li>Síguenos en:</li>
				<li>
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/group_sm.svg" alt="" srcset=""></a>
				</li>
			</ul>
		</nav>
