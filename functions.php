<?php


// Default Setup
function ebit_theme_init(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('post_img', 500, 400, true);
	add_theme_support('html5');


//menu
register_nav_menus(array(
	'main_menu' => 'Main Menu'

));

} add_action('after_setup_theme', 'ebit_theme_init');

// Style & JS files
function ebit_css_js_files(){

	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', null, '4.0.0', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/fontawesome/css/fontawesome-all.min.css', null, '5.0.10', 'all');
	wp_enqueue_style('main', get_template_directory_uri().'/css/main.css', null, '1.0.0', 'all');
	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap.bundle', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array('jquery'), '4.0.0', true);
	wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0', true);

} add_action('wp_enqueue_scripts', 'ebit_css_js_files');

// Widgets
function ebit_widgets(){
	register_sidebar(array(
		'name' => 'First Widget',
		'id' => 'first_widget'
	));
} add_action('widgets_init', 'ebit_widgets');


function ebit_custom_posts(){
	register_post_type('ebit_prodect', array(
		'labels' => array(
			'name' => ' Ebit Product',
			'all_items' => 'All Products',
			'add_new' => 'Add New Product',
			'add_new_item' => 'Add New Product'

		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields')
	));

} add_action('init', 'ebit_custom_posts');

