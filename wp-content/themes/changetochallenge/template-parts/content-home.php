<?php
/**
 * Template name: Home
 
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Change_to_challenge
 */

 get_header();
?>  
<!-- Banner -->
  <section id="banner" class="major">
		<div class="inner">
			<header class="major">
				<h1>Be a challenger</h1>
			</header>
			<div class="content">
				<p>Descubre la nueva manera<br/>de conocer nuevos destinos <br/>y retos con causa</p>
			</div>
		</div>
	</section>
	<!-- Main -->
<div id="main"><!-- One -->

<section class="section-unete">
    <div class="container-fluid text-center mb-4">
      <div class="row justify-content-center">
        <div class="col-sm-9" >
        <p class="first-child">¡Únete a nosotros en estas aventuras y juntos dejaremos <span class="text-orange">nuestro mundo como un lugar mejor!</span></p>
        </div>
      </div>
      <div class="row text-center mt-3">
        <div class="col-sm-12">
          <p class="question">¿Por qué viajar con <br/>Chance to Challenge?</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center content-icon3">
        <div class="col-12">
          <div class="ctSlideItems">
            <div class="slideItemsPoints">
  
              <div>
                <div class="ctSlideItems--img">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/icon-map.png" alt="">
                  <p class="pcorrect"><span>250+ </span>Aventuras<br /> completadas</p>
                </div>
              </div>
              <div>
                <div class="ctSlideItems--img">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/icon-bot.png" alt="" srcset="">
                  <p class="pcorrect"><span>3,000+ <br /></span>Challengers</p>
                </div>
              </div>
              <div>
                <div class="ctSlideItems--img">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/icon-plan.png" alt="" srcset="">
                  <p class="pcorrect"><span>20+ <br> </span>Destinos</p>
                </div>
              </div>
  
            </div><!-- end.slideItemsPoints -->
          </div><!-- end.ctSlideItems -->
        </div><!-- end.col-12 -->
      </div>
    </div>
</section>
   
<section class="section-pilares">
    <div class="container pt-5 pb-5">    
      <div class="row text-center">
        <div class="col-sm-12" >
          <p class="question">Nuestros Pilares</p>
        </div>
      </div>
      <div class="row justify-content-center text-center content-icon3">
        <div class="col-12">
          <div class="ctItemslidePil">
            <div class="slideItemsPils">
              <div>
                <div class="contPilares">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/icon-pino.png" alt="" srcset="">
                  <p>Empower</p>
                  <span>Desafía tus límites</span>
                  <p class="desc">Ofrecemos una variedad de destinos y aventuras organizadas para que disfrutes de actividades al aire libre y conozcas destinos increíbles.</p>
                </div>
              </div>
              <div>
                <div class="contPilares">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/icon-trans.png" alt="" srcset="">
                  <p>Transform</p>
                  <span>Viaja por una causa</span>
                  <p class="desc">Viajando colaboras con una causa específica destinada a la ecología o impacto social en la comunidad del destino que visitarás.</p>
                </div>
              </div>
              <div>
                <div class="contPilares">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/icon-heal.png" alt="" srcset="">
                  <p>Heal</p>
                  <span>Conecta contigo</span>
                  <p class="desc">Viaja a destinos increíbles y libera tu espíritu salvaje. En tu aventura conocerás amigos nuevos y estarás siempre acompañado por una guía.</p>
                </div>
              </div>
            </div><!-- end.slideItemsPils -->
            <a href="#" class="btnSlideProd bLeftP" id="prevslidePils"></a>
            <a href="#" class="btnSlideProd nRightP" id="nextslidePils"></a>
          </div><!-- end.ctItemslidePil -->
        </div><!-- end.col-* -->
      </div><!-- end.row -->
    </div><!-- end.container -->
</section><!-- end.section-pilares -->

<section class="section-unete buscando">
    <div class="container-fluid pt-5 pb-5">    
      <div class="row text-center">
        <div class="col-sm-12" >
          <p class="question quesMobi">Porque viajar sin sentido... <br><span class="text-orange">No tiene sentido </span></p>
        </div>
      </div>
      <div class="row text-center d-flex justify-content-center">
        <div class="col-sm-6" >
          <p class="question2">¿Qué tipo de aventura <br/> estás buscando?</span></p>
        </div>
      </div>
    </div>
    
    <div class="container"> 
      <div class="row justify-content-center text-center content-icon3">
        <div class="col-12">
          <div class="ctSlideAven">
            <div class="slideItemsAdven">
              <div>
                <div class="contPorQue">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/fot-1.png" alt="" srcset="">
                  <div class="text-thr">
                    <p class="tit">Aventura con Challengers como tú</p>
                    <p class="des">Elige una de nuestras próximas fechas y súmate a la aventura</p>
                  </div>
                  <a href="<?php echo esc_url( "/grupo-abierto" ); ?>">Conocer más</a>
                </div>
              </div>
              <div>
                <div class="contPorQue">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/fot-2.png" alt="" srcset="">
                  <div class="text-thr">
                    <p class="tit">Aventura organizada especialmente para tu grupo</p>
                    <p class="des">Personalizada e ideal para grupos a partir de 8 personas</p>
                  </div>
                  <a href="<?php echo esc_url( "/grupo-cerrado" ); ?>">Conocer más</a>
                </div>
              </div>
              <div>
                <div class="contPorQue">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/fot-3.png" alt="" srcset="">
                  <div class="text-thr">
                    <p class="tit">Aventuras enfocadas en team building empresarial</p>
                    <p class="des"> Conecta con la naturaleza y crea lazos inquebrantables</p>
                  </div>
                  <a href="<?php echo esc_url( "/empresarial" ); ?>">Conocer más</a>
                </div>
              </div>
            </div><!-- end.slideItemsAdven -->
            <a href="#" class="btnSlideProd bLeftP" id="prevslideAdven"></a>
            <a href="#" class="btnSlideProd nRightP" id="nextslideAdven"></a>
          </div><!-- end.ctSlideAven -->
        </div><!-- end.row -->
      </div>
  </div>
</section>
 

<section id="sub-two" class="info2 info">
  <div class="cont-section2  py-3 back">
    <div class="cont-cent">
      <p class="text-bold py-3 my3 titleImpacto">Nuestro impacto</p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="slideHome">
            <div class="icons-conts">
    
              <div>
                <div class="cards-fou">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/imp1.png" alt="" srcset="">
                  <div class="text-fou">
                    <p>FERNANDA</p>
                    <span>Viaje privado a Caminata Nevado a Valle</span>
                    <p class="des-fou">“Éramos un grupo de 9 personas y TODOS volveríamos a hacerla. ¡La ruta está padrísima! Nos tocó ver la mariposa monarca lo cual estuvo increíble. Los guías siempre al pendiente de nuestra seguridad y la del ecosistema. Llevé a mi perro y fue quien más lo disfrutó. Las cabañas rústicas pero acogedoras y la comida muy rica. Sin duda valió la pena, ya estoy planeando mi próxima experiencia con ellos. ¡Superaron mis expectativas!"</p>
                  </div>
                </div><!-- end.cards-fou -->
              </div>
              <div>
                <div class="cards-fou">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/imp2.png" alt="" srcset="">
                  <div class="text-fou">
                    <p>CLAUDIO</p>
                    <span>Team building Empresarial Dinamos</span>
                    <p class="des-fou">“Recomiendo enormemente trabajar con Chance to Challenge. Para nuestro equipo fue una experiencia única que definitivamente volveríamos a hacer con C to C. La organización fue impecable y tuvimos la oportunidad de tener sesiones guiadas de team building y también espacio para trabajar por nuestra cuenta como equipo.”</p>
                  </div>
                </div><!-- end.cards-fou -->
              </div>
              <div>
                <div class="cards-fou">
                  <img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/imp3.png" alt="" srcset="">
                  <div class="text-fou">
                    <p>CLAUDIA</p>
                    <span>Sierra Gorda, Querétaro</span>
                    <p class="des-fou">“¡Increíble! ¡Qué lugares tan hermosos! ¡Los guías maravillosos! Chuy rifadísimo, la casita ecológica espectacular… ¡Todo! Una gran experiencia.”</p>
                  </div>
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

  </div>
</section>


<section class="secServicios">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="ctServs">
          <div class="slideServiciosHome">
            <div>
              <div class="card one">
                <div class="card-body">
                  <h5 class="card-title">Bosques sustentables</h5>
                  <div class="text-hover">
                    <p class="card-text">Un uso sostenible de los bosques implica utilizarlos y cuidarlos de manera que se puedan satisfacer las necesidades y al mismo tiempo protegerlos para el futuro. Los métodos sostenibles no son los mismos en todos los lugares. Cada comunidad debe averiguar el más adecuado para sí misma y para la preservación del bosque. Apoyamos organizaciones que trabajan bajo este principio.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card two">
                <div class="card-body">
                  <h5 class="card-title">Desarrollo de <br/>comunidades sustentables</h5>
                  <div class="text-hover">
                    <p class="card-text">Consideramos que un desarrollo económico ambientalmente sostenible es garantía de que, esforzándose por satisfacer la demanda actual, se dejará en patrimonio un ambiente sano y recursos naturales suficientes para hacer frente a las necesidades de generaciones futuras.</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="card three">
                <div class="card-body">
                  <h5 class="card-title">Proyectos hidrológicos</h5>
                  <div class="text-hover">
                    <p class="card-text">Consideramos que un desarrollo económico ambientalmente sostenible es garantía de que, esforzándose por satisfacer la demanda actual, se dejará en patrimonio un ambiente sano y recursos naturales suficientes para hacer frente a las necesidades de generaciones futuras.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end.slideServiciosHome -->
          <a href="#" class="btnSlideProd bLeftP" id="prevslideServ"></a>
          <a href="#" class="btnSlideProd nRightP" id="nextslideServ"></a>
        </div><!-- end.ctServs -->
      </div><!-- end.col-12 -->
    </div><!-- end.secServicios -->
  </div><!-- end.container -->
</section><!-- end.secServicios -->

<div class="container-fluid content-form pt-5 pb-5">
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
						<input type="text" class="form-control required" id="name" placeholder="Nombre completo*:">
					</div>

					<!-- Campo para Correo Electrónico -->
					<div class="mb-3 sty-form">
						<input type="email" class="form-control required" id="email" placeholder="Correo*:">
					</div>

          <!-- Campo para telefono -->
					<div class="mb-3 sty-form">
						<input type="text" class="form-control required" id="tel" placeholder="Tel*:">
					</div>

					<!-- Campo para Mensaje -->
					<div class="mb-3 sty-form">
						<textarea class="form-control" id="message" placeholder="Déjanos tu mensaje:"></textarea>
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