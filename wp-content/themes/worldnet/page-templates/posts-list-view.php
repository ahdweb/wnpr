<?php
/**
 * Template Name: Posts List View
 *
 */

get_header(); ?>
	
	<header class="page-header">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</header><!-- /.page-header -->

	<?php while ( have_posts() ) : the_post(); ?>
	
	<section class="page-content-section">
		<div class="page-content">
			<?php the_content(); ?>
		</div>

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
					<span class="entry-meta-date"><?php the_date(); ?></span>
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
   	</section>
   	<?php endwhile; // end of the loop.
	?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>