<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<li <?php wc_product_cat_class( '', $category ); ?>>
<?php
/**
 * Template name: GrupoCerrado
 
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Change_to_challenge
 */

get_header();
?>  

			   <!-- Banner -->
	   <section id="bannerTiposAventurasCerrado" class="major ">
		   <div class="container-fluid d-flex justify-content-center">
			   <div class="row d-flex justify-content-center mt-5 text-center pb-4">
				   <p class="mb-0">En compañía todo es mejor...</p>
				   <p class="mt-0">Grupos que dejan huella</p>
			   </div>
		   </div>
	   </section>

		<!-- Main -->
			<div id="main">
			<section id="sub-one" class="info2 info">
							<div class="container">
								<div class="row">
									<div class="col-12">
										<div class="botoneraTiposAventuras">
											<div class="bxAdven"><a href="<?php echo esc_url( "/grupo-abierto" ); ?>" class="gen-btn ">Aventura abierta</a></div>
											<div class="bxAdven"><a href="<?php echo esc_url( "/grupo-cerrado" ); ?>" class="gen-btn ">Aventura privada</a></div>
											<div class="bxAdven"><a href="<?php echo esc_url( "/empresarial" ); ?>" class="gen-btn active">Aventura empresarial</a></div>
										</div>
									</div>
								</div>
							</div>
						</section>
				<!-- One -->

		   <div class="container-fluid section-unete ">
			   <!-- Control the column width, and how they should appear on different devices -->
			   <div class="row text-center  d-flex justify-content-center mt-5">
				 <div class="col-sm-6" >
				 <p class="first-child">¿Cómo reservar con<br />  Chance to Challenge?</p>
				 </div>
			   </div>
			   <br>
			   
			   <div class="row d-flex justify-content-center text-center content-icon3">
				 <div class="col-sm-4" >
				 <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-verifica.png" alt="" srcset="">
				 <p class="tipoaventura">Verifica los destinos disponibles</p>
				 </div>
				 <div class="col-sm-4" >
				 <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-elige.png" alt="" srcset="">
					 <p class="tipoaventura">Elige tu aventura</p>
				 </div>
				 <div class="col-sm-4" >
				 <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-envia.png" alt="" srcset="">
					 <p class="tipoaventura">Envianos tus datos y el tipo de aventura que buscas</p>
				 </div>
			   </div>
			   <br>
		   </div>

		   <div class="container-fluid section-unete ">
			   <!-- Control the column width, and how they should appear on different devices -->
			   <div class="row text-center  d-flex justify-content-center mt-5">
				 <div class="col-sm-10" >
				 <p class="first-child carouselAventuras">Reserva un grupo privado <br/><span class="text-orange"> Disfruta la naturaleza con tus personas favoritas</span></p>
				 </div>
			   </div>
			   <br>

			   <div class="container pt-5 pb-5">
			   <div class="row">
				   <div class="col-12">
				   <div class="slideHome ">
					   <div class="icons-conts">
			   
					   <div>
						   <div class="cards-fou tiposAventuras">
						   <img class="tiposAventuras"  src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-1.png" alt="" srcset="">
						   </div><!-- end.cards-fou -->
					   </div>
					   <div>
						   <div class="cards-fou tiposAventuras">
						   <img class="tiposAventuras" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-2.png" alt="" srcset="">
						   </div><!-- end.cards-fou -->
					   </div>
					   <div>
						   <div class="cards-fou tiposAventuras">
						   <img class="tiposAventuras"  src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-3.png" alt="" srcset="">
						   </div><!-- end.cards-fou -->
					   </div>
					   
					   </div><!-- end.icons-conts -->
					   <a href="#" class="btnSlideProd bLeftP" id="prevslideHome"></a>
					   <a href="#" class="btnSlideProd nRightP" id="nextslideHome"></a>
				   </div><!-- end.slideHome -->
				   </div><!-- end.col-* -->
			   </div><!-- end.row -->

			   <div class="row text-center  d-flex justify-content-center mt-5">
				<div class="col-sm-12" >
					<p class="first-child carouselAventuras cerrado">Totalmente personalizada y es ideal a partir de 8 personas</span></p>
				
				</div>
		</div>
			   <br>
		   </div><!-- end.container -->
	   </div>
   </div>

   <div class="container-fluid section-unete loopProductos">

		<div class="row text-center  d-flex justify-content-center">
			<div class="col-sm-12 pt-2 mt-0 contentShowMenu">
				<a class="gen-btn showAllMonth">Ver todos los destinos</a>
				<div class="contMenu">
					
				<ul>
					<?php
					  $categories = get_terms( array(
						'taxonomy' => 'product_cat',
						'hide_empty' => false,
						'parent' => 18 // or 
						//'child_of' => 17 // to target not only direct children
					) );
					
					foreach($categories as $category) { 
					
						echo '<li><span><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p></span></li>';
					
					}
					?>
					</ul>
				</div>
			</div>
		</div>

		<?php
		 $args = array( 'post_type' => 'product', 'product_cat' => 'grupo-cerrado', 'orderby' => 'rand' );
		 $loop = new WP_Query( $args );
		 $aux=1;
		 while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
		 if($aux == 1){		
		?>
				<!-- Control the column width, and how they should appear on different devices -->	
				<div class="container mt-5">
					<div class="row d-flex justify-content-center  content-icon3">
						<div class="col-sm-6 content-img" >
						<img src="<?php echo the_field('foto_horizontal'); ?>" alt="" srcset="" class="border-rad">
						</div>
						<div class="col-sm-6" >
							<h3><?php the_title(); ?></h3>
							<p class="descriptionProduct mt-5">
								<?php echo $product->get_short_description(); ?>
							</p>
							<ul class="listProduct mt-3">
								<li>3 de febrero</li>
								<li>Duración:<?php echo get_post_meta($loop->post->ID , 'duracion', true); ?></li>
								<li>Costo:<?php echo $product->get_price_html(); ?> MXN</li>
								<li>Nivel técnico: <?php echo get_post_meta($loop->post->ID , 'nivel_tecnico', true); ?></li>
							</ul>
							<div class="col-sm-6 text-left d-flex justify-start" >
								<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Reservar</a>
							</div>
						</div>
					</div>
				</div>
	   			<br>
			<?php } ?>
			<?php if($aux==2){ ?>
				<div class="container-fluid section-unete loopProductos Bgswhite pt-5">
					<!-- Control the column width, and how they should appear on different devices -->	
					<div class="container">
						<div class="row d-flex justify-content-center  content-icon3">
							
							<div class="col-sm-6" >
									<h3><?php the_title(); ?></h3>
									<p class="descriptionProduct mt-5">
										<?php echo $product->get_short_description(); ?>
									</p>
									<ul class="listProduct mt-3">
										<li>3 de febrero</li>
										<li>Duración:<?php echo get_post_meta($loop->post->ID , 'duracion', true); ?></li>
										<li>Costo:<?php echo $product->get_price_html(); ?> MXN</li>
										<li>Nivel técnico: <?php echo get_post_meta($loop->post->ID , 'nivel_tecnico', true); ?></li>
									</ul>
									<div class="col-sm-6 text-left d-flex justify-start" >
										<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Reservar</a>
									</div>
							</div>
							<div class="col-sm-6 content-img second" >
								<img src="<?php echo the_field('foto_horizontal'); ?>" alt="" srcset="" class="border-rad">
							</div>
						</div>
					</div>
					<br>
				</div>
			<?php } ?>
			<?php if($aux==3){ ?>
				<div class="container-fluid section-unete loopProductos Bgswhite pt-5">
					<!-- Control the column width, and how they should appear on different devices -->	
					<div class="container">
						<div class="row d-flex justify-content-center  content-icon3">
							<div class="col-sm-6 content-img " >
								<img src="<?php echo the_field('foto_horizontal'); ?>" alt="" srcset="" class="border-rad">
							</div>
							<div class="col-sm-6" >
									<h3><?php the_title();  ?></h3>
									<p class="descriptionProduct mt-5">
										<?php echo $product->get_short_description(); ?>
									</p>
									<ul class="listProduct mt-3">
										<li>3 de febrero</li>
										<li>Duración:<?php echo get_post_meta($loop->post->ID , 'duracion', true); ?></li>
										<li>Costo:<?php echo $product->get_price_html(); ?> MXN</li>
										<li>Nivel técnico: <?php echo get_post_meta($loop->post->ID , 'nivel_tecnico', true); ?></li>
									</ul>
									<div class="col-sm-6 text-left d-flex justify-start" >
										<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Reservar</a>
									</div>
							</div>
							
						</div>
					</div>
					<br>
				</div>
			<?php } ?>
			<?php $aux = ($aux <3) ? $aux + 1 : 1; ?>
			<?php endwhile; ?>
    	<?php wp_reset_query(); ?>
   </div>



				   


<?php
get_footer();