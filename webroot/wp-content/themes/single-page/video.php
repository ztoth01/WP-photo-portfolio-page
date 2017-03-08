<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package single_page
 *
 * Template name: Video
 */

get_header(); ?>

<?php //get_template_part( 'template-parts/navigation2' );?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="video-page">
			<?php if( have_rows('videos') ):
			$i = 1;
			?>
			<?php while ( have_rows('videos') ) : the_row(); ?>
				<div class="video-outer">
					<iframe class="" width="560" height="315" src="<?php the_sub_field('video_link'); ?>" frameborder="0"></iframe>
					<div class="next-gig__link"><p><?php the_sub_field('video_description'); ?></p></div>
				</div>
			<?php
				$i ++;
				endwhile;
			?>
			<?php else : ?>
				<p>No videos</p>
			<?php endif;?>
				<p><?php the_sub_field('video_link'); ?></p>

<!--			<iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/IfH-HQfmc-k" frameborder="0" allowfullscreen></iframe>-->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>