<?php
/**
 * Template name: GrupoAbierto
 
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Change_to_challenge
 */

 get_header();
?>  

		<!-- Banner -->
		<section id="bannerTiposAventuras" class="major">
			<div class="container-fluid d-flex justify-content-center">
				<div class="row d-flex justify-content-center text-center">
					<h1>Be a challenger</h1>
					<hr/>
					<p>Explora el mundo con causa. <br />Despierta tu potencial.<br />Acepta el desafío.</p>
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
													<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-reserva.png" alt="">
													<p class="tipoaventura">Revisa las fechas que tenemos disponibles</p>
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
													<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/icon-inscribete.png" alt="" srcset="">
													<p class="tipoaventura">Inscríbete</p>
												</div>
											</div>
										</div><!-- end.slideItemsPoints -->
									</div><!-- end.ctSlideItems -->
								</div><!-- end.col-* -->
							</div><!-- end.row -->
						</div><!-- end.container -->
					</section><!-- end.section-unete -->


			<div class="container-fluid section-unete ">
                <!-- Control the column width, and how they should appear on different devices -->
                <div class="row text-center  d-flex justify-content-center mt-5">
                  <div class="col-sm-10" >
                  <p class="first-child carouselAventuras">Descubre nuestras próximas fechas<br/> <span class="text-orange"> y súmate a la aventura</span></p>
                  </div>
                </div>
                <br>
				
				<div class="container mt-5">
					<div class="row">
						<div class="col-12">
						<div class="slideHome">
							<div class="icons-conts">
					
							<div>
								<div class="cards-fou">
								<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-1.png" alt="" srcset="">
								</div><!-- end.cards-fou -->
							</div>
							<div>
								<div class="cards-fou">
								<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-2.png" alt="" srcset="">
								</div><!-- end.cards-fou -->
							</div>
							<div>
								<div class="cards-fou">
								<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-3.png" alt="" srcset="">
								</div><!-- end.cards-fou -->
							</div>
							
							</div><!-- end.icons-conts -->
							<a href="#" class="btnSlideProd bLeftP" id="prevslideHome"></a>
							<a href="#" class="btnSlideProd nRightP" id="nextslideHome"></a>
						</div><!-- end.slideHome -->
						</div><!-- end.col-* -->
					</div><!-- end.row -->
					</div><!-- end.container -->
					<div class="row">
					<!-- <div class="col-1 d-flex align-items-center">
						<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/right-arrow.png">
					</div> -->
					
					<!-- <div class="col-1 d-flex align-items-center"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/left-arrow.png"></div> -->
					</div>


				<div class="row text-center  d-flex justify-content-center mt-5">
                  <div class="col-sm-6 " >
                  	<p class="first-child carouselAventuras">Elige el mes <br/><span class="text-orange">para tu Challenge </span></p>
					  <div class="row text-center  d-flex justify-content-center">
						<div class="col-sm-12 pt-2 mt-5 contentShowMenu ">
							<a class="gen-btn showAllMonth meses">Ver todos los meses</a>
							<div class="contMenu contMenuMese">								
								<ul>
									<li>
										<span class="text-orange">2023</span>
										<br/>
										<ul class="nombres-mes">
											<li><span>Julio</span></li>
											<li><span>Agosto</span></li>
											<li><span>Septiembre</span></li>
											<li><span>Octubre</span></li>
											<li><span>Noviembre</span></li>
											<li><span>Diciembre</span></li>
										</ul>
									</li>
									<li>
										<span class="text-orange">2024</span>
										<br/>
										<ul class="nombres-mes">
											<li><span>Enero</span></li>
											<li><span>Febrero</span></li>
											<li><span>Marzo</span></li>
											<li><span>Abril</span></li>
											<li><span>Mayo</span></li>
											<li><span>Junio</span></li>
											<li><span>Julio</span></li>
											<li><span>Agosto</span></li>
											<li><span>Septiembre</span></li>
											<li><span>Octubre</span></li>
											<li><span>Noviembre</span></li>
											<li><span>Diciembre</span></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
                  </div>
                </div>
                <br>
			</div><!-- end.container -->
		</div>
	</div>

	<div class="container-fluid section-unete loopProductos d-none d-sm-none d-md-block">



<?php
 $args = array( 'post_type' => 'product', 'product_cat' => 'grupo-abierto', 'orderby' => 'rand' );
 $loop = new WP_Query( $args );
 $aux=1;
 while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
 if($aux == 1){		
?>
		<!-- Control the column width, and how they should appear on different devices -->	
		<div class="container mt-5 pt-4">
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




<section id="sub-two" class="info2 info d-block d-sm-block d-md-none">
  <div class="cont-section2  py-3 back">

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="slideHome2">
            <div class="icons-conts">
			<?php
			$args = array( 'post_type' => 'product', 'product_cat' => 'grupo-abierto', 'orderby' => 'rand' );
			$loop = new WP_Query( $args );
			$aux=1;
			while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
			?>
              <div>
                <div class="cards-fou">
                  <img src="<?php echo the_field('foto_horizontal'); ?>" alt="" srcset="">
                  <div class="text-fou">
                    <p><?php the_title();  ?></p>
                    <p class="des-fou"><?php echo $product->get_short_description(); ?></p>
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
                </div><!-- end.cards-fou -->
              </div>
			  <?php endwhile; ?>
			<?php wp_reset_query(); ?>
              
            </div><!-- end.icons-conts -->
            <a href="#" class="btnSlideProd bLeftP" id="prevslideHome2"></a>
            <a href="#" class="btnSlideProd nRightP" id="nextslideHome2"></a>
          </div><!-- end.slideHome -->
        </div><!-- end.col-* -->
      </div><!-- end.row -->
    </div><!-- end.container -->
    <div class="row">
      <!-- <div class="col-1 d-flex align-items-center">
        <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/right-arrow.png">
      </div> -->
      
      <!-- <div class="col-1 d-flex align-items-center"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/left-arrow.png"></div> -->
    </div>

  </div>
</section>


		   


<?php
get_footer();