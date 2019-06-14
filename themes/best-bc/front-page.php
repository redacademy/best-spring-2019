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
  <img src="<?php echo get_template_directory_uri(); ?>assets/images/modo-logo.png" alt="flickity"/>
  </div>
  <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>assets/images/modo-logo.png" alt="flickity"/>
  </div>
  <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>assets/images/modo-logo.png" alt="flickity"/>
  </div>
  
</div>
        <?php endwhile;
    ?>
      <div class="involved-container">
      
            <div class="donate"><span class="involved-header">Donate</span></div>         
            <div class="membership"><span class="involved-header">Membership</span></div>
            <div class="sponsor"><span class="involved-header">Sponsor</span></div>
            <div class="volunteer"><span class="involved-header">Volunteer</span></div>
       
      </div> <!--involved container-->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>