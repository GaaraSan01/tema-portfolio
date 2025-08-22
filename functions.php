<?php

require get_template_directory() . "/inc/customizer.php";

function vhportfolio_load_scripts() {
    wp_enqueue_style("vhportfolio",  get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
     // Enfileira o CSS das fontes
    // wp_enqueue_style( 'seu-tema-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1.0.0' );

    wp_enqueue_script( "vhportfolio-script", get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
}

add_action("wp_enqueue_scripts", "vhportfolio_load_scripts");

function vhportfolio_config(){

    register_nav_menus(
        array(
            "vhportfolio_main_menu" => __("Main Menu", "vhportfolio"),
            "vhportfolio_footer_menu" => __("Footer Menu", "vhportfolio")
        )
    );

    $args = array(
        "height" => 71,
        "width"  => 54
    );

    add_theme_support("custom-header", $args);
    add_theme_support( 'post-thumbnails' );
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));
}

function vhportfolio_sidebars()
{

    # widget - Project 1
    register_sidebar(
        array(
            'name' => __('Projeto 01', 'vhportfolio'),
            'id' => 'projeto-1',
            'description' => __('Primeiro projeto.', 'vhportfolio'),
            'before_widget' => '<div class="card-project">',
            'after_widget' => '</div>',
        )
    );

    # widget - Project 2
    register_sidebar(
        array(
            'name' => __('Projeto 02', 'vhportfolio'),
            'id' => 'projeto-2',
            'description' => __('Primeiro projeto.', 'vhportfolio'),
            'before_widget' => '<div class="card-project">',
            'after_widget' => '</div>',
        )
    );
}


add_action("after_setup_theme", "vhportfolio_config", 0);
add_action("widgets_init", "vhportfolio_sidebars");

if ( !function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}