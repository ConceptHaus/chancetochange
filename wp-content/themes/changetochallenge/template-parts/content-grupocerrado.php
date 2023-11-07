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
				<section id="sub-one" class="info2 info mt-3 pt-5 pb-3">
					<div class="container  py-3 gen-cont botoneraTiposAventuras">
						<div><a href="<?php echo esc_url( "/grupo-abierto" ); ?>" class="gen-btn ">Aventura abierta</a></div>
						<div><a href="<?php echo esc_url( "/grupo-cerrado" ); ?>" class="gen-btn active">Aventura privada</a></div>
						<div><a href="<?php echo esc_url( "/empresarial" ); ?>" class="gen-btn">Aventura empresarial</a></div>
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
		 $args = array( 'post_type' => 'product', 'posts_per_page' => 15, 'product_cat' => 'empresarial', 'orderby' => 'rand' );
		 $loop = new WP_Query( $args );
		 $aux=1;
		 while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
		 if($aux == 1){		
		?>
				<!-- Control the column width, and how they should appear on different devices -->	
				<div class="container mt-5">
					<div class="row d-flex justify-content-center  content-icon3">
						<div class="col-sm-6 content-img" >
						<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/sect-1.png" alt="" srcset="" class="border-rad">
						</div>
						<div class="col-sm-6" >
							<h3>Nevado a valle</h3>
							<p class="descriptionProduct mt-5">
							En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.
							</p>
							<ul class="listProduct mt-3">
								<li>3 de febrero</li>
								<li>2 días</li>
								<li>Costo: $3,000 MXN</li>
								<li>Nivel Básico</li>
							</ul>
							<div class="col-sm-6 text-left d-flex justify-start" >
								<a href="<?php echo esc_url( "/product/nevado-a-valle" ); ?>" class="btnReservar">Reservar</a>
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
									<h3>Nevado a valle</h3>
									<p class="descriptionProduct mt-5">
									En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.
									</p>
									<ul class="listProduct mt-3">
										<li>3 de febrero</li>
										<li>2 días</li>
										<li>Costo: $3,000 MXN</li>
										<li>Nivel Básico</li>
									</ul>
									<div class="col-sm-6 text-left d-flex justify-start" >
										<a href="<?php echo esc_url( "/product/nevado-a-valle" ); ?>" class="btnReservar">Reservar</a>
									</div>
							</div>
							<div class="col-sm-6 content-img second" >
								<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-1.png" alt="" srcset="" class="border-rad">
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
								<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-1.png" alt="" srcset="" class="border-rad">
							</div>
							<div class="col-sm-6" >
									<h3>Nevado a valle</h3>
									<p class="descriptionProduct mt-5">
									En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.
									</p>
									<ul class="listProduct mt-3">
										<li>3 de febrero</li>
										<li>2 días</li>
										<li>Costo: $3,000 MXN</li>
										<li>Nivel Básico</li>
									</ul>
									<div class="col-sm-6 text-left d-flex justify-start" >
										<a href="<?php echo esc_url( "/product/nevado-a-valle" ); ?>" class="btnReservar">Reservar</a>
									</div>
							</div>
							
						</div>
					</div>
					<br>
				</div>
			<?php } ?>
			<?php $aux = ($aux <3)? $aux + 1 : 1; ?>

			<?php endwhile; ?>
   </div>

   <div class="container-fluid section-unete loopProductos Bgswhite pt-5">
	   <!-- Control the column width, and how they should appear on different devices -->	
	   <div class="container">
		   <div class="row d-flex justify-content-center  content-icon3">
			   
			   <div class="col-sm-6" >
					   <h3>Nevado a valle</h3>
					   <p class="descriptionProduct mt-5">
					   En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.
					   </p>
					   <ul class="listProduct mt-3">
						   <li>3 de febrero</li>
						   <li>2 días</li>
						   <li>Costo: $3,000 MXN</li>
						   <li>Nivel Básico</li>
					   </ul>
					   <div class="col-sm-6 text-left d-flex justify-start" >
						   <a href="<?php echo esc_url( "/product/nevado-a-valle" ); ?>" class="btnReservar">Reservar</a>
					   </div>
			   </div>
			   <div class="col-sm-6 content-img second" >
				   <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-1.png" alt="" srcset="" class="border-rad">
			   </div>
		   </div>
		   <div class="row d-flex justify-content-center  content-icon3">
			   <div class="col-sm-6 content-img " >
				   <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/image-1.png" alt="" srcset="" class="border-rad">
			   </div>
			   <div class="col-sm-6" >
					   <h3>Nevado a valle</h3>
					   <p class="descriptionProduct mt-5">
					   En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.
					   </p>
					   <ul class="listProduct mt-3">
						   <li>3 de febrero</li>
						   <li>2 días</li>
						   <li>Costo: $3,000 MXN</li>
						   <li>Nivel Básico</li>
					   </ul>
					   <div class="col-sm-6 text-left d-flex justify-start" >
						   <a href="<?php echo esc_url( "/product/nevado-a-valle" ); ?>" class="btnReservar">Reservar</a>
					   </div>
			   </div>
			   
		   </div>
	   </div>
	   <br>
   </div>



				   


<?php
get_footer();