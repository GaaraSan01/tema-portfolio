<?php 

function vhportfolio_customizer($wp_customize){

    # Adicionando seção ao customizer
    $wp_customize->add_section(
        "sec_hero",
        array(
            "title" => "Sessão Principal", "vhportfolio"
        )
    );

    # Configurando configurando sessão do customizer
    $wp_customize->add_setting(
        "set_hero_title",

        array(
            "label" => "theme_mod",
            "default" => "Por favor, adicione o titulo", "vhportfolio",
            "sanitize_callback" => "sanitize_text_field" 
        )
    );

    # Configurando os campos do customizer
    $wp_customize->add_control(
        "set_hero_title",

        array(
            'label' => 'Hero Titulo', 'vhportfolio',
            'description' => 'Por favor, digite seu titulo', 'vhportfolio',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    # Botão 1 - Hero

    $wp_customize->add_setting(
        'set_hero_textbutton_1',
        array(
            'type' => 'theme_mod',
            'default' => 'Learn More', 'vhportfolio',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_textbutton_1',
        array(
            'label' => 'Texto do botão 1', 'vhportfolio',
            'description' => 'Por favor, informe o texto do botão', 'vhportfolio',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    # Link Botão 1 - Hero 
    $wp_customize->add_setting(
        'set_hero_button_link_1',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        'set_hero_button_link_1',
        array(
            'label' => 'Link do botão 1', 'vhportfolio',
            'description' => 'Por favor, coloque o link no botão', 'vhportfolio',
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    # Botão 2 - Hero

    $wp_customize->add_setting(
        'set_hero_textbutton_2',
        array(
            'type' => 'theme_mod',
            'default' => 'Learn More', 'vhportfolio',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    $wp_customize->add_control(
        'set_hero_textbutton_2',
        array(
            'label' => 'Texto do botão 2', 'vhportfolio',
            'description' => 'Por favor, informe o texto do botão', 'vhportfolio',
            'section' => 'sec_hero',
            'type' => 'text'
        )
    );

    # Link Botão 2 - Hero 
    $wp_customize->add_setting(
        'set_hero_button_link_2',
        array(
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    $wp_customize->add_control(
        'set_hero_button_link_2',
        array(
            'label' => 'Link do botão 2', 'vhportfolio',
            'description' => 'Por favor, coloque o link no botão', 'vhportfolio',
            'section' => 'sec_hero',
            'type' => 'url'
        )
    );

    # Sessão hero background

    $wp_customize->add_setting(
        "set_hero_background",
        array(
            "type" => "theme_mod",
            "sanitize_callback" => "absint"
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            "set_hero_background",
            array(
                "label" => "Background Sessão", "vhportfolio",
                "section" => "sec_hero",
                "mine_type" => "image"
            )
        )
    );

    # Sessão soluções background
    # Adicionando seção ao customizer
    $wp_customize->add_section(
        "sec_solution",
        array(
            "title" => "Sessão Solução", "vhportfolio"
        )
    );

    $wp_customize -> add_setting(
        "solution_background",
        array(
            "type" => "theme_mod",
            "sanitize_callback" => "absint"
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            "solution_background",
            array(
                "label" => "Background sessão Soluções", "vhportifolio",
                "section" => "sec_solution",
                "mine_type" => "image"
            )
        )
    );
    
}

add_action("customize_register", "vhportfolio_customizer");