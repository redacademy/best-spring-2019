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

        <section class="history-content-1">
            <h2>Did you know that
                <span class="history-title-span">best<span>
                        <span class="history-span">:</span>
            </h2>

            <div class="history-info">
                <img class="history-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/images/Our-Community-Bikes-logo-orange.jpg" alt="">
                <p>Started Our Community Bikes in 1993, Vancouver’s first do-it-yourself bike store.</p>
            </div>

            <div class="history-info">
                <img class="history-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/images/bike-weekcutout1.png" alt="">
                <p>Initiated the first Bike Week in 1996, before focusing on Commuter Challenge.</p>
            </div>

            <div class="history-info">
                <img class="history-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/images/Central-Valley-Greenway.png" alt="">
                <p>Was awarded the first $1M grant from Vancity in 2001 for development of the Central Valley Greenway.</p>
            </div>

            <div class="history-content-line"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Homepage Line.png" alt="bus" /></div>

            <div class="history-info-2">
                <div class="history-info-content">
                    <h2 class="history-title-25years">
                        <span class="history-title-span">best</span>
                        celebrates over <br>25 years of history!
                    </h2>
                    <a href="">Check out our 25th<br>anniversary e-zine</a>
                </div>

                <img class="history-thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/images/25yearbestcutout.jpg" alt="">
            </div>
        </section>

        <section class="history-content-2">
            <h2>We’re Proud of Our <br>Positive Changes</h2>
            <p>
                In 1997 we launched the Go Green Choices Program, working with Translink, the regional transportation authority,
                to promote sustainable transportation to workplaces. Two years later we spun Our Community Bikes into its own non-profit,
                PEDAL, which now runs summer bike camps for kids, refurbishes old bikes, and trains and teaches people to fix their own bikes.
                Also that year we started Street Reclaiming, Moving for Change, and Off-Ramp,
                an internationally awarded project promoting sustainable transportation in secondary schools.
            </p>
            <p>
                In 2001 BEST was awarded the first one million dollar grant from Vancity, used to develop and leverage funding for the Central Valley Greenway,
                a 20 km long regional urban trail from Vancouver to New Westminster, which is heavily used today for cycling and walking.
                For this work, BEST received the City of Burnaby Gold Environmental Star.
                More importantly, the Greenway served as a catalyst for a constituency for active transportation.
            </p>
            <p>
                We created and ran an annual celebratory campaign aimed at promoting bicycling in the Province, June is Bike Month,
                resulting in unprecedented media coverage and awareness. After running Bike Month for ten years,
                we felt enough ground had been covered, and moved from building awareness, to concentrating on making sustainable choices easier.
                In 2016 we brought the initiative back online in a small way to highlight the great cycling activities going on in the region.
            </p>
            <p>
                More recently, BEST has focused on building viable social enterprises based on offering services to encourage and enable sustainable modes of transportation.
                These programs include STAR, Seniors Transportation Access Resources, Living Streets,
                a unique model of engaging recent immigrants to affect change to the pedestrian experience in their neighbourhood,
                Commuter Challenge, a free one week national initiative encouraging sustainable commuting, and The Bicycle Valet,
                free and safe bicycle parking for events. Beginning in 2016, BEST is offering Parkbus BC to transport people to BC Provincial Parks without the need for a car.
            </p>

            <button class="history-content-2-btn"><a href="<?php echo get_permalink(); ?>">View accomplishments</a></button>
        </section>

        <div class="timeline">
            <h2 class="timeline-title">
                <span class="history-title-span">best</span>
                Timeline
            </h2>
            <section class="timeline-section">
                <?php $tabs = CFS()->get('tab_menu_tab');
                foreach ($tabs as $tab) :
                    $tab_title = $tab['tab_menu_title'];
                    $tab_body = $tab['tab_menu_body'];
                    ?>
                    <div class="timeline-years">
                        <div class="timeline-btn-wrapper" tabindex="-1">
                            <h2 class="timeline-desktop-title"><?php echo $tab_title; ?></h2>
                            <button type="button" class="timeline-btn">
                                <p><?php echo $tab_title; ?></p>
                            </button>
                        </div>

                        <hr class="timeline-line">
                        <div class="timeline-content">
                            <h2><?php echo $tab_title ?></h2>
                            <?php echo $tab_body; ?>
                        </div>
                    </div>


                    <div class="empty-div"></div>
                    <div class="empty-div"></div>

                <?php endforeach; ?>

            </section>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>