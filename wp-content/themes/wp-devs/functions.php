<?php

    function fictionalportofolio_load_scripts() {
        wp_enqueue_style('fictionalportofolio-style', get_stylesheet_uri(), array(), filemtime (get_stylesheet_directory(). '/style.css'), 'all');
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet', array(), null);
        wp_enqueue_script('dropdown', get_template_directory_uri() .'/js/dropdown.js', array(), '1.0', true);
    }
    add_action ('wp_enqueue_scripts', 'fictionalportofolio_load_scripts');

    register_nav_menus(
        array(
            'fictional_portofolio_main_menu' => 'Main Menu',
            'fictional_portofolio_footer_menu' => 'Footer Menu',
        )
    );