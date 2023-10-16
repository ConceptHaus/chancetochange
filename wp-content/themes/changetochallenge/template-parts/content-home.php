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
?>  <main role="main">

<div class="container-fluid ml-0 mr-0 bannerPrin" style="background-image:url(<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/slider/sliderprin.png); background-size: cover; min-width: 100%;  min-height: 100vh;  background-repeat: no-repeat;" >
  <div class="container">
    <div class="contentTextBanner text-rigth">
      <h1>Be a challenger</h1>
      <hr class="hr_custom" />
      <p>Descubre la nueva manera de conocer nuevos destinos y retos con causa</p>
    </div>
  </div>
</div>


<div class="container content-unete">
    <div class="row">
        <div class="col-lg-12">
            <h2>¡Únete a nosotros en estas aventuras y juntos dejaremos <span>nuestro mundo como un lugar mejor!</span></h2>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <h1>¿Por qué viajar con Chance to Challenge?</h1>
      </div>
    </div>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->



<div class="container  mt-5 pt-5 text-center">
  <div class="row">
    <div class="col-lg-4">
      <img class="rounded-circle" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/icon_aventuras.png" alt="Generic placeholder image" width="140" height="140">
      <p><span class="orange">250+</span> Aventuras completadas</p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-4">
      <img class="rounded-circle" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/icon_challengers.png" alt="Generic placeholder image" width="140" height="140">
      <p><span class="orange">3,000+</span> Challengers</p>
    </div><!-- /.col-lg-4 -->
    
    <div class="col-lg-4">
      <img class="rounded-circle" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/icon_destinos.png" alt="Generic placeholder image" width="140" height="140"> 
      <p><span class="orange">20+</span> Destinos</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row --> 
</div>

<div class="container-fluid contentPilares mt-5 text-center">
  <div class="row">
    <div class="col-lg-12">
      <h1>Nuestros Pilares</h1>
    </div>
  </div>
  <!-- Three columns of text below the carousel -->
  <div class="row content-card">
    <div class="col-lg-3">
      <img class="rounded-circle" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/icon_empower.png" alt="Generic placeholder image" width="140" height="140">
      <h4>Empower</h4>
      <span>Desafía tus límites</span>
      <p>Ofrecemos una variedad de destinos y aventuras organizadas para que disfrutes de actividades al aire libre y conozcas destinos increíbles.</p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-3">
      <img class="rounded-circle" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/icon_transform.png" alt="Generic placeholder image" width="140" height="140">
      <h4>Transform</h4>
      <span>Viaja por una causa</span>
      <p>Viajando colaboras con una causa específica destinada a la ecología o impacto social en la comunidad del destino que visitarás.</p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-3">
      <img class="rounded-circle" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/icon_heal.png" alt="Generic placeholder image" width="140" height="140">
      <h4>Heal</h4>
      <span>Conecta contigo</span>
      <p>Viaja a destinos increíbles y libera tu espíritu salvaje. En tu aventura conocerás amigos nuevos y estarás siempre acompañado por una guía.</p>
    </div><!-- /.col-lg-4 -->
    
  </div><!-- /.row -->

</div>

<div class="container content-porqueviajar">
    <div class="row">
        <div class="col-lg-12">
            <h2>Porque viajar sin sentido...<br/><span>No tiene sentido</span></h2>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <h1>¿Qué tipo de aventura estás buscando?</h1>
      </div>
    </div>

    <div class="row content-card">
    <div class="col-lg-3">
      <img class="" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/aventura_con_chaallengers.png" alt="Generic placeholder image" width="140" height="140">
      <h4>Empower</h4>
      <span>Desafía tus límites</span>
      <p>Ofrecemos una variedad de destinos y aventuras organizadas para que disfrutes de actividades al aire libre y conozcas destinos increíbles.</p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-3">
      <img class="" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/aventura_organizada.png" alt="Generic placeholder image" width="140" height="140">
      <h4>Transform</h4>
      <span>Viaja por una causa</span>
      <p>Viajando colaboras con una causa específica destinada a la ecología o impacto social en la comunidad del destino que visitarás.</p>
    </div><!-- /.col-lg-4 -->

    <div class="col-lg-3">
      <img class="" src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/home/aventura_enfocada.png" alt="Generic placeholder image" width="140" height="140">
      <h4>Heal</h4>
      <span>Conecta contigo</span>
      <p>Viaja a destinos increíbles y libera tu espíritu salvaje. En tu aventura conocerás amigos nuevos y estarás siempre acompañado por una guía.</p>
    </div><!-- /.col-lg-4 -->
    
  </div><!-- /.row -->
</div>

  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

</div><!-- /.container -->

<?php
get_footer();