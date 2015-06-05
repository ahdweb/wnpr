<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div class="clear"></div>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry-page-image">
				<?php the_post_thumbnail(); ?>
			</div><!-- .entry-page-image -->
		<?php endif; ?>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop.  ?>
		<div class="con_bg">
            <span>Stay informed of our latest news...</span>
			<ul>
			<?php $catPost = get_posts((array('category_name' => 'latest-news','numberposts' => 2))); //change this
			   	  foreach ($catPost as $post) : setup_postdata($post); ?>
				  <li><a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b><br /><?php the_content(); ?></a></li>
			<?php endforeach;?>
			</ul>
		</div>
		<div class="con_bg">
			<?php
			$static_post_id = 84;
			$page_data = get_page( $static_post_id );
			$title = $page_data->post_title;
			$content = $page_data->post_content;
			?>
            <span><?php echo $title; ?></span>
            <p><?php echo $content; ?></p>
        </div>
		<div class="con_bg">
            <span>Stay informed about our up coming events...</span>
			<ul>
			<?php $catPost = get_posts((array('category_name' => 'event','numberposts' => 3))); //change this
			   	  foreach ($catPost as $post) : setup_postdata($post); ?>
				  <li class="green_bul"><a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b><br /><?php the_content(); ?></a></li>
			<?php endforeach;?>
			</ul>
		</div>
<?php //get_sidebar( 'front' ); ?>
<?php get_footer(); ?>