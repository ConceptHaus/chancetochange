<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Change_to_challenge
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<?php
if(is_archive()){ 
	el contenido del archivo o categoria 
}
else { ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				changetochallenge_posted_on();
				changetochallenge_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php changetochallenge_post_thumbnail(); ?>


	<footer class="entry-footer">
		<?php changetochallenge_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php
}
?>




</article><!-- #post-<?php the_ID(); ?> -->

