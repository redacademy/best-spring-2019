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
     
<a  href="https://best.van.cp.academy.red/history/"><p class="history-btn">View Our History</p></a>
<!-- staff members CFS -->
<div class="Staff-text">
<h1>Who we are</h1>
<p>Staff</p>
</div>
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

<div class="board-members">
     <h1 class="members-title"> <?php echo CFS()->get('board_members_title');?></h1>
    <img class="members-photo" src="<?php echo CFS()-> get('board_members_photo');?>"/>
    <p class="members-names"><?php echo CFS()->get('board_members_names');?></p>


<a class="annual-report" href="<?php echo get_permalink( get_page_by_title( 'Annual Reports' ));?>">View 2018 Annual Report</a>
</div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>