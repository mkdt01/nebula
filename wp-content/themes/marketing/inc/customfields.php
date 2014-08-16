<?php
/*These are all the deault custom post types and taxanomies needed 
*
**/


//Sections appear on the front page
add_action('init', 'cptui_register_my_cpt_sections');
function cptui_register_my_cpt_sections() {
register_post_type('sections', array(
'label' => 'Sections',
'description' => 'Sections appear on the front-page',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'sections', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Sections',
  'singular_name' => 'Section',
  'menu_name' => 'Sections',
  'add_new' => 'Add Section',
  'add_new_item' => 'Add New Section',
  'edit' => 'Edit',
  'edit_item' => 'Edit Section',
  'new_item' => 'New Section',
  'view' => 'View Section',
  'view_item' => 'View Section',
  'search_items' => 'Search Sections',
  'not_found' => 'No Sections Found',
  'not_found_in_trash' => 'No Sections Found in Trash',
  'parent' => 'Parent Section',
)
) ); }

//portfolio
add_action('init', 'cptui_register_my_cpt_portfolio');
function cptui_register_my_cpt_portfolio() {
register_post_type('portfolio', array(
'label' => 'Portfolio',
'description' => 'This includes the portfolio to show the clients work',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'portfolio', 'with_front' => true),
'query_var' => true,
'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
'labels' => array (
  'name' => 'Portfolio',
  'singular_name' => 'Portfolio piece',
  'menu_name' => 'Portfolio',
  'add_new' => 'Add Portfolio piece',
  'add_new_item' => 'Add New Portfolio piece',
  'edit' => 'Edit',
  'edit_item' => 'Edit Portfolio piece',
  'new_item' => 'New Portfolio piece',
  'view' => 'View Portfolio piece',
  'view_item' => 'View Portfolio piece',
  'search_items' => 'Search Portfolio',
  'not_found' => 'No Portfolio Found',
  'not_found_in_trash' => 'No Portfolio Found in Trash',
  'parent' => 'Parent Portfolio piece',
)
) ); }

//custom Taxonomy for Portfolio

	//register custom Taxonomy
	function portfolio_taxonomy() {
		// create a new taxonomy
		register_taxonomy(
			'category',
			'portfolio',
			array(
				'label' => __( 'Category' ),
			)
		);
	}
	add_action( 'init', 'portfolio_taxonomy' );