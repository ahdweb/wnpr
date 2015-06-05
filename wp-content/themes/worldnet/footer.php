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
			  
			  <?php //DISPLAY_ACURAX_ICONS(); ?>
			  <?php $menu = wp_nav_menu( array( 'theme_location' => 'primary' , 'menu' => 'Footer Top Menu' , 'container' => 'none', 'after' => '<span> | </span>', 'depth' => -1, 'items_wrap' => '<ul class="footer_link">%3$s</ul>', 'menu_class' => '' ) );
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
<script type="text/javascript">
  /* <![CDATA[ */
  document.write (
    '<img src="http://marketing.worldnetpr.com/acton/bn/12148/visitor.gif?ts='+
    new Date().getTime()+
    '&ref='+escape(document.referrer) + '">'
  );
  var aoAccountId = '12148';
  var aoCookieMode = 'STANDARD';
  var aoCookieDomain = 'worldnetpr.com';
  var aoServerContext = 'http://marketing.worldnetpr.com/acton';
  /* ]]> */
</script>
</body>
<!--  Visitor Monitor HTML v4.00 (Website=- None -,Ruleset=My Invite Ruleset,Floating Chat=- None - -->
<script type="text/javascript">
  var _bcvma = _bcvma || [];
  _bcvma.push(["setAccountID", "652438070799757815"]);
  _bcvma.push(["setParameter", "InvitationDefID", "646473185347978898"]);
  _bcvma.push(["pageViewed"]);
  (function(){
    var vms = document.createElement("script"); vms.type = "text/javascript"; vms.async = true;
    vms.src = ('https:'==document.location.protocol?'https://':'http://') + "vmss.boldchat.com/aid/652438070799757815/bc.vms4/vms.js";
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(vms, s);
  })();
</script>
<noscript>
<a href="http://www.boldchat.com" title="Visitor Monitoring" target="_blank"><img alt="Visitor Monitoring" src="https://vms.boldchat.com/aid/652438070799757815/bc.vmi?" border="0" width="1" height="1" /></a>
</noscript>
<div style="display: none; border: 1px solid black; background: white; font-family: Arial; font-size: 8pt; color: black;"><a href="http://www.boldchat.com" style="text-decoration: none; color: black;">Live chat</a> by BoldChat</div>
<!-- / Visitor Monitor HTML v4.00 -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47095353-1', 'worldnetpr.com');
  ga('send', 'pageview');

</script>
</html>
