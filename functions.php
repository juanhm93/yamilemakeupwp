<?php 

function yamile_style(){
    wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/css/normalize.css' );
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style('style', get_stylesheet_uri());  
    wp_enqueue_script('jquery');  
    wp_enqueue_script('bootstrapjs',get_stylesheet_directory_uri().'/js/bootstrap.js', array('jquery'),'1.4.1', true );  
    
}

add_action('wp_enqueue_scripts','yamile_style');

function register_my_menus(){
    
    register_nav_menus(array(
        'principal' => __('Menu principal', 'yamilemakeup')
    ));

}

add_action('init','register_my_menus');