<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Abc
 */

get_header();

$youtubevimeo = rwmb_meta('youtubevimeo');
$tipo_au = get_the_terms( $post->ID, 'tipo_au' );
$genero_au = get_the_terms( $post->ID, 'genero_au' );
$calificacion_au = get_the_terms( $post->ID, 'calificacion_au' );
$afiche = get_the_post_thumbnail_url(get_the_ID(),'full'); 
$presentado_por = rwmb_meta('mbox_presentado-por');
$seleccion = rwmb_meta('mbox_seleccion');
$descripcion = rwmb_meta('mbox_descripcion');
$duracion = rwmb_meta('mbox_duracion');
$productora = rwmb_meta('mbox_productora');
$direccion = rwmb_meta('mbox_direccion');
$produccion = rwmb_meta('mbox_produccion');
$guion = rwmb_meta('mbox_guion');
$ano = rwmb_meta('mbox_ano');
$elenco = rwmb_meta('mbox_elenco');
$fecha_estreno = rwmb_meta('fecha_estreno');
$curDateTime = date("Y-m-d H:i:s");

?>
<div id="content">

    <div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
        <section class="vid-container">
            <div class="container">
                <div class="pt-3 pb-5">
                    <div class="row">
                    
                        <?php the_title( '<h1 class="entry-title col-md-9 mr-auto">', '</h1>' ); ?>
                
                        <?php 
                        if ( has_excerpt() ) {
                            echo '<div class="lead col-md-9 mr-auto">'.get_the_excerpt().'</div>'; 
                        }
                        ?>
                    <div class="vid-wrapper col-md-12">
                        <div class="plyr__video-embed" id="player" data-url="<?php echo $youtubevimeo;?>" style="margin-top:1rem;"></div>
                    </div>
                    <div class="container video-item__category mt-3" style="font-size:.9rem;">
                    <?php 
                    echo get_the_term_list( $post->ID, 'category', '', ' • ');
                    ?>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-white">
            <div class="container">                    
                <div class="pt-4 pb-5 gutemberg mx-auto">
                    <?php 
                    echo the_content();
                    ?>
                </div>
            </div>
        </section>
        <section class="container mt-5">	
            <?php
            $related_query = new WP_Query(array(
                'post_type' => 'video',
                'category__in' => wp_get_post_categories(get_the_ID()),
                'post__not_in' => array(get_the_ID()),
                'posts_per_page' => 3,
                'orderby' => 'date',
            ));
            if ( $related_query->have_posts() ) { 
                echo '<h4 class="section-title mb-3"><span>Tal vez te pueda interesar</span></h4>
                <div class="row">';
                while ( $related_query->have_posts() ) : $related_query->the_post();
                echo '<div class="col-6 col-sm-4 col-md-3 vid-wrapper mb-3">';
                get_template_part( 'template-parts/card', 'video-splash' );
                echo '</div>';
                endwhile; wp_reset_postdata(); 
                echo '</div>';
            
            }
            ?>
        </section>
    </div><!-- #post-<?php the_ID(); ?> -->
    
<?php
get_footer();
