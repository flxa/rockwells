<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Page thumbnail and title.
		//twentyfourteen_post_thumbnail();
		if (has_post_thumbnail( $post->ID )) : 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<div id="custom-bg" style="">
			<style>
				#custom-bg {
					background-image: url('<?php echo $image[0]; ?>');
					background-size: cover;
					height: 200px;
					width: 100%;
					background-position: center center;
				}
			</style>
			</div><?php 
			the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
		else :
			the_title( '<header class="entry-header pad-top"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
		endif;
	?>

	<div class="entry-content">
		<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );

			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
