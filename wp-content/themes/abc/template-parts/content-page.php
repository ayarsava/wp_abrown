<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<div class="py-5">
				<div class="row">
				
					<?php the_title( '<h1 class="entry-title text-center col-md-9 mx-auto">', '</h1>' ); ?>
				</div>
				<?php 
				if ( has_excerpt() ) {
					echo '<div class="lead excerpt mx-auto mt-4">'.get_the_excerpt().'</div>'; 
				}
				?>
			</div>
		</div>
	</header><!-- .entry-header -->

	<section>
		<div class="container">                    
			<div class="pb-4 gutemberg mx-auto">
				<?php 
				echo the_content();
				?>
			</div>
		</div>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
