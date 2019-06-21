<?php
/**
 * Template part for displaying posts.
 * 
 * @package RED_Starter_Theme
 * Template Name: Annual-Reports
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

		

			<div class="annual-reports">
				<?php $annual_report = CFS()->get('annual_report');
				foreach ($annual_report as $reports):?>
				<a class="reports-file" href="<?php echo $reports['report_file'];?>"><p><?php echo $reports['report_year']?></p></a>
			</div>
		<?php endforeach;?>

	</main>
</div>

<?php get_footer(); 