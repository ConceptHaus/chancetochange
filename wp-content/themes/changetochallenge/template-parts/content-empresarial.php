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
 
	<div class="container-fluid section-unete loopProductos pt-5">
		<!-- Control the column width, and how they should appear on different devices -->	
		<div class="container">
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

	<div class="container-fluid section-unete loopProductos pt-5">
		<!-- Control the column width, and how they should appear on different devices -->	
		<div class="container">
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
	</div>

	<div class="container-fluid section-unete ">
				<!-- Control the column width, and how they should appear on different devices -->
				<div class="row text-center  d-flex justify-content-center mt-5">
				  <div class="col-sm-6" >
				  <p class="first-child">Juntos creando nuevas experiencias</p>
				  </div>
				</div>
				<br>
				<div class="container mt-5">
					<div class="row d-flex justify-content-center text-center contEmpresas mb-5">
						<div class="col-sm-3" >
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/facebook.png" alt="" srcset="">
						</div>
						<div class="col-sm-3" >
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/orbia.png" alt="" srcset="">
						</div>
						<div class="col-sm-3" >
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/bonafont.png" alt="" srcset="">
						</div> 
						<div class="col-sm-3" >
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/creyente.png" alt="" srcset="">
						</div>
					</div>
					<div class="row d-flex justify-content-center text-center contEmpresas mt-3 mb-5">
						<div class="col-sm-3" >
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/intellisite.png" alt="" srcset="">
						</div>
						<div class="col-sm-3" >
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/frisa.png" alt="" srcset="">
						</div>
						<div class="col-sm-3" >
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/mexplorer.png" alt="" srcset="">
						</div> 
						<div class="col-sm-3" >
							<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/picacho.png" alt="" srcset="">
						</div>
					</div>
				</div>
				<div class="row text-center  d-flex justify-content-center mt-5 mb-5">
				  <div class="col-sm-6" >
				  <p class="first-child">Perfeccionamos tu experiencia<br/><span class="text-orange">para que sea inolvidable</span> </p>
				  </div>
				</div>
			</div>
			
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
						<input type="text" class="form-control required" id="empresa" placeholder="Empresa / Marca u Organización*:*:">
					</div>

					<!-- Campo para número -->
					<div class="mb-3 sty-form">
						<input type="tel" class="form-control required" id="numero" placeholder="Número de challengers*:">
					</div>

					<!-- Campo para Fecha -->
					<div class="mb-3 sty-form d-flex justiy-content-start">
						<div class="row">
							<div class="col-sm-12">
								<span class="datecustomField">Selecciona una fecha*:</span>
							</div >
						</div>
						<div class="row">
							<input type="tel" class="form-control required w-30" id="mes">
							
							<input type="tel" class="form-control required w-30" id="dia"/>
							
							<input type="tel" class="form-control required w-30 ultimo" id="anio"/>
						</div>
						<div class="row">
						<span class="datecustomField">DD</span>
						<span class="datecustomField">MM</span>
						<span class="datecustomField">YYYY</span>
						</div>
					</div>

					<!-- Campo para Mensaje -->
					<div class="mb-3 sty-form">
						<textarea class="form-control" id="message" placeholder="Cuéntanos a detalle tu idea::"></textarea>
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