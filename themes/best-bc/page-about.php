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
		<?php the_excerpt(); ?>
        <!-- // staff members
    $fields = CFS()->get('staff member');
  foreach ( $staffMember as $staffmember ) {
    echo $field['staff_image'];
    echo $field['staff_name'];
    echo $field['staff_position'];
} -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>