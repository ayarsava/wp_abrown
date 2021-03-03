<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Abc
 */

get_header();
?>

<main id="primary" class="site-main container mt-5">
	<section class="no-results not-found">
		<header class="page-header">
			<h1 class="page-title">Nada por aquí...</h1>
		</header><!-- .page-header -->

		<div class="page-content">
			
				<p>No hemos encontrado contenidos relacionados. Tal vez quieras realizar una búsqueda.</p>
				<?php
				get_search_form();

				?>
		</div><!-- .page-content -->
	</section><!-- .no-results -->
</main>
<?php
get_footer();
