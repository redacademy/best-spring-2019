<?php
/**
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile;
    ?>
		<?php the_excerpt(); ?>
		<div class="main-carousel">
  <div class="carousel-cell">
  <img src="../assets/Images/star-logo.png"/></div>
  <div class="carousel-cell">...</div>
  <div class="carousel-cell">...</div>
  ...
</div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>