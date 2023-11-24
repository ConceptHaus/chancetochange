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
					<p class="">Porque no todo es trabajo</p>
					<p class="mt-0">Comienza la aventura</p>
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
 
					<section class="section-unete">
						<div class="container-fluid">
							<div class="row text-center  d-flex justify-content-center mt-5">
								<div class="col-sm-6" >
									<p class="first-child">¿Cómo reservar con <br/> Chance to Challenge?</p>
								</div>
							</div>
						</div>
						<div class="container text-center">
							<div class="row justify-content-center content-icon3">
								<div class="col-12">
									<div class="ctSlideItems">
										<div class="slideItemsPoints">
											<div>
												<div class="ctSlideItems--img">
													<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/icon_destinos.png" alt="" srcset="">
													<p class="tipoaventura">Verifica los destinos disponibles</p>
												</div>
											</div>
											<div>
												<div class="ctSlideItems--img">
													<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-elige.png" alt="" srcset="">
													<p class="tipoaventura">Elige tu aventura</p>
												</div>
											</div>
											<div>
												<div class="ctSlideItems--img">
													<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/icon-msg.png" alt="" srcset="">
													<p class="tipoaventura">Envíanos tus datos y el tipo de aventura que buscas</p>
												</div>
											</div>
										</div><!-- end.slideItemsPoints -->
									</div><!-- end.ctSlideItems -->
								</div><!-- end.col-* -->
							</div><!-- end.row -->
						</div><!-- end.container -->
					</section><!-- end.section-unete -->
 
			<section class="section-unete">
				<div class="container">
					<div class="row text-center  d-flex justify-content-center mt-5">
						<div class="col-sm-10" >
							<p class="first-child carouselAventuras">¡Crea una experiencia personalizada <br/> de team building <span class="text-orange">orientada a tus metas y objetivos como equipo!</span></p>
						</div><!-- end.col-* -->
					</div><!-- end.row -->
				</div><!-- end.container -->
				<div class="container pt-5 pb-5">
					<div class="row">
						<div class="col-12">
							<div class="slideHome">
								<div class="icons-conts">				
									<div>
										<div class="cards-fou tiposAventuras">
											<img class="imgTipoAdven" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-1.png" alt="" srcset="">
										</div><!-- end.cards-fou -->
									</div>
									<div>
										<div class="cards-fou tiposAventuras">
											<img class="imgTipoAdven" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-2.png" alt="" srcset="">
										</div><!-- end.cards-fou -->
									</div>
									<div>
										<div class="cards-fou tiposAventuras">
											<img class="imgTipoAdven" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-3.png" alt="" srcset="">
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
									</div><!-- end.contMenu -->
								</div><!-- end.contentShowMenu -->
							</div><!-- end.row -->
						</div><!-- end.col-* -->
					</div><!-- end.row -->
				</div><!-- end.container -->
			</section><!-- end.section/unete -->
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
								<!--<li>3 de febrero</li>-->
								<li><?php echo get_post_meta($loop->post->ID , 'duracion', true); ?></li>
								<!--<li>Costo: $ <?php echo $product->get_price_html(); ?> MXN</li>-->
								<li><?php echo get_post_meta($loop->post->ID , 'nivel_tecnico', true); ?></li>
							</ul>
							<div class="col-sm-6 text-left d-flex justify-start" >
								<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Ver más</a>
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
									<!--<li>3 de febrero</li>-->
									<li><?php echo get_post_meta($loop->post->ID , 'duracion', true); ?></li>
									<!--<li>Costo: $ <?php echo $product->get_price_html(); ?> MXN</li>-->
									<li><?php echo get_post_meta($loop->post->ID , 'nivel_tecnico', true); ?></li>
								</ul>
								<div class="col-sm-6 text-left d-flex justify-start" >
									<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Ver más</a>
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
									<!--<li>3 de febrero</li>-->
									<li><?php echo get_post_meta($loop->post->ID , 'duracion', true); ?></li>
									<!--<li>Costo: $ <?php echo $product->get_price_html(); ?> MXN</li>-->
									<li><?php echo get_post_meta($loop->post->ID , 'nivel_tecnico', true); ?></li>
								</ul>
								<div class="col-sm-6 text-left d-flex justify-start" >
									<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Ver más</a>
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
	
 
			<section class="section-unete">
				<div class="container">
					<div class="row text-center  d-flex justify-content-center mt-5">
						<div class="col-sm-10" >
							<p class="first-child">Juntos creando nuevas experiencias</p>
						</div><!-- end.col-* -->
					</div><!-- end.row -->
				</div><!-- end.container -->
				<div class="container mt-5">
					<div class="row d-flex justify-content-center text-center contEmpresas mb-5">
						<div class="col-6 col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/facebook.png" alt="" srcset="">
						</div>
						<div class="col-6 col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/orbia.png" alt="" srcset="">
						</div>
						<div class="col-6 col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/bonafont.png" alt="" srcset="">
						</div> 
						<div class="col-6 col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/creyente.png" alt="" srcset="">
						</div>
					</div><!-- end.row -->
					<div class="row d-flex justify-content-center text-center contEmpresas mt-3 mb-5">
						<div class="col-6 col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/intellisite.png" alt="" srcset="">
						</div>
						<div class="col-6 col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/frisa.png" alt="" srcset="">
						</div>
						<div class="col-6 col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/mexplorer.png" alt="" srcset="">
						</div> 
						<div class="col-6 col-md-3">
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/picacho.png" alt="" srcset="">
						</div>
					</div><!-- end.row -->
				</div><!-- end.container -->
				<div class="container">
					<div class="row text-center  d-flex justify-content-center mt-5 mb-5">
						<div class="col-sm-10" >
							<p class="first-child">Perfeccionamos tu experiencia<br/><span class="text-orange">para que sea inolvidable</span> </p>
						</div><!-- end.col-* -->
					</div><!-- end.row -->
				</div><!-- end.container -->
			</section><!-- end.section-unete -->
			
<div class="container-fluid content-form pt-5">
	<div class="container">
		<div class="row d-flex justify-content-center  content-icon3">
			<div class="col-sm-6 content-img" >
				<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/contact.png" alt="" srcset="" class="border-rad">
			</div>
			<div class="col-sm-6" >
				<h3>Contáctanos</h3>
				<p class="descriptionProduct contacto mt-2">
				Si tienes alguna duda o comentario, <span class="text-orange">escríbenos y pronto nos pondremos en contacto contigo.</span></p>
				<br/>
				<div class="content-frm">
				<form action="" method="post">
					<!-- Campo para Nombre Completo -->
					<div class="mb-3 sty-form">
						<input type="text" class="form-control required" id="name" placeholder="Nombre Completo*:">
					</div>

					<!-- Campo para Correo Electrónico -->
					<div class="mb-3 sty-form">
						<input type="email" class="form-control required" id="email" placeholder="Correo*:">
					</div>

					<div class="mb-3 sty-form">
						<input type="text" class="form-control required" id="puesto" placeholder="Puesto*:">
					</div>

					<div class="mb-3 sty-form">
						<input type="text" class="form-control required" id="empresa" placeholder="Empresa / Marca u Organización*:">
					</div>

					<!-- Campo para número -->
					<div class="mb-3 sty-form">
						<input type="tel" class="form-control required" id="numero" placeholder="Número de challengers*:">
					</div>

					<!-- Campo para Fecha -->
					<div class="mb-3 sty-form d-flex justiy-content-start">
						<div class="row">
							<div class="col-sm-10 d-flex justify-content-start">
								<span class="datecustomField">Selecciona una fecha*:</span>
							</div >
							<div class="row contentInputsCustom">
								<div class="col-4">
									<input type="tel" class="form-control required w-50 mb-1" id="mes" />
									<span class="datecustomField">DD</span>
								</div>
								<div class="col-4">
									<input type="tel" class="form-control required w-50 mb-1" id="dia"/>
									<span class="datecustomField">MM</span>
								</div>
								<div class="col-4">	
									<input type="tel" class="form-control required w-35 ultimo mb-1" id="anio"/>
									<span class="datecustomField">YYYY</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Campo para Mensaje -->
					<div class="mb-3 sty-form">
						<textarea class="form-control" id="message" placeholder="Cuéntanos a detalle tu idea:"></textarea>
					</div>
					<input type="submit" class="btn-env btnSubmit mt-4" value="Enviar">
				</form>
			</div>
			</div>
		</div>
	</div>

    
  </div>
</div>
 
 
					
 
 
 <?php
 get_footer();