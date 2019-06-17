<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile;?>

        <div class="tabs">
            <ul class="tab-nav tab-carousel">
                <?php $tabs = CFS()->get('tab_menu_tab');
                foreach ($tabs as $tab) :
                    $tab_title =  $tab['tab_menu_title'];
                    ?>
                    <li><a href="#" class="tab-link"><?php echo $tab_title; ?></a></li>
                <?php endforeach; ?>
            </ul>
            <div class="tab-content-wrapper">
                <?php $tabs = CFS()->get('tab_menu_tab');
                foreach ($tabs as $tab) :
                    $tab_title =  $tab['tab_menu_title'];
                    $tab_body =  $tab['tab_menu_body'];
                    ?>
                    <div class="tab-content">
                        <h2><?php echo $tab_title ?></h2>
                        <p><?php echo $tab_body ?></p>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>