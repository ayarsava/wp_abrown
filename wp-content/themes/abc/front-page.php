<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Abc
 */

get_header();
?>

        <section id="destacados" class="container-fluid destacados">
          <div class="container">
            <div class="row pt-2">
                <?php wp_front_vid_destacado('principal'); ?>
            </div>
          </div>
          <div id="shortcuts" class="container pt-4">
            <div class="h6 mb-4 text-left text-white" style="border-bottom: solid 1px #523b5f;
    padding-bottom: 1rem;"><span># Etiquetas populares</span></div>
            <?php echo do_shortcode( '[wpb_popular_tags]' );?>
            <!--<ul class="list-inline text-center mb-0">
              <li class="list-inline-item"><a href="#">Deporte</a></li>
              <li class="list-inline-item"><a href="#">Educación</a></li>
              <li class="list-inline-item"><a href="#">Radio</a></li>
              <li class="list-inline-item"><a href="#">Eduación vial</a></li>
              <li class="list-inline-item"><a href="#">Información ciudadana</a></li>
              <li class="list-inline-item"><a href="#">Canto</a></li>
              <li class="list-inline-item"><a href="#">Guitarra</a></li>
              <li class="list-inline-item"><a href="#">Sustentabilidad</a></li>
              <li class="list-inline-item"><a href="#">Huerto</a></li>
            </div>-->
          </div>
        </section>

        

        <section id="informacion-ciudadana" class="container pt-5">
          <h4 class="section-title mb-3"><span>Información ciudadana</span>
            <a href="/canal/informacion-ciudadana/" class="btn btn-sm btn-outline-primary rounded-pill ml-2">Ver todos</a>
          </h4>
          <div class="slick-x4 slick-preload">
            <?php wp_front_video_por_category(20,'informacion-ciudadana'); ?>
          </div>
        </section>

        <section id="educacion" class="container pt-5">
          <h4 class="section-title mb-3">
            <span>Deportes</span>
            <a href="/canal/deportes/" class="btn btn-sm btn-outline-primary rounded-pill ml-2">Ver todos</a>
          </h4>
          <div class="slick-front slick-preload">
            <?php wp_front_video_por_category(20,'deportes'); ?>
          </div>
        </section>

        <section id="musica" class="container pt-5">
          <h4 class="section-title mb-3"><span>Música</span>
            <a href="/canal/musica/" class="btn btn-sm btn-outline-primary rounded-pill ml-2">Ver todos</a>
          </h4>
          <div class="slick-front slick-preload">
            <?php wp_front_video_por_category(20,'musica'); ?>
          </div>
        </section>

        <section id="visitas-virtuales" class="container pt-5">
          <h4 class="section-title mb-3"><span>Escuela Municipal de Arte - EMA</span>
            <a href="/canal/escuela-municipal-de-arte/" class="btn btn-sm btn-outline-primary rounded-pill ml-2">Ver todos</a>
          </h4>
          <div class="slick-front slick-preload">
            <?php wp_front_video_por_category(20,'escuela-municipal-de-arte'); ?>
          </div>
        </section>

<?php
get_footer();
