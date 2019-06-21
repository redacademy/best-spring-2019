<?php
/**
 *
 * @package RED_Starter_Theme
 * Template Name: About
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'page'); ?>

        <?php endwhile; ?>
     
        <?php the_excerpt(); ?>
        
<!-- staff members CFS -->
<div class="staff">
        <?php $staff_member = CFS()->get('staff_member');
           foreach ( $staff_member as $staff) :?>
        <div class ="staff-members">
            <img class="staff-image" src="<?php echo $staff['staff_image'];?>"/>
            <p class ="staff-name"><?php echo $staff['staff_name']; ?></p>
            <h3 class ="staff-title"><?php echo $staff['staff_title'];?></h3>
        </div>
          <?php endforeach; ?>

</div>

<div class="board-team">
    <h1 class="board">Board Members</h1>
                <div class="board-members"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/group-photo.png"alt="">
</div>
<p class ="member-names">Danika Ball, Todd Spieling, Lauren Isaacsont, Ryan Skyes, Caitlin
 Roberts, Tylor Sherman, Steve Tannock, Emily Willobee</p>
			</div>
<a class="annual-report" href="#">View Annual Report</a>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>