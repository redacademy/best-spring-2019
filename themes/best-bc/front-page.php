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
      <div class="involved-container">
        <div class="donate-and-member-block">
            <div class="donate"></div>
            <div class="membership"></div>
        </div><!--donateandmeber-block-->
        <div class="sponsor-and-volunteer-block">
            <div class="sponsor"></div>
            <div calss="volunteer"></div>
        </div><!--sponsorandvolunteer-block-->
      </div> <!--involved container-->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>