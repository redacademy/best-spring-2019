<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

      <?php /* Start the Loop */ ?>
      <div class="programs">
			<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-content">
          <?php if ( has_post_thumbnail() ) : ?>
           <img class="article-thumbnail" src="<?php the_post_thumbnail( 'large' ); ?>
          <?php endif; ?>

          <a href="<?php echo CFS()->get('program_url'); ?>">
          
          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
          </a>

</div><!-- entry -->

      </article><!-- #post-## -->

			<?php endwhile; ?>
</div>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
