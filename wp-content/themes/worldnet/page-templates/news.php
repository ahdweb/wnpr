<?php
/**
 * Template Name: News and Events
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

	<?php
	while ( have_posts() ) : the_post(); ?>
	<h2><?php echo get_the_title(); ?></h2>
	<div class="cont_right_box big_width">
		<?php the_content(); ?>

		<ul class="entries-list">
		<?php
		$args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'date' );
		$postslist = get_posts( $args );
		foreach ( $postslist as $post ) :
		  setup_postdata( $post ); ?> 
			<li class="entry">
				<?php if ( is_single() ) : ?>
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php else : ?>
				<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				<?php endif; // is_single() ?>
				<div class="entry-meta">
					<?php the_date(); ?>
				</div>
				<div class="entry-summary">
					<p><?php the_excerpt_max_charlength(200); ?></p>
				</div>
			</li>
		<?php
		endforeach; 
		wp_reset_postdata();
		?>
		</ul>
	
	<?php endwhile; // end of the loop. 
	?>
   </div>
</div>
	
<?php get_footer(); ?>