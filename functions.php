<?php

//Load CSS
function load_css()
{
    wp_register_style(
        'Montserrat',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('Montserrat');

    wp_register_style(
        'bootstrap',
        get_template_directory_uri() . '/css/bootstrap.min.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('bootstrap');

    wp_register_style(
        'slick',
        get_template_directory_uri() . '/slick/slick-theme.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('slick');

    wp_register_style(
        'atropos-css',
        get_template_directory_uri() . '/node_modules/atropos/atropos.scss',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('atropos-css');

    wp_register_style(
        'main',
        get_template_directory_uri() . '/css/main.css',
        array(),
        false,
        'all'
    );
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//Load JS
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script(
        'bootstrap',
        get_template_directory_uri() . '/js/bootstrap.min.js',
        array('jquery'),
        false,
        true
    );
    wp_enqueue_script('bootstrap');

    wp_register_script(
        'slick',
        get_template_directory_uri() . '/slick/slick.min.js',
        array('jquery'),
        false,
        true
    );
    wp_enqueue_script('slick');

    wp_register_script(
        'gsap',
        get_template_directory_uri() . '/node_modules/gsap/dist/gsap.min.js',
        array('jquery'),
        false,
        true
    );
    wp_enqueue_script('gsap');

    wp_register_script(
        'scroll-trigger',
        get_template_directory_uri() . '/node_modules/gsap/dist/ScrollTrigger.min.js',
        array('gsap'),
        false,
        true
    );
    wp_enqueue_script('scroll-trigger');

    wp_register_script(
        'lenis',
        get_template_directory_uri() . '/node_modules/@studio-freight/lenis/dist/lenis.min.js',
        array('jquery'),
        false,
        true
    );
    wp_enqueue_script('lenis');

    wp_register_script(
        'split-type',
        get_template_directory_uri() . '/node_modules/split-type/dist/index.js',
        array('jquery'),
        false,
        true
    );
    wp_enqueue_script('split-type');

    wp_register_script(
        'barbajs',
        'https://cdn.jsdelivr.net/npm/@barba/core',
        array(),
        false,
        true
    );
    wp_enqueue_script('barbajs');

    wp_register_script(
        'atropos',
        get_template_directory_uri() . '/node_modules/atropos/atropos.min.js',
        array('jquery'),
        false,
        true
    );
    wp_enqueue_script('atropos');

    wp_register_script(
        'custom',
        get_template_directory_uri() . '/js/custom.js',
        array('jquery'),
        false,
        true
    );
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');

//Theme Options
add_theme_support('menus');

//Menus
register_nav_menus(

    array(
        'right-menu' => 'Right Menu Location',
        'left-menu'  => 'Left Menu Location',
        'home-menu'  => 'Home Menu',
    )
);

//Image Sizes
add_image_size('cstm_size', 700, 700, true);

require_once get_template_directory() . '/vendor/autoload.php';

$banner = new StoutLogic\AcfBuilder\FieldsBuilder('banner');
$banner
    ->addText('user_name')
    ->addImage('profile_pic')
    ->addRepeater('text_areas', [
        'label' => 'Text Areas',
        'layout' => 'table',
        'button_label' => 'Add Row',
    ])
    ->addTextArea('text', [
        'label' => 'Text',
    ])
    ->endRepeater()
    ->addLink('circle_button_name', [
        'label' => 'Circle Button Name',
        'returnFormat' => 'array', // Change the return format to URL
    ])
    ->addText('list_button_name')
    ->addRepeater('list_items', [
        'label' => 'Text Areas',
        'layout' => 'table',
        'button_label' => 'Add Row',
    ])
    ->addText('recent_works', [
        'label' => 'Recent Works',
    ])

    ->addImage('list_images', [
        'label' => 'Image in List in-order',
    ])
    ->addText('type_of_work', [
        'label' => 'Type of Work',
    ])
    ->endRepeater()
    ->addRepeater('job_description')
    ->addText('hobby')
    ->endRepeater()
    ->addGallery('my_drawings', [
        'label' => 'My Drawings',
        'returnFormat' => 'array',
        'library' => 'all'
    ])
    ->addImage('menu_pic')
    ->addImage('close_menu_pic')
    ->addText('contact_number')
    ->addText('email_address')
    ->addImage('atropos')

    ->addRepeater('work_contents')
    ->addFile(
        'capstone_vid',
        [
            'return_format' => 'url'
        ]
    )
    ->addRepeater('tech_icons_pic')
    ->addImage('tech_icons')
    ->endRepeater()
    ->endRepeater()
    ->setLocation('post_type', '==', 'page')
    ->or('post_type', '==', 'post');
add_action('acf/init', function () use ($banner) {
    acf_add_local_field_group($banner->build());
});

    // $work = new StoutLogic\AcfBuilder\FieldsBuilder('work');
    // $work
    //     ->addRepeater('list_items', [
    //         'label' => 'Text Areas',
    //         'layout' => 'table',
    //         'button_label' => 'Add Row',
    //     ])
    //     ->addText('recent_works', [
    //         'label' => 'Recent Works',
    //     ])

    //     ->addImage('list_images', [
    //         'label' => 'Image in List in-order',
    //     ])
    //     ->addText('type_of_work', [
    //         'label' => 'Type of Work',
    //     ])
    //     ->endRepeater()
    //     ->addImage('menu_pic')
    //     ->addImage('close_menu_pic')
    //     ->addImage('atropos')
    //     ->setLocation('page_template', '==', 'template-work.php');

    // add_action('acf/init', function () use ($work) {
    //     acf_add_local_field_group($work->build());
    // });
