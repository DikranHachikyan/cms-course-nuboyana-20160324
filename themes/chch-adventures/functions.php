<?php
/***************************************
* Functions
*
****************************************/

if( !function_exists('chch_setup')):
function chch_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', 
                      array('aside',
                            'gallery',
                            'video',
                      ));
    
}
endif;

add_action('after_setup_theme', 'chch_setup');

if(!function_exists('chch_widgets_init')):
function chch_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'chch' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<li id="%1$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Logged User Sidebar', 'chch' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<li id="%1$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
endif;

add_action('widgets_init','chch_widgets_init');

if( !function_exists('chch_add_styles_and_scripts')):
function chch_add_styles_and_scripts(){
    wp_register_script('chch-jquery', 
                       get_template_directory_uri().'/js/jquery-2.1.4.min.js',
                       array(),
                       '2.1.4',
                       true);
    wp_register_script('chch-bootstrap', 
                       get_template_directory_uri().'/js/bootstrap.min.js',
                       array('chch-jquery'),
                       '3.3.5',
                       true);
    wp_register_style('chch-bootstrap-css',
                     get_template_directory_uri().'/css/bootstrap.min.css',
                     array(),
                     '3.3.5');
    wp_register_style('chch-bootstrap-css-theme',
                     get_template_directory_uri().'/css/bootstrap-theme.min.css',
                     array('chch-bootstrap-css'),
                     '3.3.5');
    wp_register_style('chch-style',
                     get_template_directory_uri().'/style.css',
                     array('chch-bootstrap-css-theme'),
                     '1.0.1');
    wp_enqueue_script('chch-bootstrap', false, array(),false,true);
    wp_enqueue_style('chch-style',false);

}//end chch_add_styles_and_scripts
endif;

add_action('wp_enqueue_scripts', 'chch_add_styles_and_scripts');
