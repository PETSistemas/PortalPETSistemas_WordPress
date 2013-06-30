	<!--footer-->
		
		<div id="footer-container">

	<!--footer container--><div class="row">
		
		<div class="twelve columns" id="footer-widget">
			
			<?php
			get_sidebar( 'footer' );
			?>
			
			</div><!--footer widget end-->
			
		</div><!-- footer container-->
					
	</div>
	
			<div id="footer-info">

				<!--footer container--><div class="row">
				
		<div class="twelve columns">					
			
			<div id="copyright"><?php _e( 'Copyright', 'discover' ); ?> <?php echo date( 'Y' ); ?> <?php echo esc_html(of_get_option('footer_cr')); ?></div>
			
			<div class="scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'discover' ); ?>"><?php _e( '&uarr;', 'discover' ); ?></a></div>
					
				</div>	
			</div>		
			</div><!--footer info end-->
	
	<?php wp_footer(); ?>

</body>

</html>