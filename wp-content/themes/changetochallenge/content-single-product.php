<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Change_to_challenge
 */

 
 global $product;
//  print_r($product);

// Obtener el ID del producto.
$product->get_id();
define("IDCURRENT", $product->get_id());
 
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

/*

$terms = get_terms( 'product_cat', $args );
print_r($terms); exit;
*/

<<<<<<< HEAD
=======

>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
 


?>
<!-- Banner -->
<section id="single-product" class="major container-fluid" style="background-image: url(<?php echo the_field('imagen_fondo_banner'); ?>);
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
				<div class="col-sm-6 detail-product" >
					<h3><?php echo $product->get_name(); ?></h3>
					<img src="<?php echo the_field('foto_vertical'); ?>" alt="" srcset="" class="border-rad">
					<br/>
					<a href="<?php echo the_field("pdf_informativo");?>" target="_blank" class="mt-4">PDF Informativo</a>
				</div>
				<div class="col-sm-6" >
					<div class="col-sm-12 detail-product" >
						<a class="historyBack mb-5" href="javascript:history.back()">< Volver</a>
						<p class="descriptionProduct">Conoce más sobre <br/> este challenge</p>
						<hr class="hr-orange singleprod mb-5"/>
						<?php if(get_field('challenge')) { ?>							
							<div class="row mt-4">
<<<<<<< HEAD
								<div class="col-6 col-sm-6">
									<p class="etiqueta">Challenge</p>
								</div>
								<div class="col-6 col-sm-6">
=======
								<div class="col-sm-6">
									<p class="etiqueta">Challenge</p>
								</div>
								<div class="col-sm-6">
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
									<p class="valor"><?php echo the_field('challenge'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('tipo_de_causa')) { ?>							
							<div class="row">
<<<<<<< HEAD
								<div class="col-6 col-sm-6">
									<p class="etiqueta">Tipo de causa</p>
								</div>
								<div class="col-6 col-sm-6">
=======
								<div class="col-sm-6">
									<p class="etiqueta">Tipo de causa</p>
								</div>
								<div class="col-sm-6">
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
									<p class="valor"><?php echo the_field('tipo_de_causa'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('duracion')) { ?>							
							<div class="row">
<<<<<<< HEAD
								<div class="col-6 col-sm-6">
									<p class="etiqueta">Duración</p>
								</div>
								<div class="col-6 col-sm-6">
=======
								<div class="col-sm-6">
									<p class="etiqueta">Duración</p>
								</div>
								<div class="col-sm-6">
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
									<p class="valor"><?php echo the_field('duracion'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('nivel_fisico')) { ?>							
							<div class="row">
<<<<<<< HEAD
								<div class="col-6 col-sm-6">
									<p class="etiqueta">Nivel físico</p>
								</div>
								<div class="col-6 col-sm-6">
=======
								<div class="col-sm-6">
									<p class="etiqueta">Nivel físico</p>
								</div>
								<div class="col-sm-6">
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
									<p class="valor"><?php echo the_field('nivel_fisico'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('nivel_tecnico')) { ?>							
							<div class="row">
<<<<<<< HEAD
								<div class="col-6 col-sm-6">
									<p class="etiqueta">Nivel técnico</p>
								</div>
								<div class="col-6 col-sm-6">
=======
								<div class="col-sm-6">
									<p class="etiqueta">Nivel técnico</p>
								</div>
								<div class="col-sm-6">
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
									<p class="valor"><?php echo the_field('nivel_tecnico'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('punto_de_encuentro')) { ?>							
							<div class="row">
<<<<<<< HEAD
								<div class="col-6 col-sm-6">
									<p class="etiqueta">Punto de encuentro</p>
								</div>
								<div class="col-6 col-sm-6">
=======
								<div class="col-sm-6">
									<p class="etiqueta">Punto de encuentro</p>
								</div>
								<div class="col-sm-6">
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
									<p class="valor"><?php echo the_field('punto_de_encuentro'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('inicia_en')) { ?>							
							<div class="row">
<<<<<<< HEAD
								<div class="col-6 col-sm-6">
									<p class="etiqueta">Inicia en</p>
								</div>
								<div class="col-6 col-sm-6">
=======
								<div class="col-sm-6">
									<p class="etiqueta">Inicia en</p>
								</div>
								<div class="col-sm-6">
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
									<p class="valor"><?php echo the_field('inicia_en'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('termina_en')) { ?>							
							<div class="row">
<<<<<<< HEAD
								<div class="col-6 col-sm-6">
									<p class="etiqueta">Termina en</p>
								</div>
								<div class="col-6 col-sm-6">
=======
								<div class="col-sm-6">
									<p class="etiqueta">Termina en</p>
								</div>
								<div class="col-sm-6">
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
									<p class="valor"><?php echo the_field('termina_en'); ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('nivel_fisico')) { ?>							
							<div class="row mt-4">
								<div class="col-sm-12">
									<?php
									switch(get_field('nivel_fisico')){
										case 'Principiante':
<<<<<<< HEAD
											echo '<p class="valorAste"><strong>* </strong>Entrenamiento físco básico</p>';
											break;
										case 'Intermedio*':
											echo '<p class="valorAste"><strong>* </strong>Entrenamiento físco previo</p>';
											break;
										case 'Avanzado*':
											echo '<p class="valorAste"><strong>* </strong>Se requiere entrenamiento físco avanzado</p>';
=======
											echo '<p class="valorAste"><strong>* </strong> Ejercicio por lo menos 2 veces a la semana</p>';
											break;
										case 'Intermedio*':
											echo '<p class="valorAste"><strong>* </strong> Ejercicio por lo menos 3 veces a la semana.</p>';
											break;
										case 'Avanzado*':
											echo '<p class="valorAste"><strong>* </strong> Ejercicio por lo menos 5 veces a la semana</p>';
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
											break;
									}
									?>
								</div>
							</div>
						<?php } ?>

						<?php if(get_field('nivel_tecnico')) { ?>							
							<div class="row mt-4">
								<div class="col-sm-12">
									<?php
									switch(get_field('nivel_tecnico')){
										case 'Principiante':
											echo '<p class="valorAste"><strong>** </strong>Entrenamiento técnico básico</p>';
											break;
										case 'Intermedio*':
<<<<<<< HEAD
											echo '<p class="valorAste"><strong>** </strong>Entrenamiento técnico previo</p>';
=======
											echo '<p class="valorAste"><strong>** </strong> Entrenamiento técnico intermedio</p>';
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
											break;
										case 'Avanzado*':
											echo '<p class="valorAste"><strong>** </strong>Se requiere entrenamiento técnico avanzado</p>';
											break;
									}
									?>
								</div>
							</div>
						<?php } ?>
						<hr class="hr-orange singleprod mt-5 mb-5"/>
						<?php if(get_field('incluye')) { ?>							
							<div class="row">
								<div class="col-sm-12">
<<<<<<< HEAD
									<p class="etiqueta">Incluye: <span><?php echo the_field('incluye'); ?></span></p>
=======
									<p class="etiqueta">Incluye: <?php echo the_field('incluye'); ?></p>
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
								</div>
							</div>
						<?php } ?>
						<?php if(get_field('se_recomienda_llevar')) { ?>							
							<div class="row">
								<div class="col-sm-12">
<<<<<<< HEAD
									<p class="etiqueta">Se recomienda llevar: <span><?php echo the_field('se_recomienda_llevar'); ?></span></p>
=======
									<p class="etiqueta">Se recomienda llevar: <?php echo the_field('se_recomienda_llevar'); ?></p>
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
								</div>
							</div>
						<?php } ?>

												
						<div class="row">
							<div class="col-sm-12">
								<h3 class="costo-single">Costo: <span>$ <?php echo $product->get_price(); ?> mxn</span></h3>
<<<<<<< HEAD
								<!-- <?php if(get_field('se_recomienda_llevar')) { ?>	
									<p class="valor"><?php echo the_field("nota_costo"); ?></p>
								<?php } ?> -->
=======
								<?php if(get_field('se_recomienda_llevar')) { ?>	
									<p class="valor"><?php echo the_field("nota_costo"); ?></p>
								<?php } ?>
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
							</div>
						</div>
						
						
						
					</div>
				</div>
			</div>
			<br>
		</div>
	</div>

	<div class="container-fluid section-unete">
		<!-- Control the column width, and how they should appear on different devices -->
		<div class="row text-center  d-flex justify-content-center mt-5 pt-5">
			<div class="col-sm-6" >
				<p class="first-child">Unirme a grupo abierto</p>
			</div>
		</div>
<<<<<<< HEAD
=======
		<br>
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651
	</div>

	<section id="sub-one" class="info2 info mt-3 pt-5 ">
		<div class="cont-section2  py-3 gen-cont botoneraTiposAventuras container">
		
			<div class="col-3"><a href="#" class="gen-btn active">Chosen appointment</a></div>
			<div class="col-3"><a href="#" class="gen-btn">Your info</a></div>
			<div class="col-3"><a href="#" class="gen-btn">Confirmation</a></div>

		</div>
	</section>

	<div class="container-fluid section-unete ">
		<!-- Control the column width, and how they should appear on different devices -->
		<div class="row text-center  d-flex justify-content-center mt-5">
			<div class="col-sm-6" >
				<p class="first-child">Otros <strong class="text-orange">challenges</strong> de interés</p>
			</div>
		</div>
		<br>
		
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-12 contslideProductoSingle">
					<div class="slideProductoSingle ">
						<div class="icons-contsSngle">		
							<?php 
								$args = array( 'post_type' => 'product', 'posts_per_page' => 15, 'product_cat' => 'empresarial', 'orderby' => 'rand', "limit" => 6 );
								$loop = new WP_Query( $args );
								$aux=1;
								while ( $loop->have_posts() ) : $loop->the_post(); global $product; 
								if( IDCURRENT !=  $loop->post->ID){
							?>		
								<div>
									<div class="cards-fou tiposAventuras carouselsingle">
										<img class=""  src="<?php echo the_field('foto_vertical'); ?>" alt="" srcset="">
										<div class="contName"><h3><?php echo the_title(); ?></h3></div>
										<a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btnReservar">Ver más</a>
									</div><!-- end.cards-fou -->
								</div>
								
							<?php
								}
								endwhile;
							?>
						</div>
					</div><!-- end.icons-conts -->
					<a href="#" class="btnSlideProd bLeftP"  id="prevslideSingle"></a>
					<a href="#" class="btnSlideProd nRightP" id="nextslideSingle"></a>
				</div><!-- end.slideHome -->
			</div><!-- end.col-* -->
		</div><!-- end.row -->
		<br>
	</div>
<<<<<<< HEAD

	<section class="formSingle">
		<div class="container">
			<div class="row">
				<div class="col-12 div col-md-6">
					<figure class="formSingle formSingle__img">
						<img src="<?php echo get_template_directory_uri(''); ?>/assets/img/img_product.jpg" alt="">
					</figure>
				</div>
				<div class="col-12 div col-md-6">
					<div class="formSingleCt">
						<h2 class="formSingle formSingle__title">¿Esta aventura es ideal para tu empresa?</h2>
						<p class="formSingle formSingle__desc">¡Escríbenos y pronto nos pondremos en contacto contigo!</p>
						<form action="" method="POST">
							<!-- Campo para Nombre Completo -->
							<div class="mb-3 sty-form">
								<input type="text" class="form-control required" id="name" placeholder="Nombre Completo*:">
							</div>

							<!-- Campo para Correo Electrónico -->
							<div class="mb-3 sty-form">
								<input type="email" class="form-control required" id="email" placeholder="Correo*:">
							</div>

							<!-- Campo para número -->
							<div class="mb-3 sty-form">
								<input type="tel" class="form-control required" id="numero" placeholder="Número de challengers*:">
							</div>

							<div class="mb-3 sty-form">
								<select class="form-control custom-select" name="" id="">
									<option value="">Selecciona un destino *</option>
									<option value="">Destino 1</option>
									<option value="">Destino 2</option>
									<option value="">Destino 3</option>
								</select>
							</div>

							<!-- Campo para Fecha -->
							<div class="mb-3 sty-form d-flex justiy-content-start">
								<div class="row">
									<div class="col-sm-10 d-flex justify-content-start">
										<span class="datecustomField">Selecciona una fecha*:</span>
									</div >
									<div class="row">
										<div class="col-12">
											<div class="contentInputsCustom">
												<div class="inputDateForm">
													<input type="tel" class="form-control required mb-1" id="mes" />
													<label id="mes" class="datecustomField">DD</label>
												</div>
												<div class="inputDateForm">
													<input type="tel" class="form-control required mb-1" id="dia"/>
													<label id="dia" class="datecustomField">MM</label>
												</div>
												<div class="inputDateForm">	
													<input type="tel" class="form-control required ultimo mb-1" id="anio"/>
													<label id="anio" class="datecustomField">YYYY</label>
												</div>
											</div><!-- end.contentInputsCustom --> 
										</div>
									</div>
								</div>
							</div>
							<input type="submit" class="btn-env btnSubmit mt-4" value="Enviar">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
=======
 
>>>>>>> 4ae6ba6c9bd543fc97981b061b54f67e724a4651

	



	
	<?php wp_reset_query(); ?>
