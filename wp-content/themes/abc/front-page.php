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

        <section class="container-fluid destacados pt-4 pb-4 text-light bg-dark" style="background: #0e0e0e!important;">
          <div class="container">
            <div class="row pt-2">
              <div class="vid-wrapper col-md-7 destacado">
                <div class="plyr__video-embed" id="player">
                  <iframe
                    src="//www.youtube.com/embed/tIfqyDEWI6Y?origin=//localhost:8003&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                    allowfullscreen
                    allowtransparency
                    allow="autoplay"
                  ></iframe>
                </div>
                <h4 class="video-item__title"><a href="interna.html">Casa de la Cultura | Almirante Brown</a></h4>
              </div>
              <div class="col-md-5 side-destacado">
                <div class="row">
                  <div class="vid-wrapper col-6">
                    <div class="vid-player" id="video-1" data-plyr-provider="youtube" data-plyr-embed-id="0dQhLuoMVzc" style="background-image: url('//i.ytimg.com/vi/0dQhLuoMVzc/maxresdefault.jpg');"></div>
                    <h5><a href="interna.html">Tránsito: qué hay que saber para obtener mi licencia de conducir</a></h5>
                  </div>
                  <div class="vid-wrapper col-6">
                    <div class="vid-player" id="video-1" data-plyr-provider="youtube" data-plyr-embed-id="RCgOOpYg0wk" style="background-image: url('//i.ytimg.com/vi/RCgOOpYg0wk/maxresdefault.jpg');"></div>
                    <h5><a href="interna.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h5>
                  </div>
                  <div class="vid-wrapper col-6">
                    <div class="vid-player" id="video-2" data-plyr-provider="youtube" data-plyr-embed-id="tLzdKJeFT7Q" style="background-image: url('//i.ytimg.com/vi/tLzdKJeFT7Q/maxresdefault.jpg');">
                  </div>
                    <h5><a href="interna.html">Excepteur sint occaecat cupidatat non proident sint occaecat cupidatat</a></h5>
                  </div>
                  <div class="vid-wrapper col-6">
                    <div class="vid-player" id="video-3" data-plyr-provider="youtube" data-plyr-embed-id="Fgn7cC5Gl_0" style="background-image: url('//i.ytimg.com/vi/Fgn7cC5Gl_0/maxresdefault.jpg');">
                  </div>
                    <h5><a href="interna.html">Casa Borges</a></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="shortcuts" class="pt-4 pb-3">
          <div class="container h5 mb-0 text-center">
            <a href="interna.html" class="badge badge-pill px-5 py-3 mr-2 mb-2" style="border:solid 1px #f1f1f1; color:#f1f1f1;">Deporte</a>
            <a href="interna.html" class="badge badge-pill px-5 py-3 mr-2 mb-2" style="border:solid 1px #f1f1f1; color:#f1f1f1;">Educación</a>
            <a href="interna.html" class="badge badge-pill px-5 py-3 mr-2 mb-2" style="border:solid 1px #f1f1f1; color:#f1f1f1;">Radio</a>
            <a href="interna.html" class="badge badge-pill px-5 py-3 mr-2 mb-2" style="border:solid 1px #f1f1f1; color:#f1f1f1;">Eduación vial</a>
            <a href="interna.html" class="badge badge-pill px-5 py-3 mr-2 mb-2" style="border:solid 1px #f1f1f1; color:#f1f1f1;">Información ciudadana</a>
          </div>
        </section>

        <section id="educacion" class="container pt-5">
          <h4 class="section-title mb-3"><span>Educación</span></h4>
          <div class="row slick-x4 slick-preload">
            <div class="vid-wrapper ">
              <div class="vid-player" id="video-UopTUlEpB8w" data-plyr-provider="youtube" data-plyr-embed-id="UopTUlEpB8w" style="background-image: url('//i.ytimg.com/vi/UopTUlEpB8w/maxresdefault.jpg');"></div>
              <h5><a href="interna.html">Congreso de Educación 2020, presenta a Alejandra Birgin</a></h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" id="video-2" data-plyr-provider="youtube" data-plyr-embed-id="uW1oHKw34i0" style="background-image: url('//i.ytimg.com/vi/uW1oHKw34i0/maxresdefault.jpg');"></div>
              <h5><a href="interna.html">Congreso de Educación 2020, presenta a Inés Dussel</a></h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" id="video-3" data-plyr-provider="youtube" data-plyr-embed-id="cN7l8_ciEEo" style="background-image: url('//i.ytimg.com/vi/cN7l8_ciEEo/maxresdefault.jpg');"></div>
              <h5><a href="interna.html">5° encuentro del Ciclo de charlas del Consejo Local de la Niñez</a></h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" id="video-3" data-plyr-provider="youtube" data-plyr-embed-id="iXNrVoGK-hc" style="background-image: url('//i.ytimg.com/vi/iXNrVoGK-hc/maxresdefault.jpg');"></div>
              <h5><a href="interna.html">Congreso de Educación 2020. Apertura y charla de Patricia Redondo</a></h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="JeyVU4nMWCg"></div>
              <h5>Excepteur sint occaecat cupidatat non proident...</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="JpnpZH_IY8I"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="6hptCdsRqNU"></div>
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="YHyPdH-8oZQ"></div>
              <h5>Excepteur sint occaecat cupidatat non proident...</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="Iew2MEfzbhI"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="n2ISkJZC6DI"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="tj8zHx298RY"></div>
              <h5>Excepteur sint occaecat cupidatat non proident...</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="5zjDLZy0Q_U"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
          </div>
        </section>

        <section id="informacion-ciudadana" class="container pt-5">
          <h4 class="section-title mb-3"><span>Información ciudadana</span></h4>
          <div class="row slick-front slick-preload" data-aos="fade-up">
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="RCgOOpYg0wk"></div>
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="tLzdKJeFT7Q"></div>
              <h5>Excepteur sint occaecat cupidatat non proident...</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="BfRdXUEBnrA"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="5qap5aO4i9A"></div>
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="JeyVU4nMWCg"></div>
              <h5>Excepteur sint occaecat cupidatat non proident...</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="JpnpZH_IY8I"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="6hptCdsRqNU"></div>
              <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="YHyPdH-8oZQ"></div>
              <h5>Excepteur sint occaecat cupidatat non proident...</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="Iew2MEfzbhI"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="n2ISkJZC6DI"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="tj8zHx298RY"></div>
              <h5>Excepteur sint occaecat cupidatat non proident...</h5>
            </div>
            <div class="vid-wrapper">
              <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="5zjDLZy0Q_U"></div>
              <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
            </div>
          </div>
        </section>

        <section id="visitas-virtuales" class="container pt-5">
            <h4 class="section-title mb-3"><span>Visitas virtuales. Museos Almirante Brown</span></h4>
            <div class="row slick-front slick-preload" data-aos="fade-up">
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="RCgOOpYg0wk"></div>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="tLzdKJeFT7Q"></div>
                <h5>Excepteur sint occaecat cupidatat non proident...</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="BfRdXUEBnrA"></div>
                <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="5qap5aO4i9A"></div>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="JeyVU4nMWCg"></div>
                <h5>Excepteur sint occaecat cupidatat non proident...</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="JpnpZH_IY8I"></div>
                <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="6hptCdsRqNU"></div>
                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="YHyPdH-8oZQ"></div>
                <h5>Excepteur sint occaecat cupidatat non proident...</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="Iew2MEfzbhI"></div>
                <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="n2ISkJZC6DI"></div>
                <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="tj8zHx298RY"></div>
                <h5>Excepteur sint occaecat cupidatat non proident...</h5>
              </div>
              <div class="vid-wrapper">
                <div class="vid-player" data-plyr-provider="youtube" data-plyr-embed-id="5zjDLZy0Q_U"></div>
                <h5>Sed ut perspiciatis unde omnis iste natus voluptatem</h5>
              </div>
            </div>
        </section>

<?php
get_footer();
