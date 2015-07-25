<?php
/**
 * Template Name: knowledge
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
		
		<?php /* if ( has_post_thumbnail() ) : ?>
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
				
		<?php endif; */?>
		<?php the_content(); ?>
	<p>&nbsp;</p>
	<?php endwhile; // end of the loop. 
	 ?>
     
     
    
     
  


<!--<h2>Knowledge Center 2015</h2>
  <div class="cont_right_box big_width">  -->
 
   
    <?php
      $terms = get_terms( 'category', array( 'parent' => 21, 'orderby'=>'term_id', 'order'=>'ASC' ) );
		$count = 1; 
		
			foreach($terms as $term) {
	        
				if($count == 3) {
					$class = 'ezcol-last';
					$count = 1;
				} else 	{
					$class = '';
					$count++;
				}
				?> 
				
	         <div class="ezcol ezcol-one-third minhight <?=$class;?>">
		         <article class="entry-knowledge">		         
			            
						<?php
			            $term->term_id;
						
							if(qtrans_getLanguage()=='es') {
								//Get Image for Spanish Version
								echo '<a href="'.get_category_link($term->term_id).'" ><img src="'.get_field('image_for_spanish_version','category_'.$term->term_id).'" alt="'.$term->name.'" /></a>';
							}else{
								//Get Image for English Version
				            if (function_exists('z_taxonomy_image_url')) {
									echo '<a href="'.get_category_link($term->term_id).'" ><img src="'.z_taxonomy_image_url($term->term_id).'" alt="'.$term->name.'" /></a>'; 
								}									
							}
							
				         $allPost = new WP_Query(array('cat'=>$term->term_id ,'post_type'=>'post', 'orderby'=>'date', 'order'=>'DESC','posts_per_page'=>4));
							$i == 0;
							$totalpost = $allPost->post_count; 
							
							if($allPost->have_posts()) {  ?>
							

					            <?php while ( $allPost->have_posts() ) : $allPost->the_post();?>
										<?php if($i == 0) :?>   
											<p>&nbsp;</p>
											<header class="entry-header">
												<h4 class="entry-title"><a href="<?php  echo get_post_permalink(); ?>" ><?php the_title(); ?></a></h4>
											</header>
											
											<?php /*<p><?php the_excerpt(); ?></p>*/ ?>
											<div class="entry-excerpt">
												<p><?php echo get_custom_excerpt(get_the_content(),150); ?></p>
											</div>
										<?php else : ?>
											<p><strong><a href="<?php  echo get_post_permalink(); ?>" ><?php the_title(); ?></a></strong></p><br>
										<?php endif; ?>
					            
									<?php
										$i++;
										
										if($i == $totalpost) {
											$i = 0;
										} ?>
								
					            <?php endwhile; ?>
				            
							<?php } ?>
	            
				   </article>
				   
	         </div><!--ezcol-->
	         
	      <?php 
		   } //end foreach ?>
        
        
		<?php
			//wp_reser_query();
			// wp_reset_postdata();		
		?>
     
   </div>
</div>


	
<?php get_footer(); ?>