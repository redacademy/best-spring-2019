<?php
/**
 * The template for displaying all pages.
 *
 * @package Best_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>
        

        <div class="timeline">
            <section class="timeline-title">
                <?php $tabs = CFS()->get('tab_menu_tab');
                foreach ($tabs as $tab) :
                    $tab_title = $tab['tab_menu_title'];
                    $tab_body = $tab['tab_menu_body'];
                ?>
                    <div class="timeline-years">
                        <button type="button" class="timeline-btn">
                            <h2><?php echo $tab_title; ?></h2>
                        </button>
                        <hr class="timeline-line">

                        <div class="timeline-content">
                            <h2><?php echo $tab_title ?></h2>
                            <p><?php echo $tab_body; ?></p>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
                
            </section>
        </div>


        


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>