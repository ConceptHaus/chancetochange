<?php
/**
 * Template name: empresarial
 
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Change_to_challenge
 */

 get_header();
 ?>  
 
				<!-- Banner -->
		<section id="bannerTiposAventurasEmpresarial" class="major">
			<div class="container-fluid d-flex justify-content-center">
			<div class="row d-flex justify-content-center mt-5 text-center pb-4">
				   <p class="mb-0">Porque no todo es trabajo</p>
				   <p class="mt-0">Comienza la aventura</p>
			   </div>
			</div>
		</section>
 
				<!-- Main -->
					<div id="main">
						<section id="sub-one" class="info2 info mt-3 pt-5 pb-3">
							<div class="container  py-3 gen-cont botoneraTiposAventuras">
								<div><a href="<?php echo esc_url( "/grupo-abierto" ); ?>" class="gen-btn ">Aventura abierta</a></div>
								<div><a href="<?php echo esc_url( "/grupo-cerrado" ); ?>" class="gen-btn ">Aventura privada</a></div>
								<div><a href="<?php echo esc_url( "/empresarial" ); ?>" class="gen-btn active">Aventura empresarial</a></div>
							</div>
						</section>
						<!-- One -->
 
			<div class="container-fluid section-unete ">
				<!-- Control the column width, and how they should appear on different devices -->
				<div class="row text-center  d-flex justify-content-center mt-5">
				  <div class="col-sm-6" >
				  <p class="first-child">¿Cómo reservar con <br/> Chance to Challenge?</p>
				  </div>
				</div>
				<br>
				
				<div class="row d-flex justify-content-center text-center content-icon3">
				  <div class="col-sm-4" >
				  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-reserva.png" alt="" srcset="">
				  <p class="tipoaventura">Revisa las fechas que tenemos disponibles</p>
				  </div>
				  <div class="col-sm-4" >
				  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-elige.png" alt="" srcset="">
					  <p class="tipoaventura">Elige tu aventura</p>
				  </div>
				  <div class="col-sm-4" >
				  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-inscribete.png" alt="" srcset="">
					  <p class="tipoaventura">Inscríbete</p>
				  </div>
				</div>
				<br>
			</div>
 
			<div class="container-fluid section-unete ">
				<!-- Control the column width, and how they should appear on different devices -->
				<div class="row text-center  d-flex justify-content-center mt-5">
				  <div class="col-sm-6" >
				  <p class="first-child carouselAventuras">¡Crea una experiencia personalizada de team building <span class="text-orange">orientada a tus metas y objetivos como equipo!</span></p>
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
							<p class="first-child carouselAventuras">Aventuras enfocadas en <br /><span class="text-orange">team building empresarial y activaciones de marca</span></p>
							<div class="mt-5">
								<a href="#" class="gen-btn showAllMonth">Ver todos los destinos</a>
							</div>
						</div>
					</div>
				<br>
			</div><!-- end.container -->
		</div>
	</div>
	<?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 15, 'product_cat' => 'empresarial', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
		$aux=1;
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
		if($aux == 1){		
	
		?>

           
		   <div class="container-fluid section-unete loopProductos pt-5">
				<!-- Control the column width, and how they should appear on different devices -->	
				<div class="container">
					<div class="row d-flex justify-content-center  content-icon3">
						<div class="col-sm-6 content-img" >
						<img src="<?php echo the_field('foto_vertical'); ?>" alt="" srcset="" class="border-rad">
						</div>
						<div class="col-sm-6" >
							<h3><?php the_title(); ?></h3>
							<p class="descriptionProduct mt-5">
								<?php echo $product->get_short_description(); ?>
							</p>
							<ul class="listProduct mt-3">
								<li>3 de febrero</li>
								<li>Duración:<?php echo get_post_meta($loop->post->ID , 'duracion', true); ?></li>
								<li>Costo: $ <?php echo $product->get_price_html(); ?> MXN</li>
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
			<?php if($aux==2){ ?>
				<div class="container-fluid section-unete loopProductos pt-5">
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
									<li>Costo: $ <?php echo $product->get_price_html(); ?> MXN</li>
									<li>Nivel técnico: <?php echo get_post_meta($loop->post->ID , 'nivel_tecnico', true); ?></li>
								</ul>
								<div class="col-sm-6 text-left d-flex justify-start" >
									<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Reservar</a>
								</div>
							</div>
							<div class="col-sm-6 content-img" >
								<img src="<?php echo the_field('foto_horizontal'); ?>" alt="" srcset="" class="border-rad">
							</div>
						</div>

					</div>
					<br>
				</div>
			<?php } ?>
			<?php if($aux==3){ ?>
				<div class="container-fluid section-unete loopProductos pt-5">
					<!-- Control the column width, and how they should appear on different devices -->	
					<div class="container">
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
									<li>Costo: $ <?php echo $product->get_price_html(); ?> MXN</li>
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
			<?php } 
			$aux = ($aux <3)? $aux + 1 : 1; ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
	
 
 
 
					
 
 
 <?php
 get_footer();