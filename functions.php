<?php 

function mytheme_register_assets() {
    
	wp_enqueue_script( 
        'jquery', 
        get_template_directory_uri() . '/assets/js/jquery.min.js', 
        array(), 
        1.1, 
        true
    );

    
	wp_enqueue_script( 
        'browser', 
        get_template_directory_uri() . '/assets/js/browser.min.js', 
        array(), 
        1.1, 
        true
    );
    
	wp_enqueue_script( 
        'breakpoints', 
        get_template_directory_uri() . '/assets/js/breakpoints.min.js', 
        array(), 
        1.1, 
        true
    );

    // Déclarer le JS

        // Déclarer le JS
        wp_enqueue_script( 
            'util', 
            get_template_directory_uri() . '/assets/js/util.js', 
            array(), 
            1.1, 
            true
        );

	wp_enqueue_script( 
        'main', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array(), 
        1.1, 
        true
    );

    // fichier CSS à la racine
    wp_enqueue_style( 
        'style', 
        get_template_directory_uri(),
        array(), 
        1.1
    );

    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'main', 
        get_template_directory_uri() . '/assets/css/main.css',
        array(), 
        1.1
    );
}
add_action( 'wp_enqueue_scripts', 'mytheme_register_assets' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// configue le menu 
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );