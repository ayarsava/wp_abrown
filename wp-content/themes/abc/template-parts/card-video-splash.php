<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abc
 */

$youtubevimeo = rwmb_get_value('youtubevimeo');

    echo '<div class="plyr__video-embed vid-player post-'.get_the_ID().'" data-id="post-'.get_the_ID().'" id="plyr-'.get_the_ID().'-'.rand().'" data-url="'.$youtubevimeo.'"></div>';
    echo the_title( '<div class="video-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>');