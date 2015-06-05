<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
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
	<div class="cont_right_box big_width">
		
		<?php if ( has_post_thumbnail() ) : ?>
				<div class="clear"></div>
				<div style="float: right; margin-top:79px; position:relative;">
					<div>
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>" class="fr">
					</div>
					<div class="clear"></div>
					<div>
						<a href="#" class="req_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/but-ri.png"></a>
					</div>
				</div>
				
		<?php endif; ?>
		<?php the_content(); ?>
	</div>
	<?php endwhile; // end of the loop.  ?>
	
<?php get_footer(); ?>