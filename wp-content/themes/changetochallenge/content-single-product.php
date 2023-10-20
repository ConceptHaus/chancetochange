<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Change_to_challenge
 */

 
 global $product;
$id = $product->get_id();
// Obtener el ID del producto.
$product->get_id();
 
// Información general del producto.
$product->get_type();
$product->get_name();
$product->get_slug();
$product->get_date_created();
$product->get_date_modified();
$product->get_status();
$product->get_featured();
$product->get_catalog_visibility();
$product->get_description();
$product->get_short_description();
$product->get_sku();
$product->get_menu_order();
$product->get_virtual();
get_permalink( $product->get_id() );
 
// Obtener precios del producto.
$product->get_price();
$product->get_regular_price();
$product->get_sale_price();
$product->get_date_on_sale_from();
$product->get_date_on_sale_to();
$product->get_total_sales();
 
// Obtener tasas, coste de envío y Stock.
$product->get_tax_status();
$product->get_tax_class();
$product->get_manage_stock();
$product->get_stock_quantity();
$product->get_stock_status();
$product->get_backorders();
$product->get_sold_individually();
$product->get_purchase_note();
$product->get_shipping_class_id();
 
// Obtener dimensiones del producto.
$product->get_weight();
$product->get_length();
$product->get_width();
$product->get_height();
$product->get_dimensions();
 
// Obtener productos relacionados.
$product->get_upsell_ids();
$product->get_cross_sell_ids();
$product->get_parent_id();
 
// Obtener variaciones de productos.
$product->get_attributes();
$product->get_default_attributes();
 
// Obtener taxonomías del producto.
$product->get_categories();
$product->get_category_ids();
$product->get_tag_ids();
 
// Obtener descargas del producto.
$product->get_downloads();
$product->get_download_expiry();
$product->get_downloadable();
$product->get_download_limit();
 
// Obtener imágenes del producto.
$product->get_image_id();
get_the_post_thumbnail_url( $product->get_id(), 'full' );
$product->get_gallery_image_ids();
 
// Obtener revisiones de productos.
$product->get_reviews_allowed();
$product->get_rating_counts();
$product->get_average_rating();
$product->get_review_count();
 


?>
<!-- Banner -->
<section id="single-product" class="major container-fluid" style="background-image: url(<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/detailproduct/banner-pruduct.png);
		 ">
	<div class="container-fluid d-flex justify-content-center">
		<div class="row d-flex justify-content-center mt-5 ">
			<h1><?php echo $product->get_name() ?></h1>
		</div>
	</div>
</section>

		

	<div class="container-fluid section-unete loopProductos pt-5">
		<!-- Control the column width, and how they should appear on different devices -->	
		
		<div class="row d-flex justify-content-center  content-icon3">
			<div class="col-sm-6 text-left" >
				<h3><?php echo $product->get_name() ?></h3>
				<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/images/grupoAbierto/sect-1.png" alt="" srcset="" class="border-rad">
			</div>
			<div class="col-sm-6" >
				<div class="col-sm-8" >
					
					<p class="descriptionProduct">
					En esta caminata podrás conocer uno de los bosques más profundos de México en una expedición desde la parte baja del Nevado de Toluca hasta Valle de Bravo. El sendero ofrece varios miradores donde puedes detenerte y disfrutar de las vistas impresionantes de los valles y montañas.
					</p>
					<ul class="listProduct">
						<li>3 de febrero</li>
						<li>2 días</li>
						<li>Costo: $3,000 MXN</li>
						<li>Nivel Básico</li>
					</ul>
					<a href="<?php echo esc_url( "/product/nevado-a-valle" ); ?>">Reservar</a>
				</div>
			</div>
		</div>
		<br>
	</div>

						<section id="sub-one" class="info2 info mt-3 pt-5">
							<div class="cont-section2  py-3 gen-cont botoneraTiposAventuras">
								<div><a href="<?php echo esc_url( "/grupo-abierto" ); ?>" class="gen-btn active">Aventura abierta</a></div>
								<div><a href="<?php echo esc_url( "/grupo-cerrado" ); ?>" class="gen-btn">Aventura privada</a></div>
								<div><a href="<?php echo esc_url( "/empresarial" ); ?>" class="gen-btn">Aventura empresarial</a></div>
							</div>
						</section>
						<!-- One -->
