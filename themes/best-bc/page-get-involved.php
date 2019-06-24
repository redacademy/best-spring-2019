<?php
/**
 * The template for displaying get involved page.
 * Template Name: Get Involved
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

        <div class="tabs">
            <ul class="tab-nav">
                <?php $tabs = CFS()->get('tab_menu_tab');
                foreach ($tabs as $tab) :
                    $tab_title =  $tab['tab_menu_title'];
                    ?>
                    <li><a href="#" id=<?php echo strtolower($tab_title); ?> class="tab-link"><?php echo $tab_title; ?></a></li>
                <?php endforeach; ?>
            </ul>

            <div class="tab-content-wrapper">
                <?php $tabs = CFS()->get('tab_menu_tab');
                foreach ($tabs as $tab) :
                    $tab_title =  $tab['tab_menu_title'];
                    $tab_body =  $tab['tab_menu_body'];
                    $tab_gform_id = $tab['tab_gform_id'];
                    ?>
                    <div class="tab-content">
                        <div class="tab-content-flexed">
                            <div class="tab-column-one">
                                <h2><?php echo $tab_title ?></h2>
                                <p><?php echo $tab_body ?></p>
                            </div>
                            <div class="tab-column-two">
                                <?php echo do_shortcode('[gravityform id=' . $tab_gform_id  . ' name=ContactUs title=false description=false]');  ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>