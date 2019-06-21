<?php
/**
 * The template for displaying archive pages.
 * Template Name: Archive Program
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">


    <?php if (have_posts()) : ?>

      <header class="page-header">
        <?php
        ?><h1>Programs</h1>
      </header><!-- .page-header -->

      <?php /* Start the Loop */ ?>
      <div class="programs">

        <?php while (have_posts()) : the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
              <?php if (has_post_thumbnail()) : ?>
                <img class="article-thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>">
              <?php endif; ?>


              <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(CFS()->get('program_url'))), '</a></h2>'); ?>


              <div class="overlay">
                <h3 class="overlay-title"> <?php the_title() ?></h3>
                <div class="overlay-content"><?php the_content() ?></div>
                <p class="visit-btn"><a href="<?php echo esc_url(CFS()->get('program_url')) ?>">Visit Website</a></p>

              </div>
            </div> <!-- entry -->



          </article><!-- #post-## -->








        <?php endwhile; ?>
      </div>
    <?php endif; ?>



  </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>