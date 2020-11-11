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
		<footer class="mt-5 py-5 bg-primary cl-secondary">
          <div class="container pt-4">
            <div class="row">
              <div class="col-md-4">
                <img width="120" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-abc.png">
                <div class="lead my-3">Almirante Brown Contenidos</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              </div>
              <div class="col-md-4">
                <h5>Últimos videos</h5>
                <article class="grid-item video-item">
                  <div class="video-item__thumbnail">
                    <a href="#">
                      <div class="video-thumbnail">
                        <img src="//i.ytimg.com/vi/0dQhLuoMVzc/maxresdefault.jpg" class="img-fluid">
                      </div>
                    </a>
                  </div>
                  <div class="video-item__content">
                    <div class="video-item__category"><a href="#" rel="tag">Info ciudadana</a></div>
                    <h6 class="video-item__title"><a href="#" class="text-light">Tránsito: qué hay que saber para obtener mi licencia de conducir</a></h6>
                    <div class="video-item__desc">
                      Nullam imperdiet, sem at fringilla lobortis, sem nibh fringilla nibh, id gravidrus sit amet erat. Aenean nec nisi quis nisi...
                    </div>
                  </div>
                </article>
                <article class="grid-item video-item">
                  <div class="video-item__thumbnail">
                    <a href="#">
                      <div class="video-thumbnail">
                        <img src="//i.ytimg.com/vi/uW1oHKw34i0/maxresdefault.jpg" class="img-fluid">
                      </div>
                    </a>
                  </div>
                  <div class="video-item__content">
                    <div class="video-item__category"><a href="#" rel="tag">Educación</a></div>
                    <h6 class="video-item__title"><a href="#" class="text-light">Congreso de Educación 2020, presenta a Inés Dussel</a></h6>
                    <div class="video-item__desc">
                      Nullam imperdiet, sem at fringilla lobortis, sem nibh fringilla nibh, id gravidrus sit amet erat. Aenean nec nisi quis nisi...
                    </div>
                  </div>
                </article>
                <article class="grid-item video-item">
                  <div class="video-item__thumbnail">
                    <a href="#">
                      <div class="video-thumbnail">
                        <img src="//i.ytimg.com/vi/RCgOOpYg0wk/maxresdefault.jpg" class="img-fluid">
                      </div>
                    </a>
                  </div>
                  <div class="video-item__content">
                    <div class="video-item__category"><a href="#" rel="tag">Info ciudadana</a></div>
                    <h6 class="video-item__title"><a href="#" class="text-light">Tránsito: qué hay que saber para obtener mi licencia de conducir</a></h6>
                    <div class="video-item__desc">
                      Nullam imperdiet, sem at fringilla lobortis, sem nibh fringilla nibh, id gravidrus sit amet erat. Aenean nec nisi quis nisi...
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-4">
                <ul class="list-inline py-3 mb-0 lead text-right">
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-twitter"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-instagram"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-facebook"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-youtube"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
