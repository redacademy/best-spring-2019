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
            <div class="main-carousel">
  <div class="carousel-cell">
  Hey How are you?
  <img src="<?php echo get_template_directory_uri(); ?>assets/Images/modo-logo.png" alt="flickity"/>
  </div>
  <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>assets/Images/modo-logo.png" alt="flickity"/>
  </div>
  <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>assets/Images/modo-logo.png" alt="flickity"/>
  </div>
  
</div>
        <?php endwhile;
    ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>