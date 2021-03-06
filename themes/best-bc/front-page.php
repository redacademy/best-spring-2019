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
      <div class="fp-yellow-bike">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bike-weekcutout2.png" alt="bike" /></div>
      <div class="fp-bike-valet">
        <h3>The Bicycle Valet</h3>
        <p>Provided safe storage to <span><?php echo CFS()->get('bike_counter'); ?></span> bikes since 2002</p>
      </div>
      <!--end of bike-valet-->
    </div>
    <!--bike container-->

    <div class="fp-linebreak-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hp-dashed-curvy.png" alt="dashed-line" /></div>

    <div class="bus-container">
      <div class="fp-park-bus">
        <h3>Park Bus</h3>
        <p>is your ride to the great outdoors, connecting the city to campgrounds, canoe access points, lodges and hiking trails.</p>
      </div>
      <!--park bus-->

      <div class="fp-bus-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/parkbus-cut-out.png" alt="bus" /></div>
    </div>
    <!--bus container-->

    <div class="fp-bus-linebreak">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Homepage Line 1.png" alt="bus" />
      </div>
    <!--end of transportation choices-->

    <!--other programs-->
    <div class="title-other-program">
      <h3>Other Programs<h3>
    </div>
    <div class="program-wrapper">
      <div class="program-block">
        <div class="program-block-item">
          <a href="https://starcanada.ca/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/star-logo.png" alt="star program logo" /></a></div>
        <div class="program-block-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Living-Streets-logo.png" alt="living-street program logo" /></div>
      </div>
      <div class="program-second-block">
        <div class="program-block-item">
        <a href="https://www.parkpassproject.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Parkpass-logo.png" alt="parkpass program logo"/></a></div>
        <div class="program-block-item">
         <a href="https://commuterchallengebc.ca/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/commuter-logo.png" alt="commuter-challenge program logo" /></a></div>
      </div>
    </div>
    <!--program wrapper-->
    
      <p class="learn-more">
        <a href="<?php echo get_post_type_archive_link('program'); ?>" class="learn-button">Learn More</a></p>
    
    <!--learn more button ends-->
    <!-- News -->
    <?php $args = array('post_type' => 'post', 'posts_per_page' => 2);
    $news_posts = get_posts($args); ?>
    <section class="fp-news-background">
      <div class="fp-news-background-letter"></div>
      <h2>News</h2>
      <p class="news-text">Stay up to date with all our events and monthly updates!</p>
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
                <h3><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></h3>
              </div>

              <div class="fp-news-post">
                <?php the_excerpt(); ?>
              </div>

              <a class="fp-news-btn" href="<?php echo get_the_permalink(); ?>">Read More ></a>
            </div>
          </div><!-- End of Wrapper -->
        <?php endforeach;
      wp_reset_postdata(); ?>
      </div><!-- End of fp-news -->
      <button class="fp-news-signup"><a href="<?php echo get_permalink(); ?>/contact-us">Sign up for our newsletter</a></button>
      <button class="fp-news-signup-mobile"><a href="">Newsletter signup</a></button>
      <a class="fp-news-archives" href="<?php echo get_the_permalink(); ?>/newsletter">Read our news archive</a>
    </section><!-- End of News -->

    <div class="fp-involved-title">
      <h2>Get involved</h2>
      <div class="fp-news-background-hand"></div>
    </div>

    <!-- START OF GET INVOLVED FP CONTAINER -->

    <div class="involved-container">

      <div class="donate">
        <a href="<?php echo home_url('donate'); ?>">
          <p class="involved-header">Donate<br>
        </a>
        <span class="involved-subtext">Help keep us going!</span>
      </div>

      <div class="membership">
        <a href="<?php echo home_url('get-involved#membership') ?>">
          <p class="involved-header">Membership<br>
        </a>
        <span class="involved-subtext">Help keep us going!</span></p>
      </div>

      <div class="sponsor">
        <a href="<?php echo home_url('get-involved#sponsorship') ?>">
          <p class="involved-header">Sponsor<br>
        </a>
        <span class="involved-subtext">Help keep us going!</span></p>
      </div>

      <div class="volunteer"><a href="<?php echo home_url('get-involved#volunteer') ?>">
          <p class="involved-header">Volunteer<br>
        </a>
        <span class="involved-subtext">Help keep us going!</span></p>
      </div>

    </div>

    <!-- END OF GET INVOLVED FP CONTAINER -->

    <div class="fp-line-break"></div>
    <!-- Flickity -->
    <h2 class="fp-carousel-title">Thank you to our sponsors</h2>
    <div class="main-carousel">
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/city-logo.png" alt="city-logo" /></div>
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icbc-logo.png" alt="icbc-logo" /></div>
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/coastal-logo.png" alt="coastal-logo" /></div>
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vancity-logo.png" alt="vancity-logo" /></div>
      <div class="carousel-cell"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/century-group-logo.png" alt="century-group-logo" /></div>

    </div><!-- End of Flickity -->
    <!-- staff members -->


  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>