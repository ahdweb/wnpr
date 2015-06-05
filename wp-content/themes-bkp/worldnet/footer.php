<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div>
	<div class="clear"></div>
</div>
	<!-- #main .wrapper -->
	<div class="footer_main">
		<div class="container">
     		<div class="footer_in">
			  
			  <?php DISPLAY_ACURAX_ICONS(); ?>
			  <?php $menu = wp_nav_menu( array( 'theme_location' => 'primary' , 'container' => 'none', 'after' => '<span> | </span>', 'depth' => -1, 'items_wrap' => '<ul class="footer_link">%3$s</ul>', 'menu_class' => '' ) );
			  ?>
			   <p>&copy; All Rights Reserved WorldNet Telecommunications Inc. WorldNet Telecommunications, WorldNet Telecommunications logo and other<br /> trademarks included in this page are owned by WorldNet Telecommunications Inc. and its affiliates. </p>
			   <div class="footer_logo">
				   <?php $menu = wp_nav_menu( array( 'theme_location' => 'primary' , 'menu' => 'Footer Bottom Menu' , 'container' => 'none', 'after' => '<span> | </span>', 'depth' => -1, 'items_wrap' => '<ul class="footer_link">%3$s</ul>', 'menu_class' => '' ) );
			  ?>
			  		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer_logo_1"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" /></a>
			   </div>
			   
			   <div class="clear"></div>
			 </div>
		</div>
	</div>
<!-- #page -->
</div>
<?php wp_footer(); ?>
</body>
</html>