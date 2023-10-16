<?php
/**
 * Template name: TipoAventuras
 
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Change_to_challenge
 */

 get_header();
?> 

<main role="main">

<div class="container-fluid ml-0 mr-0" style="background-image:url(<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/slider/sliderprin.png); background-size: cover; min-width: 100%;  min-height: 100vh;  background-repeat: no-repeat;" >
  
      <div class="container">
        <div class="carousel-caption text-left">
          <h1>Be a challenger</h1>
          <p>Descubre la nueva manera de conocer nuevos destinos y retos con causa</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
</div>

<?php get_footer(); ?>