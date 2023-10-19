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
			<div class="container-fluid d-flex justify-content-end">
				<div class="row d-flex justify-content-end mt-5 ">
					<h1>Be a challenger</h1>
					<hr/>
					<p>Explora el mundo con causa. <br />Despierta tu potencial.<br />Acepta el desafío.</p>
				</div>
			</div>
		</section>

				<!-- Main -->
					<div id="main">
						<section id="sub-one" class="info2 info mt-3 pt-5">
							<div class="cont-section2  py-3 gen-cont botoneraTiposAventuras">
								<div><a href="<?php echo esc_url( "/grupo-abierto" ); ?>" class="gen-btn active">Aventura abierta</a></div>
								<div><a href="<?php echo esc_url( "/grupo-cerrado" ); ?>" class="gen-btn">Aventura privada</a></div>
								<div><a href="<?php echo esc_url( "/empresarial" ); ?>" class="gen-btn">Aventura empresarial</a></div>
							</div>
						</section>
						<!-- One -->

            <div class="container-fluid section-unete ">
                <!-- Control the column width, and how they should appear on different devices -->
                <div class="row text-center  d-flex justify-content-center mt-5">
                  <div class="col-sm-6" >
                  <p class="first-child">¿Cómo reservar con Chance to Challenge?</p>
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
                  <p class="first-child carouselAventuras">Descubre nuestras próximas fechas <span class="text-orange"> y súmate a la aventura</span></p>
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
                  <div class="col-sm-6" >
                  	<p class="first-child carouselAventuras">Elige el mes <br/><span class="text-orange">para tu Challenge </span></p>
					<div class="mt-5">
						<a href="#" class="gen-btn showAllMonth">Ver todos los meses</a>
					</div>
                  </div>
                </div>
                <br>
			</div><!-- end.container -->
    <div class="row">
      <!-- <div class="col-1 d-flex align-items-center">
        <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/right-arrow.png">
      </div> -->
      
      <!-- <div class="col-1 d-flex align-items-center"><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/left-arrow.png"></div> -->
    </div>

  </div>
</div>
						<!-- cards -->
						<div id="sub-one" class="info2 info">
							<div class="sect-one py-3">
								<div class="cont-sect">
									<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/sect-1.png" alt="" srcset="">
								</div>
								<div class="cont-sect">
									<div class="sub-sec">
										<p class="sec-title"> Nevado a Valle</p>
										<p class="sec-text">En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. <br> El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.</p>
										<p class="sec-det ">3 de febrero</p>
										<p class="sec-det ">2 días</p>
										<p class="sec-det ">Costo: $3,000 MXN</p>
										<p class="sec-det sec-ult">Nivel Básico</p>

										<a href="" class="gen-btn my-4">Reservar</a>
									</div>
								</div>
							</div>
						</div>
						<div id="two" class="info my-4">
							<div class="sect-one py-3">
								<div class="cont-sect-two">
									<div class="sub-sec sub-left">
										<p class="sec-title"> Nevado a Valle</p>
										<p class="sec-text">En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. <br> El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.</p>
										<p class="sec-det ">3 de febrero</p>
										<p class="sec-det ">2 días</p>
										<p class="sec-det ">Costo: $3,000 MXN</p>
										<p class="sec-det sec-ult">Nivel Básico</p>

										<a href="" class="gen-btn my-4">Reservar</a>
									</div>
								</div>
								<div class="cont-sect-img">
									<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/sect-a-1.png">
								</div>
							</div>
							<div class="sect-one py-3">
								<div class="cont-sect-img">
									<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/sect-a-1.png">
								</div>
								<div class="cont-sect-two">
									<div class="sub-sec sub-left">
										<p class="sec-title"> Nevado a Valle</p>
										<p class="sec-text">En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. <br> El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.</p>
										<p class="sec-det ">3 de febrero</p>
										<p class="sec-det ">2 días</p>
										<p class="sec-det ">Costo: $3,000 MXN</p>
										<p class="sec-det sec-ult">Nivel Básico</p>

										<a href="" class="gen-btn my-4">Reservar</a>
									</div>
								</div>
							</div>
						</div>
						<div id="sub-one" class="info2 info">
							<div class="sect-one py-3">
								<div class="cont-sect">
									<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/sect-1.png" alt="" srcset="">
								</div>
								<div class="cont-sect">
									<div class="sub-sec">
										<p class="sec-title"> Nevado a Valle</p>
										<p class="sec-text">En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. <br> El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.</p>
										<p class="sec-det ">3 de febrero</p>
										<p class="sec-det ">2 días</p>
										<p class="sec-det ">Costo: $3,000 MXN</p>
										<p class="sec-det sec-ult">Nivel Básico</p>

										<a href="" class="gen-btn my-4">Reservar</a>
									</div>
								</div>
							</div>
						</div>
						<div id="two" class="info my-4">
							<div class="sect-one py-3">
								<div class="cont-sect-two">
									<div class="sub-sec sub-left">
										<p class="sec-title"> Nevado a Valle</p>
										<p class="sec-text">En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. <br> El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.</p>
										<p class="sec-det ">3 de febrero</p>
										<p class="sec-det ">2 días</p>
										<p class="sec-det ">Costo: $3,000 MXN</p>
										<p class="sec-det sec-ult">Nivel Básico</p>

										<a href="" class="gen-btn my-4">Reservar</a>
									</div>
								</div>
								<div class="cont-sect-img">
									<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/sect-a-1.png">
								</div>
							</div>
							<div class="sect-one py-3">
								<div class="cont-sect-img">
									<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/sect-a-1.png">
								</div>
								<div class="cont-sect-two">
									<div class="sub-sec sub-left">
										<p class="sec-title"> Nevado a Valle</p>
										<p class="sec-text">En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. <br> El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.</p>
										<p class="sec-det ">3 de febrero</p>
										<p class="sec-det ">2 días</p>
										<p class="sec-det ">Costo: $3,000 MXN</p>
										<p class="sec-det sec-ult">Nivel Básico</p>

										<a href="" class="gen-btn my-4">Reservar</a>
									</div>
								</div>
							</div>
						</div>
						
					</div>


<?php
get_footer();