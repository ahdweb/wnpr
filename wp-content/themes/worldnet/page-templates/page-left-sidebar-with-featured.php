<?php
/**
 * Template Name: Left Sidebar Page Template With Featured
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="sidebar">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .first -->
	<?php endif; ?>
	
	<div class="cont_right_box">
		<?php if ( has_post_thumbnail() ) : ?>
				<div class="clear"></div>
				<div style="float: right; margin-top:79px; position:relative;">
					<div>
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>" class="fr">
					</div>
					<div class="clear"></div>
				</div>
		<?php endif; ?>
		<?php the_content(); ?>
	</div>
	<?php endwhile; // end of the loop.  ?>
	
<?php get_footer(); ?>