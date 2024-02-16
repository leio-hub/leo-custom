<?php 


//Load CSS

function load_css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
        array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('slick', get_template_directory_uri(). '/slick/slick-theme.css' ,
    array() , false, 'all');
    wp_enqueue_style('slick');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css',
        array(), false, 'all' );
    wp_enqueue_style('main');
    
}

add_action('wp_enqueue_scripts', 'load_css');


//Load JS
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js' ,
        array('jquery'), false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('slick', get_template_directory_uri(). '/slick/slick.min.js' ,
        array('jquery'), false, true);
    wp_enqueue_script('slick');

    wp_register_script('gsap', get_template_directory_uri() . '/node_modules/gsap/dist/gsap.min.js', array('jquery'), false, true);
    wp_enqueue_script('gsap');
    
    wp_register_script('scroll-trigger', get_template_directory_uri() . '/node_modules/gsap/dist/ScrollTrigger.min.js', array('gsap'), false, true);
    wp_enqueue_script('scroll-trigger');
    
    wp_register_script('lenis', get_template_directory_uri() . '/node_modules/@studio-freight/lenis/dist/lenis.min.js', array('jquery'), false, true);
    wp_enqueue_script('lenis');
    
    wp_register_script('split-type', get_template_directory_uri() . '/node_modules/split-type/dist/index.js', array('jquery'), false, true);
    wp_enqueue_script('split-type');

    // Register Barba.js script
    wp_register_script('barbajs', 'https://cdn.jsdelivr.net/npm/@barba/core', array(), false, true);
    // Enqueue Barba.js script
    wp_enqueue_script('barbajs');

    
    wp_register_script('custom', get_template_directory_uri(). '/js/custom.js' ,
        array('jquery'), false, true);
    wp_enqueue_script('custom');

    

    
}

add_action('wp_enqueue_scripts', 'load_js');


//Theme Options
add_theme_support ('menus');

//Menus
register_nav_menus(

        array(

            'right-menu' =>'Right Menu Location',
            'left-menu' =>'Left Menu Location',

        )

);


//Image Sizes
add_image_size('cstm_size', 500, 500, true);