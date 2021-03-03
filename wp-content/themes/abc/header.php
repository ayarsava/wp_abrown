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
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div class="wp-content">
		<header id="main-header">
          <div class="container">
            <div class="row align-items-middle">
              <nav class="col-md-6 navbar navbar-expand-lg navbar-dark bg-black text-white">
                  <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img width="150" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-abc.png"></a>
                  <div class="h6 font-weight-light">Almirante Brown Contenidos</div>
              </nav>

              <div class="col-md-6 toolbox text-right my-auto">
                <ul class="list-inline mb-2 ml-auto">
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i data-feather="twitter" width="16" height="16"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i data-feather="instagram" width="16" height="16"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i data-feather="facebook" width="16" height="16"></i></a></li>
                  <li class="list-inline-item pl-1"><a href="#" class="text-light" target="_blank"><i data-feather="youtube" width="16" height="16"></i></a></li>
                  
                </ul>
              </div>
            </div>
            
          </div>
		    <?php get_template_part( 'layouts/mega', 'menu' ); ?>
        </header>
