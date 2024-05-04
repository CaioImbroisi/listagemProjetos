<?php
function theme_setup() {
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'defaultTheme'),
    ));
}
add_action('after_setup_theme', 'theme_setup');


function custom_theme_scripts() {
    wp_enqueue_style( 'defaultTheme-style', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0');
    wp_enqueue_script( 'defaultTheme-script', get_template_directory_uri() . '/dist/js/bundle.js', array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

function setup_default_theme() {
    $parent_theme = 'defaultTheme';
    if ( ! wp_get_theme( $parent_theme )->exists() || ! is_admin() ) {
        switch_theme( $parent_theme );
        return;
    }

    $child_theme = wp_get_theme();

    if ( 'defaultTheme' !== $child_theme->get( 'Template' ) ) {
        switch_theme( $parent_theme );
        return;
    }
}
add_action( 'after_setup_theme', 'setup_default_theme' );
