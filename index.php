<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package scm_testing
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php popularPosts(); ?>
		<!-- For Top(index) page -->
		<div class="top-page">
			<?php
				// if(is_home() && !is_paged()) :
				// 	the_insert_page();
				// 	the_custom_feature_page();
				// endif;

				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;
				else :
					// For search not found
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php the_posts_pagination(); ?>
<?php
	get_sidebar();
	get_footer();
?>
