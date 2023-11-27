
<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-sm-4 mb-3 mt-3 mb-sm-0">
<div class="col-12">
	<ul>
		<li><img src="<?php echo the_field('foto_horizontal'); ?>" alt="" srcset="" class="border-rad" style="height:350px; width:350px; "></li>
		<li><a href="<?php echo get_permalink( $loop->post->ID ) ?>"><h5 class="card-title"><?php the_title(); ?></h5></a></li>
		<li><?php echo $product->get_price_html(); ?> MXN</li>
		<li><a href="<?php echo esc_url( "/shop/?add-to-cart=".$loop->post->ID ); ?>" class="btnReservar">Agregar a carrito</a></li>
	</ul>
</div>
</div>