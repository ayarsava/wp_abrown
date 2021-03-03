<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abc
 */

?>
<?php 
if ( 'video' == get_post_type() ){
	echo '<div class="vid-wrapper col-md-4">';
	get_template_part( 'template-parts/card', 'video-splash' );
	echo '</div>';
} else {
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<div class="py-5">
				<div class="row">
				
					<?php 
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title text-center col-md-9 mx-auto">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
				</div>
					<?php 
					if ( has_excerpt() ) {
						echo '<div class="lead excerpt mx-auto mt-4">'.get_the_excerpt().'</div>'; 
					}
					?>
				</div>
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

<?php } ?>