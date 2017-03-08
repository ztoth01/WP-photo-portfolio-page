<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package single_page
 *
 * Template name: Gallery
 */

get_header(); ?>

<?php //get_template_part( 'template-parts/navigation2' );?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="gallery-outer">
				<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '47' ); } ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
?>