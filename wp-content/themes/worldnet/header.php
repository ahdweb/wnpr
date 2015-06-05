<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
 <link rel="apple-touch-icon" href="ios/AppIcon.appiconset/Icon-60@2x.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="ios/AppIcon.appiconset/Icon-60@3x.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="ios/AppIcon.appiconset/Icon-76.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="ios/AppIcon.appiconset/Icon-76@2x.png" />
  <link rel="apple-touch-icon" sizes="58x58" href="ios/AppIcon.appiconset/Icon-Small@2x.png" />
</head>
<body <?php body_class(); ?>>
<div class="<?php if(is_front_page() ){ echo "main_wrap"; } else { echo "inner_wrap"; } ?>"> 
  <div class="container">
  	<div class="header">
		<div class="logo">
			<?php $header_image = get_template_directory_uri()."/images/worldnet-logo.png";
			if ( ! empty( $header_image ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<?php endif; ?>
		</div>
		
		<div class="header_right">
          
		
            <?php echo qtrans_generateLanguageSelectCode('text'); ?>
              <?php DISPLAY_ACURAX_ICONS(); ?>
      	</div>
		<!--Top right menu start-->
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Top Right Menu' , 'container' => 'div', 'container_class' => 'header_right', 'menu_class' => '' ) ); ?>
		<!--Top right menu end -->  
		
		<!--Main menu start-->
		<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'div', 'container_class' => 'menu_bg', 'menu_class' => ''  ) ); ?> <!--Main menu end -->
        <nav id="top-menu">
        <div id="navigation_bar" class="navigation">
            
                <?php
                //call the main menu
                $menuId = 'navigation';
                $menuVars = array(
                    'menu_id'         => $menuId,
            //		'menu_class' => $menuClass, 
                    'echo'            => true,
                    'container'       => 'div', 
                    'container_class' => 'menu_bg',
            //		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    'container_id'    => '', 
                    'theme_location'  => 'primary'
                    );
                wp_nav_menu($menuVars);
                ?>
            
         </div>
    </nav>
	</div>	

		
	<div class="contant_main">