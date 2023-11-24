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
						<div class="col-12">
							<ul>
								<li><img src="<?php echo the_field('foto_horizontal'); ?>" alt="" srcset="" class="border-rad" style="height:350px; width:350px; "></li>
								<li><h5 class="card-title"><?php the_title(); ?></h5></li>
								<li><?php echo $product->get_price_html(); ?> MXN</li>
								<li><a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Ver más</a></li>
							</ul>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
 
			
					
 
 
 <?php
 get_footer();