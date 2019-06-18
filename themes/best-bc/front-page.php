<?php
/*
 * @package Best_Theme
 * Template Name: Front-page
 */
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('template-parts/content', 'page'); ?>

    <?php endwhile; ?>



<div class="bike-container">
      <div class="fp-yellow-bike"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bike-weekcutout2.png" alt="bike"/></div>
      <div class="fp-bike-valet">
        <h3>The Bicycle Valet</h3>
        <p>Provided safe storage to 208,603 bikes since 2002</p>
      </div> <!--end of bike-valet-->
</div> <!--bike container-->
      <div class="fp-linebreak-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hp-dashed-curvy.png" alt="dashed-line"/></div>



      <div class="bus-container">
<div class="fp-park-bus">
        <h3>Park Bus</h3>
        <p>is your ride to the great outdoors, connecting the city to campgrounds, canoe access points, lodges and hiking trails.</p>
      </div> <!--park bus-->
    
    <div class="fp-bus-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/parkbus-cut-out.png" alt="bus"/></div>
      
</div><!--bus container-->




      
      <!--end of transportation choices-->
    <!-- News -->
    <?php $args = array('post_type' => 'post', 'posts_per_page' => 2);
    $news_posts = get_posts($args); ?>
    <section class="fp-news-background">
      <div class="fp-news-background-2">
        <h2>News</h2>
        <div class="fp-news">
          <?php foreach ($news_posts as $post) : setup_postdata($post); ?>
            <div class="fp-news-wrapper">

              <!-- Thumbnail -->
              <?php if (has_post_thumbnail()) { ?>
                <div class="fp-news-thumbnail">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              <?php } ?>

              <!-- Title & Post-->
              <div class="fp-news-info">
                <div class="fp-news-title">
                  <h3><?php the_title(); ?></h3>
                </div>

                <div class="fp-news-post">
                  <?php echo get_the_content(); ?>
                </div>

                <a class="fp-news-btn" href="<?php echo get_the_permalink(); ?>">Read More ></a>
              </div>
            </div><!-- End of Wrapper -->
          <?php endforeach;
        wp_reset_postdata(); ?>
        </div>
      </div>
    </section><!-- End of News -->

    <div class="involved-container">
      <div class="donate"><span class="involved-header">Donate</span></div>
      <div class="membership"><span class="involved-header">Membership</span></div>
      <div class="sponsor"><span class="involved-header">Sponsor</span></div>
      <div class="volunteer"><span class="involved-header">Volunteer</span></div>
    </div>
    <!--involved container-->

    <!-- Flickity -->
    <div class="main-carousel">
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/city-logo.png" alt="city-logo" /></div>
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icbc-logo.png" alt="icbc-logo" /></div>
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/coastal-logo.png" alt="coastal-logo" /></div>
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vancity-logo.png" alt="vancity-logo" /></div>
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/century-logo-sm.png" alt="century-logo" /></div>
    </div><!-- End of Flickity -->
    <!-- staff members -->


  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>