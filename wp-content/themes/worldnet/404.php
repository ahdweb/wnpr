<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h2 class="page-title"><?php _e( '404 - Not Found', 'worldnet' ); ?></h2>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'worldnet' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>