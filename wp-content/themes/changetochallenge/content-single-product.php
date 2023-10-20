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

		

	<div class="container-fluid  pt-5">
		<!-- Control the column width, and how they should appear on different devices -->	
		<div class="container">
			<div class="row d-flex justify-content-center pt-5 detail-product">
				<div class="col-sm-6" >
					<h3><?php echo $product->get_name(); ?></h3>
					<img src="<?php echo the_field('foto_vertical'); ?>" alt="" srcset="" class="border-rad">
					<a href="<?php echo the_field("pdf_informativo");?>">PDF Informativo</a>
				</div>
				<div class="col-sm-6" >
					<div class="col-sm-8" >
						<p class="descriptionProduct">Conoce más sobre <br/> este challenge</p>
						<hr class="hr-orange"/>
						<?php if(get_field('challenge')) { ?>							
							<div class="row">
								<div class="col-sm-6">
									<p class="etiqueta">Challenge</p>
								</div>
								<div class="col-sm-6">
									<p class="valor"><?php echo the_field('challenge'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('tipo_de_causa')) { ?>							
							<div class="row">
								<div class="col-sm-6">
									<p class="etiqueta">Tipo de causa</p>
								</div>
								<div class="col-sm-6">
									<p class="valor"><?php echo the_field('tipo_de_causa'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('duracion')) { ?>							
							<div class="row">
								<div class="col-sm-6">
									<p class="etiqueta">Duración</p>
								</div>
								<div class="col-sm-6">
									<p class="valor"><?php echo the_field('duracion'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('nivel_fisico')) { ?>							
							<div class="row">
								<div class="col-sm-6">
									<p class="etiqueta">Nivel físico</p>
								</div>
								<div class="col-sm-6">
									<p class="valor"><?php echo the_field('nivel_fisico'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('nivel_tecnico')) { ?>							
							<div class="row">
								<div class="col-sm-6">
									<p class="etiqueta">Nivel técnico</p>
								</div>
								<div class="col-sm-6">
									<p class="valor"><?php echo the_field('nivel_tecnico'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('punto_de_encuentro')) { ?>							
							<div class="row">
								<div class="col-sm-6">
									<p class="etiqueta">Punto de encuentro</p>
								</div>
								<div class="col-sm-6">
									<p class="valor"><?php echo the_field('punto_de_encuentro'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('inicia_en')) { ?>							
							<div class="row">
								<div class="col-sm-6">
									<p class="etiqueta">Inicia en</p>
								</div>
								<div class="col-sm-6">
									<p class="valor"><?php echo the_field('inicia_en'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('termina_en')) { ?>							
							<div class="row">
								<div class="col-sm-6">
									<p class="etiqueta">Termina en</p>
								</div>
								<div class="col-sm-6">
									<p class="valor"><?php echo the_field('termina_en'); ?></p>
								</div>
							</div>
						<?php } ?>
						<hr class="hr-orange"/>
						<?php if(get_field('incluye')) { ?>							
							<div class="row">
								<div class="col-sm-12">
									<p class="etiqueta"><strong>Incluye: </strong><?php echo the_field('incluye'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('se_recomienda_llevar')) { ?>							
							<div class="row">
								<div class="col-sm-12">
									<p class="etiqueta"><strong>Se recomienda llevar: </strong><?php echo the_field('se_recomienda_llevar'); ?></p>
								</div>
							</div>
						<?php } ?>

												
						<div class="row">
							<div class="col-sm-12">
								<h3><span>Costo: </span><?php echo $product->get_price(); ?> mxn</h3>
								<?php if(get_field('se_recomienda_llevar')) { ?>	
									<p class="etiqueta"><?php echo the_field("nota_costo"); ?></p>
								<?php } ?>
							</div>
						</div>
						
						
						
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>

						<section id="sub-one" class="info2 info mt-3 pt-5">
							<div class="cont-section2  py-3 gen-cont botoneraTiposAventuras">
								<div><a href="<?php echo esc_url( "/grupo-abierto" ); ?>" class="gen-btn active">Aventura abierta</a></div>
								<div><a href="<?php echo esc_url( "/grupo-cerrado" ); ?>" class="gen-btn">Aventura privada</a></div>
								<div><a href="<?php echo esc_url( "/empresarial" ); ?>" class="gen-btn">Aventura empresarial</a></div>
							</div>
						</section>
						<!-- One -->
