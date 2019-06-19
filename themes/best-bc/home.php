<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="news-content">
				<div class="news-banner">
					<h1>Newsletter</h1>
				</div>

				<p>Stay up to date with our monthly newsletters! You can also view our older newsletters by browsing the archive.</p>

				<div class="news-form">
					<form action="">
						<select name="month">
							<option value="1">Jan</option> 
							<option value="2">Feb</option> 
							<option value="3">Mar</option> 
							<option value="4">Apr</option> 
							<option value="5">May</option> 
							<option value="6">Jun</option> 
							<option value="7">Jul</option> 
							<option value="8">Aug</option> 
							<option value="9">Sep</option> 
							<option value="10">Oct</option> 
							<option value="11">Nov</option> 
							<option value="12">Dec</option>     
						</select>

						<select name="year">
							<option value="2018">2018</option>
							<option value="2019">2019</option>
						</select>
					
						<input type="submit">
					</form>
				</div>
			</section>

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>