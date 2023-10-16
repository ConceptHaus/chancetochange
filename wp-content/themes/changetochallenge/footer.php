<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Change_to_challenge
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			
<div class="container-fluid footer_custom d-flex justify-content-between"  >
	<div class="container">
        <div class="row">
			<div class="col-sm">
				<ul class="list-footer">
				<li>Escribenos en:</li>
				<li><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/icon_whatsapp.png"  /> 7358 6711</li>
				<li><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/icon_email.png" /> info@chancetochallenge.com</li>
				</ul>
			</div>
			<div class="col-sm">
				<img src="/wp-content/uploads/assets/logo_white_footer.png" />
			</div>
			<div class="col-sm">
				<ul class="list-footer">
				<li>Siguenos en:</li>
				<li>
					<ul class="list-footer list-social d-flex">
						<li><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/icon_instagram.png"  /></li>
						<li><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/icon_facebook.png"  /></li>
						<li><img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/icon_linkedin.png"  /></li>
					</ul>
				</li>
				<li><a >Aviso de Privacidad</a></li>
				</ul>
			</div>
        </div>
      </div>
</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  $('body').show();
  $('.version').text(NProgress.version);
  NProgress.start();
  setTimeout(function() {
    NProgress.done(); $('.fadeX').addClass('out');
  }, 1000);
  // $("#b-0").click(function() { NProgress.start(); });
  // $("#b-40").click(function() { NProgress.set(0.4); });
  // $("#b-inc").click(function() { NProgress.inc(); });
  // $("#b-100").click(function() { NProgress.done(); });
</script>

</body>
</html>
