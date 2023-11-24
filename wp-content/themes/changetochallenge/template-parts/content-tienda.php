<?php
/**
 * Template name: tienda
 
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
			   </div>
			</div>
		</section>
 
		<div class="container">
			<div class="row">			
			<?php
				$args = array( 'post_type' => 'product', 'posts_per_page' => 15, 'product_cat' => 'tienda', 'orderby' => 'rand' );
				$loop = new WP_Query( $args );
				$aux=1;
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<div class="col-sm-4 mb-3 mb-sm-0">
						<div class="card">
						<div class="card-body">
							<img src="<?php echo the_field('foto_horizontal'); ?>" alt="" srcset="" class="border-rad" style="height:350px; width:350px; ">
							<h5 class="card-title"><?php the_title(); ?></h5>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a href="#" class="btn btn-primary">Ver más</a>
						</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
 
			
					
 
 
 <?php
 get_footer();