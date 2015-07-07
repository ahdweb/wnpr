<?php

//=============================
// Latest Posts
//=============================
function add_latest_posts( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => __('Latest Posts','twentytwelve'),
		'number' => 1,
		'show_date' => false,
		'container_class' => '',
		'class' => '',
	), $atts ) );
	
	global $post;
	$orig_post = $post;

	$args = array(
		'post_status' => 'publish',
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => $number
	);
	
	$the_query = new WP_Query($args);
	
	$output = '<ul class="lastest-posts">';
	
	while ($the_query->have_posts()) : 
		$the_query->the_post();
		
		$_date="";
		if($show_date){
			$_date = '<span class="date">'.get_the_date('F d, Y').'</span>';
		}
		
		$_excerpt = get_custom_excerpt(get_the_content(),105);
		
		$output .= '<li>'.$_date.'
							<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>
							<p class="entry-excerpt">'.$_excerpt.'</p>
						</li>';
		
	endwhile;
	
	$output .= '</ul>';
	
	$post = $orig_post; 
	wp_reset_query(); 

	return $output;
}
add_shortcode('latest_posts', 'add_latest_posts'); 





//=============================
// Product Portfolio
//=============================
function add_product_portfolio( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'title' => __('Product Portfolio','twentytwelve'),
		'class' => '',
	), $atts ) );
	
	ob_start(); 
?>

	<table class="responsive">
			
		<tr>
			<th class="th_product"><img class="logo" alt="<?php echo $title ?>" src="<?php echo get_stylesheet_directory_uri().'/images/product_portfolio_worldnet.jpg' ?>"></th>
			<th class="th_basic">Basic <span class="th_description">Best for startup and small businesses that need basic Telephony, Internet and Cloud services.</span></th>
			<th class="th_advanced">Advanced <span class="th_description">Best for companies that want to leverage technology to drive growth and expansion.</span></th>
			<th class="th_premium">Premium <span class="th_description">Best for high capacity users who require the technology to accelerate growth and gain competitive advantage.</span></th>
		</tr>
		<tr>
			<td>
				<div class="kind"><span class="kind_title">VOICE</span></br>A two-way telephone transmission allowing conversations among two or more parties.</div>
				<table class="info">
					<tr>
						<td>&#8194;Business Telephone Line:</td>
					</tr>
					<tr>
						<td>&#8195;Voice Line/ Usage on Demand</td>
					</tr>
					<tr>
						<td>&#8195;Voice Line/ Unlimited Usage</td>
					</tr>
					<tr>
						<td>&#8195;Minute Bundles</td>
					</tr>
					<tr>
						<td>&#8195;Call Features:</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Voice Mail</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Basic Call Features</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;411 Restrictions</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Remote Call Forward</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Line Restrictions</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Simultaneos Ring</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Accounting Codes</td>
					</tr>
					<tr>
						<td>&#8194;Unified Messaging</td>
					</tr>
					<tr>
						<td>&#8194;Digital Telephone Services:</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Sip Trunk Line</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;ISDN PRI - Cooper</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;ISDN PRI - EFM</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;ISDN PRI - Fiber</td>
					</tr>
				</table>
			</td>
			<td>
				<table class="basic">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
				</table>
			<td>
				<table class="advanced">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
				</table>
			</td>
			<td>
				<table class="premium">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
				</table>						
			</td>
			<td>

			</td>
		</tr>
		<tr>
			<td>
				<div class="kind"><span class="kind_title">DATA</span></br>A two way machine to machine transmission used to exchage information.</div>
				<table class="info">
					<tr>
						<td>&#8194;Dedicated Data Transport</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;EFM (Ethernet over copper)</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;T-1 (1.544 mgbts)</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Fiber</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;MPLS</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Dedicated Wireless</td>
					</tr>
					<tr>
						<td>&#8194;Data on Demand (Ethernet through fiber)</td>
					</tr>
				</table>

			</td>
			<td>
				<table class="basic">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
				</table>							
			</td>
			<td>
				<table class="advanced">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
				</table>							
			</td>
			<td>
				<table class="premium">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
				</table>							
			</td>
		</tr>
		<tr>
			<td>
				<div class="kind"><span class="kind_title">INTERNET</span></br>A type of data connection used to access the Word Wide Web.</div>
				<table class="info">
					<tr>
						<td>&#8194;High Speed Internet - DSL</td>
					</tr>
					<tr>
						<td>&#8194;Wireless USB (Mobility)</td>
					</tr>
					<tr>
						<td>&#8194;Dedicated Internet Services:</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;EFM (Ethernet over copper)</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;T-1</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Dedicated Wireless</td>
					</tr>
					<tr>
						<td>&#8194;High Capacity Internet Service through fiber</td>
					</tr>
				</table>							
			</td>
			<td>
				<table class="basic">
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
				</table>							
			</td>
			<td>
				<table class="advanced">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
				</table>							
			</td>
			<td>
				<table class="premium">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
				</table>							
			</td>
		</tr>
		<tr>
			<td>
				<div class="kind"><span class="kind_title">CLOUD</span></br>A delivery of hosted sevices over the Internet.</div>
				<table class="info">
					<tr>
						<td>&#8194;Hosted Telephone System Solutions</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;eCentrex</td>
					</tr>
					<tr>
						<td>&#8195;&#8195;Hosted IP PBX Solutions</td>
					</tr>
					<tr>
						<td>&#8194;Disaster Recovery</td>
					</tr>
					<tr>
						<td>&#8194;Web Hosting</td>
					</tr>
					<tr>
						<td>&#8194;Exchange Services</td>
					</tr>
				</table>							
			</td>
			<td>
				<table class="basic">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
				</table>
			</td>
			<td>
				<table class="advanced">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
				</table>
			</td>
			<td>
				<table class="premium">
					<tr><td>&nbsp;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
					<tr><td>&#9679;</td></tr>
				</table>
			</td>
		</tr>
				
</table>
<div class="foot_table"></div>

    
<?php
	$output = ob_get_clean();
	return $output;
}
add_shortcode('product_portfolio', 'add_product_portfolio'); 