
  
  <div class="menu-wrapper">
    <div class="container page-top-wrapper">
      <div class="search-form">
        <form role="search" method="get" class="search-form" action="http://localhost:8004/">
          <label>
            <input type="search" class="search-field" placeholder="Buscar …" value="" name="s">
          </label>
          <button type="submit" class="search-submit">
            <i data-feather="search" width="16" height="16"></i>
          </button>
        </form>
      </div>
      <div role='navigation' class="menu">
        <label for="menu">MENÚ <i data-feather="menu" class="svg-icon"></i></label>
        <input type="checkbox" id="menu">
        <ul class="page-nav">
          <li class="menu-hasdropdown">
            <a href="<?php echo get_home_url(); ?>/canal/tv/"><i data-feather="tv"></i><span>TV</span>
              <label title="toggle menu" for="tv">
                <i data-feather="chevron-down"></i>
              </label>
            </a>
            <input type="checkbox" id="tv">
            <ul class="menu-dropdown">
              <li><a href="<?php echo get_home_url(); ?>/canal/tv/escena-brown" class="">Escena Brown</a></li>
              <li><a href="<?php echo get_home_url(); ?>/canal/tv/debates-historicos">Ciclo de debates históricos</a></li>
              <li><a href="<?php echo get_home_url(); ?>/canal/tv/youtube-live">Youtube Live</a></li>
              <li><a href="<?php echo get_home_url(); ?>/canal/tv/">Contenidos artísticos, culturales o de entretenimiento.</a></li>
            </ul>
          </li>
          <li class="menu-hasdropdown">
            <a href="<?php echo get_home_url(); ?>/canal/radio/"><i data-feather="mic"></i><span>Radio</span>
              <label title="toggle menu" for="radio">
                <i data-feather="chevron-down"></i>
              </label>
            </a>
            <input type="checkbox" id="radio">
            <ul class="menu-dropdown">
              <li><a href="<?php echo get_home_url(); ?>/canal/radio/programas">Banco de programas</a></li>
              <li><a href="<?php echo get_home_url(); ?>/canal/radio/podcasts">Podcasts</a></li>
              <li><a href="<?php echo get_home_url(); ?>/canal/radio/streaming">Streaming</a></li>
            </ul>
          </li>
          <li class="menu-hasdropdown">
            <a href="#"><i data-feather="zap"></i><span>Cultura</span>
              <label title="toggle menu" for="cultura">
                <i data-feather="chevron-down"></i>
              </label>
            </a>
            <input type="checkbox" id="cultura">
            <ul class="menu-dropdown">
              <li><a href="#">Agenda</a></li>
              <li class="menu-hasdropdown menu-hasflyout">
                <a href="">Registro de artistas
                  <label title="toggle menu" for="registro-de-artistas">
                    <i data-feather="chevron-down" class="menu-downicon"></i>
                    <i data-feather="chevron-right" class="menu-righticon"></i>
                  </label>        
                </a>
                <input type="checkbox" id="registro-de-artistas">
                <ul class="menu-dropdown">
                  <li><a href="<?php echo get_home_url(); ?>/canal/musica/artistas-y-artesanos">Catálogo de Artistas y artesanos</a></li>
                  <li><a href="#">Registro</a></li>
                  <li><a href="#">Fomento</a></li>
                </ul>
              </li>
              <li><a href="#">Streaming</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_home_url(); ?>/canal/informacion-ciudadana/" title="Información ciudadana"><i data-feather="info"></i><span>Info ciudadana</span></a></li>
          <li class="menu-hasdropdown">
            <a href="<?php echo get_home_url(); ?>/canal/musica/" title="Música"><i data-feather="music"></i><span>Música</span>
              <label title="toggle menu" for="musica">
                <i data-feather="chevron-down"></i>
              </label>
            </a>
            <input type="checkbox" id="musica">
            <ul class="menu-dropdown">
              <li><a href="<?php echo get_home_url(); ?>/canal/musica/sello-discografico">Catálogo de producciones del sello  discográfico</a></li>
              <li><a href="<?php echo get_home_url(); ?>/canal/musica/videoclips">Videoclips</a></li>
              <li><a href="<?php echo get_home_url(); ?>/canal/musica/streaming">Streaming</a></li>
            </ul>
          </li>
          <li><a href="<?php echo get_home_url(); ?>/canal/brown-pibes"><i data-feather="smile"></i><span>Brown pibes</span></a></li>
        </ul>
      </div>
    </div>
  </div>
