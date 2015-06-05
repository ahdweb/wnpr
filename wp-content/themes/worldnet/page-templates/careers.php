<?php
/**
 * Template Name: Job Posting 
 *
 */
ini_set("soap.wsdl_cache_enabled", "0");

        $uri = $_SERVER['REQUEST_URI'];
        if(substr($uri,1,2)=='es'){
            $lang='SPA';
             $content= "<p>WorldNet atrae al mejor talento en la industria, por su compromiso con relaciones duraderas, innovación tecnológica y valores basados en la comunidad.</p><br/><h4>Plazas disponibles:</h4>";
          } else { $lang = 'ENG'; 
             $content= "<p>WorldNet attracts the best talent in the industry with its commitment to lasting relationships, technological innovation and community-based initiatives.</p><br/><h4>Current job openings</h4>";
          }
       
        if(isset($_GET['id'])){
            $id=$_GET['id']; 
            if(isset($_GET['lang'])){
                    $lang=$_GET['lang'];
            }
            $requestParams=array('id'=>$id,'lang'=>$lang);
            $client=new SoapClient('http://resume.worldnetpr.com/wsHR/wsRHPortalWService.asmx?WSDL');
            $response = $client->readPositionsDesc($requestParams);
            $positionDesc = $response->readPositionsDescResult;
            if($positionDesc == '0'){
                $response = $client->generatePositionsLinks($requestParams);
                $content .= "<ul>";
                $content .= $response->generatePositionsLinksResult;
                $content .= "</ul>";
            } else {
                $content = $positionDesc;
                $job_title= $client->readName($requestParams);
                $j_title = $job_title->readNameResult;
            }
            
        } else {
            $client=new SoapClient('http://resume.worldnetpr.com/wsHR/wsRHPortalWService.asmx?WSDL');
            $requestParams=array('lang'=>$lang);
            $response = $client->generatePositionsLinks($requestParams);
            $content .= "<ul>";
            $content .= $response->generatePositionsLinksResult;
            $content .= "</ul>";
        }

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<h2><?php if(isset($j_title)){ echo $j_title;}else{the_title();} ?></h2>
	<div class="cont_right_box big_width">
		
		<?php if ( has_post_thumbnail() ) : ?>
				<div class="clear"></div>
				<div style="float: right; margin-top:0px; margin-bottom:30px; margin-left:30px; position:relative;">
					<div>
						<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>" class="fr">
					</div>
					<div class="clear"></div>
					
				</div>
				
		<?php endif; ?>
		<?php 
        print $content."<br>";
        the_content(); 
        ?>
	</div>
	<?php endwhile; // end of the loop.  ?>
	
<?php get_footer(); ?>