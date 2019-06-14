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

        <?php endwhile;
    ?>


        <?php $tabs = CFS()->get('tab_menu_tab'); ?>

        <div class="tabs">
            <ul class="tab-nav">
                <?php $tabs = CFS()->get('tab_menu_tab');
                foreach ($tabs as $tab) {
                    echo $tab['tab_menu_title'];
                    echo $tab['tab_menu_body'];
                } ?>
                <li><a href="#" class="tab-link">Tab 1</a></li>
                <li><a href="#" class="tab-link">Tab 2</a></li>
                <li><a href="#" class="tab-link">Tab 3</a></li>
                <!-- endforeach; -->
            </ul>
            <div class="tab-content-wrapper">
                <?php $tabs = CFS()->get('tab_menu_tab');
                foreach ($tabs as $tab) {
                    echo $tab['tab_menu_title'];
                    echo $tab['tab_menu_body'];
                } ?>
                <div class="tab-content">
                    <h2>Tab 1</h2>
                    <p>Some content here</p>
                </div>
                <div class="tab-content">
                    <h2>Tab 2</h2>
                    <p>Some content here</p>
                </div>
                <div class="tab-content">
                    <h2>Tab 3</h2>
                    <p>Some content here</p>
                </div>
                <!-- endforeach; -->
            </div>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>