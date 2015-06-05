<?php

/**

 * The Template for displaying all single posts.

 *

 * @package WordPress

 * @subpackage Twenty_Twelve

 * @since Twenty Twelve 1.0

 */



get_header(); ?>



			<?php while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>

                <div class="cont_right_box big_width">

             
                               

                <div style="float:left;width:70%;">

				<?php the_content(); //get_template_part( 'content', get_post_format() ); ?>
			
</div>


				<?php /*?><nav class="nav-single">

					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>

					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>

					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>

				</nav><!-- .nav-single --><?php */?>



				<?php //comments_template( '', true ); ?>

   <div style="display: inline-block;float:right; margin-top:0; margin-bottom:0; margin-left:30px; margin-right:0; width:300px; position:relative;margin-bottom:50px;">
				<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-5' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>	
		
				</div>


</div>

			<?php endwhile; // end of the loop. ?>



	


<?php //get_sidebar(); ?>

<?php get_footer(); ?>