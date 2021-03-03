<?php
/**
 * Plugin Name: Abc
 * Plugin URI:  https://www.ayarsava.com.ar
 * Description: Plugin generado por Ayar Sava para ABC Contenidos Audiosivuales | Almirante Brown | GPBA.
 * Version:     1.0.0
 * Author:      Ayar Sava
 * Author URI:  https://www.ayarsava.com.ar
 * Text Domain: abc
 *
 * @package Abc
 */

/** Register Custom Taxonomy Destaque. **/
function wporg_register_taxonomy_destaque() {
	$labels = array(
		'name'              => _x( 'Destaques', 'taxonomy general name' ),
		'singular_name'     => _x( 'Destaque', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar destaques' ),
		'all_items'         => __( 'Todos los tipos de destaque' ),
		'parent_item'       => __( 'Destaque padre' ),
		'parent_item_colon' => __( 'Destaque padre:' ),
		'edit_item'         => __( 'Editar Destaque' ),
		'update_item'       => __( 'Actualizar Destaque' ),
		'add_new_item'      => __( 'Agregar nueva Destaque' ),
		'new_item_name'     => __( 'Nuevo Destaque' ),
		'menu_name'         => __( 'Destaque' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories).
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest'      => true,
	);
	register_taxonomy( 'destaque', array( 'video' ), $args );
}
add_action( 'init', 'wporg_register_taxonomy_destaque' );


add_filter( 'rwmb_meta_boxes', 'mbox_register_meta_boxes' );
/**
 * Registro fields via metabox.io.
 *
 * @param string $meta_boxes     Meta value. Required.
 */
function mbox_register_meta_boxes( $meta_boxes ) {
	$prefix = 'mbox_';
	$meta_boxes[] = array(
		'id'         => 'mb_abc_contenidos',
		'title'      => __( 'Campos adicionales', 'mbox' ),
		'post_types' => 'video',
		'context'    => 'normal',
		'priority'   => 'low',
		'autosave'   => true,
		'fields'     => array(
			array(
				'name' => 'Destacado',
				'id'   => 'destacado_id',
				'type' => 'checkbox',
				'std'  => 0, // 0 or 1
			),
			// YOutbe Vimeo.
			array(
				'id'   => 'youtubevimeo',
				'name' => 'Contenido TouTube / Vimeo',
				'type' => 'url',
				'desc' => 'Ingrese la url del contenido a ser presentado desde YouTube o Vimeo',
				// Input size.
				'size' => 50,
			),
			array(
				'name' => 'Duración',
				'id'   => "{$prefix}duracion",
				'type' => 'text',
				'desc' => 'Por ej. 11:54',
			),
			array(
				'name' => 'Fecha de estreno',
				'id'   => 'fecha_estreno',
				'type' => 'datetime',
				'timestamp'  => true,
				'js_options' => array(
					'dateFormat'      => 'dd-mm-yy',
					'showTimepicker'  => true,
				),
				'save_format' => 'Y-m-d H:i:s',
			),
		),
	);
	return $meta_boxes;
}

/*** CPT AUDIOVISUAL ***/
function custom_post_type_video() {
	// Set UI labels for Custom Post Type.
	$labels = array(
		'name'               => _x( 'Videos', 'Post Type General Name', 'abc-plugin' ),
		'singular_name'      => _x( 'Video', 'Post Type Singular Name', 'abc-plugin' ),
		'menu_name'          => __( 'Videos', 'abc-plugin' ),
		'parent_item_colon'  => __( 'Video padre', 'abc-plugin' ),
		'all_items'          => __( 'Todos los videos', 'abc-plugin' ),
		'view_item'          => __( 'Ver Video', 'abc-plugin' ),
		'add_new_item'       => __( 'Agregar nuevo Video', 'abc-plugin' ),
		'add_new'            => __( 'Agregar nuevo', 'abc-plugin' ),
		'edit_item'          => __( 'Editar Video', 'abc-plugin' ),
		'update_item'        => __( 'Actualizar Video', 'abc-plugin' ),
		'search_items'       => __( 'Buscar Video', 'abc-plugin' ),
		'not_found'          => __( 'No encontrado', 'abc-plugin' ),
		'not_found_in_trash' => __( 'No encontrado en la papelera', 'abc-plugin' ),
	);

	// Set other options for Custom Post Type.
	$args = array(
		'label'               => __( 'video', 'abc-plugin' ),
		'description'         => __( 'Video', 'abc-plugin' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor.
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'post_tag', 'category' ),

		/**
		* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 16,
		'can_export'          => true,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'             => array(
			'slug' => 'video',
		),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
		'menu_icon'           => 'dashicons-format-video',
		'with_front'          => false,
		'timestamp'           => true,
	);

	// Registering your Custom Post Type.
	register_post_type( 'video', $args );
}
add_action( 'init', 'custom_post_type_video', 0 );


if ( ! function_exists( 'wp_front_vid_destacado' ) ) {
	function wp_front_vid_destacado($destaque) {

	$args = array(
		'post_type'             => 'video',
		'posts_per_page'        => 5,
		'tax_query' => array(
			array(
			'taxonomy'			=> 'destaque',
			'field'				=> 'slug',
			'terms'				=> $destaque,
			),
			'orderby' => 'destaque, name', // Just enter 2 parameters here, seprated by comma.
			'order'   =>'DESC'
		)
	);

	// The Query
	$query_video_destacado = new WP_Query( $args );
		if ( $query_video_destacado->have_posts() ) { 
			$term = get_term_by('slug', $destaque, 'destaque'); 
			$tag_name = $term->name;
			echo '<div class="col-md-7 vid-wrapper destacado">';
			while ( $query_video_destacado->have_posts() ) : $query_video_destacado->the_post();
				if ($query_video_destacado->current_post == 0) {
					get_template_part( 'template-parts/card', 'video' );
					echo '</div>';
					echo '<div class="col-md-5"><div class="row">';
				} else {
					echo '<div class="col-md-6 vid-wrapper mb-4">';
					get_template_part( 'template-parts/card', 'video-splash' );
					echo '</div>';
				}
			endwhile; wp_reset_postdata(); 
			echo '</div></div>'; 
		}
	}
}

if ( ! function_exists( 'wp_front_video_por_category' ) ) {
	function wp_front_video_por_category($ppp,$category) {
		$args = array(
			'post_type'              => 'video',
			'posts_per_page'         => -1,
			'post_status'            => 'publish',
			'posts_per_page'         => $ppp,
			'category_name'          => $category,
			'no_found_rows'          => true,
		);
		// The Query
		$query_video_destacado = new WP_Query( $args );
		if ( $query_video_destacado->have_posts() ) { 
			while ( $query_video_destacado->have_posts() ) : $query_video_destacado->the_post();
			echo '<div class="vid-wrapper">';
			get_template_part( 'template-parts/card', 'video-splash' );
			echo '</div>';
			endwhile;
		}
	}
}

if ( ! function_exists( 'wp_front_videos_por_tag' ) ) {
	function wp_front_videos_por_tag($ppp, $offset) {
  
	  $args = array(
		  'post_type'             => 'video',
		  'posts_per_page'        => $ppp,
		  'offset'                => $offset,
		  'meta_query'            => array(
			  'destacado_clause'  => array(
				  'key'           => 'destacado_id',
				  'value'         => 1,
			  ),
		  ),
	  );
  
	  // The Query
	  $query_video_destacado = new WP_Query( $args );
		if ( $query_video_destacado->have_posts() ) { 
			while ( $query_video_destacado->have_posts() ) : $query_video_destacado->the_post();
				if ($superdestacado == 1) {
					get_template_part( 'template-parts/card', 'video' );
				} else {
					echo '<div class="vid-wrapper">';
					get_template_part( 'template-parts/card', 'video-splash' );
					echo '</div>';
				}
			endwhile;
		}
	}
}


/**
 * Display a custom taxonomy dropdown in admin
 * @author Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_action('restrict_manage_posts', 'tsm_filter_post_type_by_taxonomy');
function tsm_filter_post_type_by_taxonomy() {
	global $typenow;
	$post_type = 'video'; // change to your post type
	$taxonomy  = 'destaque'; // change to your taxonomy
	if ($typenow == $post_type) {
		$selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
		$info_taxonomy = get_taxonomy($taxonomy);
		wp_dropdown_categories(array(
			'show_option_all' => sprintf( __( 'Show all %s', 'textdomain' ), $info_taxonomy->label ),
			'taxonomy'        => $taxonomy,
			'name'            => $taxonomy,
			'orderby'         => 'name',
			'selected'        => $selected,
			'show_count'      => true,
			'hide_empty'      => true,
		));
	};
}
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
	global $pagenow;
	$post_type = 'video'; // change to your post type
	$taxonomy  = 'destaque'; // change to your taxonomy
	$q_vars    = &$query->query_vars;
	if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
		$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
		$q_vars[$taxonomy] = $term->slug;
	}
}

function list_tags_with_count() {
	$tags = get_tags( array(
		'orderby'                   => 'count', 
		'order'                     => 'DESC',
		'smallest'                  => 16, 
		'largest'                   => 16,
		'unit'                      => 'px', 
		'number'                    => 10,  
		'format'                    => 'list',
		'separator'                 => " ",
		'show_count'                => 1,
		'echo'                      => false
	) );
	echo '<ul>';
	foreach ( (array) $tags as $tag ) {
		echo '<li><a href="' . get_tag_link ($tag->term_id) . '" rel="tag">' . $tag->name . ' (' . $tag->count . ') </a></li>';
	}
	echo '</ul>';
}
// Add a shortcode so that we can use it in widgets, posts, and pages
add_shortcode('wpb_popular_tags', 'list_tags_with_count'); 
	
// Enable shortcode execution in text widget
add_filter ('widget_text', 'do_shortcode');