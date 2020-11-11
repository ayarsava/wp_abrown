<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div data-component="sidebar">
    	<div class="sidebar">
			<ul class="list-unstyled d-flex align-content-center flex-wrap first-menu">
				<li class="list-group-item pl-3 py-2">
				<a href="#"><i data-feather="tv"></i><span class="ml-2">TV</span></a>
				<ul class="list-unstyled d-flex align-content-center flex-wrap submenu">
					<li class="list-group-item pl-4">
					<a href="#" class="">Escena Brown</a>
					</li> 
					<li class="list-group-item pl-4">
					<a href="#">Ciclo de debates históricos</a>
					</li>
					<li class="list-group-item pl-4">
					<a href="#">Youtube Live</a>
					</li>
					<li class="list-group-item pl-4">
					<a href="#">-Contenidos artísticos, culturales o de entretenimiento.</a>
					</li>
				</ul> <!-- /.submenu --> 
				</li> <!-- /.list-group-item -->
				
				<li class="list-group-item pl-3 py-2">
				<a href="#"><i data-feather="mic"></i><span class="ml-2">Radio</span></a>
				<ul class="list-unstyled d-flex align-content-center flex-wrap submenu">
					<li class="list-group-item pl-4">
					<a href="#" class="">Banco de programas</a>
					</li> <!-- end BdP -->
					
					<li class="list-group-item pl-4">
					<a href="#" class="">Podcasts</a>
					</li> <!-- end Podasts -->
					
					
					<li class="list-group-item pl-4">
					<a href="#" class="">Streaming</a>
					</li> <!-- end Streaming -->
				</ul> <!-- /.submenu -->
				</li> <!-- /.list-group-item -->
				
				<li class="list-group-item pl-3 py-2">
				<a href="#"><i data-feather="zap"></i><span class="ml-2">Cultura</span></a>
				<ul class="list-unstyled d-flex align-content-center flex-wrap submenu">
					
					<li class="list-group-item pl-4">
					<a href="#" class="">Agenda</a>
					</li>
					
					<li class="list-group-item pl-4">
					<a href="#" class="">Registro de artistas</a>
					<ul class="list-unstyled d-flex align-content-center flex-wrap sub-submenu">
						<span class="arrow" style="top:114px;"></span>
						<li class="list-group-item pl-4">
						<a href="#">Catálogo de Artistas y artesanos</a>
						</li>
						<li class="list-group-item pl-4">
						<a href="#">Registro</a>
						</li>
						<li class="list-group-item pl-4">
						<a href="#">Fomento</a>
						</li>
					</ul>
					</li>
				</ul> <!-- /.submenu -->
				</li> <!-- /.list-group-item -->
				
				
				<li class="list-group-item pl-3 py-2">
				<a href="#"><i data-feather="info"></i><span class="ml-2">Info ciudadana</span></a>
				</li>
				
				<li class="list-group-item pl-3 py-2">
				<a href="#"><i data-feather="music"></i><span class="ml-2">Música</span></a>
				<ul class="list-unstyled d-flex align-content-center flex-wrap submenu">
					<li class="list-group-item pl-4">
					<a href="#" class="">Catálogo de producciones del sello  discográfico</a>
					</li>
					<li class="list-group-item pl-4">
					<a href="#" class="">Videoclips</a>
					</li>
				</ul>
				</li>
				
				<li class="list-group-item pl-3 py-2">
				<a href="#"><i data-feather="smile"></i><span class="ml-2">Brown pibes</span></a>
				</li>
				
			</ul> <!-- /.first-menu -->
		</div> <!-- /.sidebar -->
    </div>

	<div class="wp-content">
		<header>
          <div class="container">
            <div class="row align-items-middle">
              <nav class="col-md-6 navbar navbar-expand-lg navbar-dark bg-black text-white">
                  <a class="navbar-brand" href="/ab/"><img width="150" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-abc.png"></a>
                  <div class="h4 font-weight-light">Almirante Brown Contenidos</div>
              </nav>

              <div class="col-md-6 toolbox text-right my-auto">
                <ul class="list-inline mb-2 ml-auto">
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-twitter"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-instagram"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-facebook"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i class="header-icon fab fa-youtube"></i></a></li>
                  <li class="list-inline-item pl-4"><a href="#" class="text-light" target="_blank"><i class="fas fa-search"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </header>