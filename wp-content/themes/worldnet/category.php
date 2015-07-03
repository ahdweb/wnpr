<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<!--<section id="primary" class="site-content">
		<div id="content" role="main">-->

		<?php if ( have_posts() ) : ?>
			
				<h2 class="archive-title"><?php printf( __( '%s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h2>
				<div class="cont_right_box big_width">
                <div style="float:right; margin-top:0; margin-bottom:0; margin-left:30px; margin-right:0; position:relative;">
                <div class="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- .first -->
           </div>     
			<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			
			<ul class="entries-list">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
				<li class="entry">
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
					<div class="entry-summary">
						<p><?php the_excerpt_max_charlength(150); ?></p>
					</div>
				</li>
			<?php endwhile; ?>
			</ul>

			<?php twentytwelve_content_nav( 'nav-below' );
			?>
</div>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
            
		<?php endif; ?>

		<!--</div><!-- #content
	</section><!-- #primary -->

<?php  ?>
<?php get_footer(); ?>