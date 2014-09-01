<?php
	// yo
	//load the theme CSS
	function theme_styles() {
	
		wp_register_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css','','', 'screen'  );		
		wp_register_style( 'extbootstrap_css', get_template_directory_uri() . '/css/jasny-bootstrap.min.css','','', 'screen'  );
		wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,300|Raleway:400,300,500,600,700,800|Montserrat:400,700');
		wp_register_style( 'maincssstylesheet', get_template_directory_uri().'/style.css' );


		wp_enqueue_style( 'bootstrap_css' );
		wp_enqueue_style( 'extbootstrap_css' );		
		wp_enqueue_style( 'googleFonts');
		wp_enqueue_style( 'maincssstylesheet' );
	
		}

	//load all JS scripts
	function theme_js() {
	
		global $wp_scripts;
			
		wp_register_script( 'html_shiv', '//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js', NULL, '3.7.2', false );
		wp_register_script( 'respond_js', '//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js', NULL, '1.4.2', false );
		
		$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
		$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
		
		wp_enqueue_script( 'mixitup', get_template_directory_uri().'/js/jquery.mixitup.js', array( 'jquery' ), '1.1', true );		
		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.2', true );
		wp_enqueue_script( 'extbootstrap_js', get_template_directory_uri() . '/js/jasny-bootstrap.min.js', array('jquery'), '1.0', true );
		
		wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '1.0', true );

		wp_enqueue_script( 'mapapi', '//maps.googleapis.com/maps/api/js?key=AIzaSyAomIJDkS6rGU4KrPRbKftqooEY-DQtIiQ', array('jquery'), '1.0', true );
		wp_enqueue_script( 'maps', get_template_directory_uri() . '/js/maps.js', array('jquery', 'mapapi'), '1.0', true );
		
	}
	
				
	add_action( 'wp_enqueue_scripts', 'theme_js' );
	add_action( 'wp_enqueue_scripts', 'theme_styles' );


	//post thumbnails
	
	add_theme_support( 'post-thumbnails' );
	
	//menus
	
	add_theme_support( 'menus' );
	
	function register_theme_menus() {
		
		register_nav_menus(
			array(
				'header-menu'	=>	__('Header Menu'),
				'primary' => __( 'Primary Menu', 'THEMENAME' ),
			)			
		);		
	}
	
	add_action ( 'init', 'register_theme_menus' );	
	
	//page exerpts
	
	function add_page_exerpt() {
	
	add_post_type_support( 'page', 'excerpt' );
	}
	
	add_action('init', 'add_page_exerpt');
	
	//widgets
	
	function create_widget( $name, $id, $description ) {
		
		register_sidebar(array(
		
			'name'	=>	__( $name ),
			'id'	=>	$id,
			'description'	=>	__( $description ),
			'before_widget'	=>	'<div class="widget">',
			'after_widget'	=>	'<div>',
			'before_title'	=>	'<h3>',
			'after_title'	=>	'</h3>'
		
		));
		
	}
	
	create_widget( 'Page Sidebar', 'page', 'Displays on the right in the sidebar column' );
	create_widget( 'Blog Sidebar', 'blog', 'Displays on the right in the blog section' );
	
	
/** CUSTOM POST TYPES AND TAXONOMIES
 * Loads custom fields fot the theme
 */
require get_template_directory() . '/inc/customfields.php';
	
/**
 * Load custom nav walker
 */
require get_template_directory() . '/inc/navwalker.php';
			
?>
