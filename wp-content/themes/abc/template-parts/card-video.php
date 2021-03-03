<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abc
 */

$youtubevimeo = rwmb_meta('youtubevimeo');
?>

<article id="post-<?php get_the_ID(); ?>" <?php post_class('mb-4'); ?>>
    <div class="plyr__video-embed" id="player" data-url="<?php echo $youtubevimeo;?>"></div>
    <?php the_title( '<h4 class="video-item__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );?>
</article><!-- #post-<?php the_ID(); ?> -->