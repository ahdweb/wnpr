<?php
/**
 * Template Name: Right Sidebar With Featured Image
 *
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<h2 class="custom-heading"><?php the_title(); ?></h2>
	
	<div class="cont_right_box big_width custom-text">

		<?php if ( has_post_thumbnail() ) : ?>
				<div class="clear"></div>
				<div style="float:right; margin-top:0; margin-bottom:0; margin-left:30px; margin-right:0; position:relative;">
					<div>
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>" class="fr">
					</div>
					<div class="clear"></div>
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- .first -->
	<?php endif; ?>	
				</div>
				
		<?php endif; ?>
		<?php the_content(); ?>
	</div>
	<?php endwhile; // end of the loop.  ?>
	
<?php get_footer(); ?>