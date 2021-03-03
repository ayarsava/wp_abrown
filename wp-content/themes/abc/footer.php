<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abc
 */

?>

	<!--FOOTER-->
		<footer id="footer" class="mt-5 py-5 bg-primary cl-secondary">
          <div class="container pt-4">
            <div class="row">
              <div class="col-md-4">
                <img width="120" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-abc.png">
                <div class="lead my-3">Almirante Brown Contenidos</div>
                <p style="line-height:1.2;"><small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </small></p>
              </div>
              <div class="col-md-4">
                <h5>Últimos videos</h5>
                <div>
                    <?php
                    $recent_posts = new WP_Query( array(
                        'posts_per_page' => 3, // Number of recent posts thumbnails to display
                        'post_status' => 'publish', // Show only the published posts
                        'post_type'   =>  'video',
                        'order'       =>  'ASC',
                        'post__not_in' => array (get_the_ID()),
                    ));

                    if ( $recent_posts->have_posts() ) :
                      while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); 
                      $postid = $post->ID;
                      $youtubevimeo = rwmb_meta('youtubevimeo','',$postid);

                      echo '<article class="grid-item video-item">';
                        if ($youtubevimeo) {
                        echo '<div class="video-item__thumbnail">';
                          echo '<a href="'.get_permalink($post->ID).'">';
                            echo '<div class="video-thumbnail vid-wrapper">';
                              echo '<div class="plyr__video-embed vid-player post-'.$post->ID.'" data-id="post-'.$post->ID.'" id="plyr-'.$post->ID.'-'.rand().'" data-url="'.$youtubevimeo.'"></div>';
                            echo '</div>';
                          echo '</a>';
                        echo '</div>';
                        }
                        echo '<div class="video-item__content">';
                          echo '<div class="video-item__category">';
                          echo get_the_term_list( $post->ID, 'category', '', ', ');
                          echo '</div>';
                          echo the_title( '<h6 class="video-item__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-light">', '</a></h6>');
                          

                          if ( has_excerpt() ) {
                            echo '<div class="video-item__desc">'.get_the_excerpt().'</div>'; 
                          }
                        echo '</div>';
                      echo '</article>';
                      endwhile;
                    else:
                    endif;
                    wp_reset_query(); 
                    ?>
                </div>
              </div>
              <div class="col-md-4">
                <ul class="list-inline py-3 mb-0 lead text-right">
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i data-feather="twitter" width="16" height="16"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i data-feather="instagram" width="16" height="16"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i data-feather="facebook" width="16" height="16"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i data-feather="youtube" width="16" height="16"></i></a></li>
                  <li class="list-inline-item pl-4"><a href="#" class="text-light" target="_blank"><i data-feather="search" width="16" height="16"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
