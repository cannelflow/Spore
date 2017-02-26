<?php

add_theme_support( 'post-thumbnails' );

// Register Sidebar
function myspore_init_widgets($id){
	register_sidebar(array(
		'name'		=> 'Main Sidebar',
		'id'		=> 'sidebar',
		'before_widget'	=> '<div class="container">',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h1>',
		'after_title'	=>	'</h1>'
	));
	
	register_sidebar(array(
		'name'		=> 'Search Area',
		'id'		=> 'sidebar-search',
		'before_widget'	=> '<div class="container">',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h1>',
		'after_title'	=>	'</h1>'
	));
	
	register_sidebar(array(
		'name'		=> 'Footer Sidebar 1',
		'id'		=> 'footer-sidebar-1',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h2>',
		'after_title'	=>	'</h2>'
	));
	
	register_sidebar(array(
		'name'		=> 'Footer Sidebar 2',
		'id'		=> 'footer-sidebar-2',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h2>',
		'after_title'	=>	'</h2>'
	));
	
	register_sidebar(array(
		'name'		=> 'Footer Sidebar 3',
		'id'		=> 'footer-sidebar-3',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=>	'<h2>',
		'after_title'	=>	'</h2>'
	));
	
}

add_action('widgets_init', 'myspore_init_widgets');

//customizer file
require_once get_template_directory().('/INC/customizer.php');

?>