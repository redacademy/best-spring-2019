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
<<<<<<< HEAD

  <img src="<?php echo get_template_directory_uri(); ?>/assets/Images/city-logo.png" alt="city-logo"/>
  </div>
  <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/Images/icbc-logo.png" alt="icbc-logo"/>
=======
  Hey How are you?
  <img src="<?php echo get_template_directory_uri(); ?>assets/images/modo-logo.png" alt="flickity"/>
  </div>
  <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>assets/images/modo-logo.png" alt="flickity"/>
  </div>
  <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>assets/images/modo-logo.png" alt="flickity"/>
>>>>>>> 7276ad850f14e80b379eab3c282437a201ed4d8f
  </div>
  <!-- <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>assets/Images/modo-logo.png" alt="flickity"/>
  </div> -->
  
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