<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-blocks container"> 
				<div class="footer-block-item">
					<div class="best-footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/vector-icons/best-logo/Best-v1-black.svg" alt="footer best logo">
					</div> <!--footer logo ending-->
				</div> <!--block item ending-->	
				<div class="footer-block-item">
					<div class="social-media">
						<h3 class="follow-text">Follow us</h3>
						<div>
						<span><i class="fab fa-facebook"></i></span>
						<span><i class="fab fa-instagram"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
						</div>

						
					</div> <!--social media ending-->
				</div> <!-- footer block item second ending-->
			</div> <!--footer blocks container ending-->

			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>

				<div class="site-info">
					
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
