<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-content">

		<div class="best-footer-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/vector-icons/best-logo/Best-v1-black.svg" alt="footer-best-logo">
			<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu')); ?>
			<!--end of footer logo-->
		</div>
		<!--block item ending-->

		<div class="social-media">
			<p class="follow-text">Follow us</p>
			<div class="social-media-icons">
				<a href="https://www.facebook.com/pages/Better-Environmentally-Sound-Transportation-BEST/173929964216"><span><i class="fab fa-facebook"></i></span></a>
				<a href="https://www.instagram.com/thebicyclevalet/"><span><i class="fab fa-instagram"></i></span></a>
				<a href="https://twitter.com/BESTmobility"><span><i class="fab fa-twitter-square"></i></span></a>
			</div>
		</div>

	</div>
	<div class="translink">
		<h2 class="major-sponsor-text">Our Major Sponsor:</h2>
		<img class="translink-logo-grey" src="<?php echo get_template_directory_uri();
												?>/assets/images/translink-logo-grey.png" alt="translink-logo">

	</div>





	<!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->
<div class="charity-number">
<p> Canadian Charitable Number: 140171216RR0001</p>
<p class="copyright">Copyright 2019 BEST</p>
</div>
</body>
<?php get_footer(); ?>
</html>