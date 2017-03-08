<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *Template Name: Ajax
 * @package single_page
 */

get_header(); ?>
<?php
	$post = get_post($_POST['id']); // this line is used to define the {id:post_id} which you will see in another snippet further down

	if ($post) { // this is necessary and is a replacement of the typical `if (have_posts())`
		setup_postdata($post); // needed to format custom query results for template tags ?>
		<!-- everything below this line is your typical page template coding -->
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>
			<small><?php the_time('F jS, Y') ?></small>
			<span><?php the_author() ?></span>

			<div class="entry">
				<?php the_content(); ?>
			</div>

		</div>

	<?php } ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
