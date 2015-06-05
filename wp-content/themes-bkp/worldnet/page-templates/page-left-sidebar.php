<?php
/**
 * Template Name: Left Sidebar Page Template
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
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="sidebar">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .first -->
	<?php endif; ?>
	
	<div class="cont_right_box">
		<?php the_content(); ?>
	</div>
	<?php endwhile; // end of the loop.  ?>
	
<?php get_footer(); ?>