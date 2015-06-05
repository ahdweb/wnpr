<?php

$c_slider_direct_path =  get_bloginfo('wpurl')."/wp-content/plugins/webelephants-slider";

$c_slider_class = c_slider_get_dynamic_class();

?>

<script type="text/javascript">
	jQuery('#featured_slider div#slider').cycle({ 
		fx: '<?php $c_slider_effect = get_option('effect'); if(!empty($c_slider_effect)) {echo $c_slider_effect;} else {echo "scrollLeft";}?>',
		prev: '.feat_prev',
		next: '.feat_next',
		speed:  800, 
		timeout: <?php $c_slider_timeout = get_option('timeout'); if(!empty($c_slider_timeout)) {echo $c_slider_timeout;} else {echo 4000;}?>, 
		pager:  null
	});
</script>

<style>

#featured_slider {
float: left;
/*margin: 10px 0px;*/
position: relative;
/*background-color: #<?php //$c_slider_bg = get_option('feat_bg'); if(!empty($c_slider_bg)) {echo $c_slider_bg;} else {echo "FFF";}?>;
border: 1px solid #<?php //$c_slider_border = get_option('feat_border'); if(!empty($c_slider_border)) {echo $c_slider_border;} else {echo "CCC";}?>;
*/
width: <?php $c_slider_width = get_option('feat_width'); if(!empty($c_slider_width)) {echo $c_slider_width;} else {echo "860";}?>px;
}

#featured_slider ul, #featured_slider ul li {
list-style: none !important;
border: none !important;
float: left;
margin:0px;
/*margin-left:-19px;*/
width: <?php $c_slider_width = get_option('feat_width'); if(!empty($c_slider_width)) {echo $c_slider_width;} else {echo "860";}?>px;


height: <?php $c_slider_height = get_option('feat_height'); if(!empty($c_slider_height)) {echo $c_slider_height;} else {echo "210";}?>px;
}

#featured_slider .img_right {
float: left;
width: <?php $c_slider_img_width = get_option('img_width'); if(!empty($c_slider_img_width)) {echo $c_slider_img_width;} else {echo "320";}?>px;
height: <?php $c_slider_img_height = get_option('img_height'); if(!empty($c_slider_img_height)) {echo $c_slider_img_height;} else {echo "200";}?>px;
margin-left: 20px;
}
#featured_slider .banner_right {margin-left: 15px; height:278px; }
#featured_slider .banner_right img {
width: <?php $c_slider_img_width = get_option('img_width'); if(!empty($c_slider_img_width)) {echo $c_slider_img_width;} else {echo "320";}?>px;
height: <?php $c_slider_img_height = get_option('img_height'); if(!empty($c_slider_img_height)) {echo $c_slider_img_height;} else {echo "200";}?>px;
}

#featured_slider .content_left {
float: left;
color: #<?php $c_slider_text_color = get_option('text_color'); if(!empty($c_slider_text_color)) {echo $c_slider_text_color;} else {echo "333";}?>;
width: <?php $c_slider_text_width = get_option('text_width'); if(!empty($c_slider_text_width)) {echo $c_slider_text_width;} else {echo "450";}?>px;
}

#featured_slider .content_left p {
line-height: 22px !important;
color: #<?php $c_slider_text_color = get_option('text_color'); if(!empty($c_slider_text_color)) {echo $c_slider_text_color;} else {echo "333";}?>;
}

#featured_slider .content_left h2 {
font-size: 20px !important;
margin-bottom: 20px;
}

#featured_slider .feat_prev {
background: transparent url(<?php echo $c_slider_direct_path;?>/images/sprite.png) no-repeat;
background-position: 0px 0px;
width: 17px;
z-index: 10;
height: 16px;
position: absolute;
left: 20px;
cursor: pointer;
bottom: 30px;
float: left;
}

#featured_slider .feat_prev:hover {
background-position: 0px -16px;
}

#featured_slider .feat_next {
background: transparent url(<?php echo $c_slider_direct_path;?>/images/sprite.png) no-repeat;
background-position: -17px 0px;
width: 17px;
z-index: 10;
height: 16px;
position: absolute;
left: 40px;
bottom: 30px;
cursor: pointer;
}

#featured_slider .feat_next:hover {
background-position: -18px -16px;
}

.<?php echo $c_slider_class;?> {
font-size: 10px;
float: right;
clear: both;
position: relative;
top: -10px;
background-color: #<?php $c_slider_border = get_option('feat_border'); if(!empty($c_slider_border)) {echo $c_slider_border;} else {echo "CCC";}?>;
padding: 3px 3px;
line-height: 10px !important;
}

</style>

<div id="featured_slider" class="banner_main">
	

	<div id="slider" class="banner_bg">	

		<?php
		
		$c_slider_sort = get_option('sort'); if(empty($c_slider_sort)){$c_slider_sort = "post_date";}
		$c_slider_order = get_option('order'); if(empty($c_slider_order)){$c_slider_order = "DESC";}
		$c_slider_limit = get_option('limit'); if(empty($c_slider_limit)){$c_slider_limit = 350;}
		$c_slider_points = get_option('points'); if(empty($c_slider_points)){$c_slider_points = "...";}
		$c_slider_post_limit = get_option('limit_posts'); if(empty($c_slider_limit_posts)){$c_slider_limit_posts = "-1";}
                
		global $wpdb;
	
		global $post;
		
		$args = array( 'suppress_filters' => 0, 'post_type' => array('slider'), 'orderby' => $c_slider_sort, 'order' => $c_slider_order, 'numberposts'=> $c_slider_post_limit);
		
		$myposts = get_posts( $args );
		
		foreach( $myposts as $post ) :	setup_postdata($post);
			
			$c_slider_custom = get_post_custom($post->ID);
			//$c_slider_thumb = c_slider_get_thumb("feat_slider");
			$c_slider_thumb = c_slider_get_thumb("thumbanail");	
			$read_more = $c_slider_custom["feat_slider"][0];
			if($read_more == '') { $read_more = '#';}
		?>
		<div class="">
            <div class="banner_left"><?php /*?><h2 class="banner_title"><?php the_title();?></h2><?php */?>
			<p class="banner_txt"><?php //echo c_slider_cut_text(get_the_content(), $c_slider_limit, $c_slider_points);?></p>
            <?php the_content(); //echo $post->post_content; ?>
            <a href="<?php echo $read_more; ?>" class="learn_how">
				<?php 
                if(qtrans_getLanguage() == 'es'){ 
                    echo 'Más información'; 
                }else{
                    echo 'Learn How'; 
                }
                ?>
            </a>
            </div>
            <div class="banner_right"><a href="<?php echo $read_more; ?>"><img src="<?php echo $c_slider_thumb;?>" /></a></div>
            
		</div>
        
		<?php endforeach; ?>
	
	</div>
	
	<div class="feat_next"></div>
	<div class="feat_prev"></div>
	
</div>