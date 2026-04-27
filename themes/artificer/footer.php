<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
	global $woo_options;

	$total = 4;
	if ( isset( $woo_options['woo_footer_sidebars'] ) && ( $woo_options['woo_footer_sidebars'] != '' ) ) {
		$total = $woo_options['woo_footer_sidebars'];
	}

	if ( ( woo_active_sidebar( 'footer-1' ) ||
		   woo_active_sidebar( 'footer-2' ) ||
		   woo_active_sidebar( 'footer-3' ) ||
		   woo_active_sidebar( 'footer-4' ) ) && $total > 0 ) {

?>
	
	<?php woo_footer_before(); ?>
		
	<section id="footer-widgets" class="col-full col-<?php echo $total; ?> fix">
		<div class="container">
	
			<?php $i = 0; while ( $i < $total ) { $i++; ?>
				<?php if ( woo_active_sidebar( 'footer-' . $i ) ) { ?>

			<div class="block footer-widget-<?php echo $i; ?>">
	        	<?php woo_sidebar( 'footer-' . $i ); ?>
			</div>

		        <?php } ?>
			<?php } // End WHILE Loop ?><div style="clear:both;"></div>
	        
	        <div id="copyright" class="col-left copy-color">

	<?php bloginfo(); ?> &copy; <?php //echo date( 'Y' ); ?>. <?php _e( ' Copyrights Reserved 2006 Any Impex.', 'woothemes' ); ?>

	</div>
	        <div id="credit" class="col-right copy-color"><?php _e( 'Website designed and maintained by', 'woothemes' ); ?> <a href="https://www.marketingmindz.com" target="_blank" style="color:#BBB3AA">Marketingmindz</a></div>
    	</div>

	</section><!-- /#footer-widgets  -->
    
<?php } // End IF Statement ?>

	<!-- /#footer  -->

</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php woo_foot(); ?>
</body>
</html>
<style></style>
