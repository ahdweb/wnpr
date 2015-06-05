<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<div class="cont_right_box big_width">
		
		<?php if ( has_post_thumbnail() ) : ?>
				<div class="clear"></div>
				<div style="float: right; margin-top:0px; margin-bottom:30px; margin-left:30px; position:relative;">
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