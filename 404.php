<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package scm_testing
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="error-404 not-found">
			<header class="page-header">
				<h2 class="page-title"><?php esc_html_e( 'お探しのページは見つかりませんでした。', '' ); ?></h2>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'ここには何も無いようです。検索をお試しください。', '' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php
	get_sidebar();
	get_footer();
?>