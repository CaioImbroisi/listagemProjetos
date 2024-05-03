<?php
// Adiciona suporte a menus
function theme_setup() {
    add_theme_support('menus');
    // Registra um menu de navegação
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'defaultTheme'),
    ));
}
add_action('after_setup_theme', 'theme_setup');


function custom_theme_scripts() {
    // Estilos
    wp_enqueue_style( 'defaultTheme-style', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0');

    // Scripts
    wp_enqueue_script( 'defaultTheme-script', get_template_directory_uri() . '/dist/js/bundle.js', array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );

/**
 * Define o tema filho.
 */
function setup_default_theme() {
    // Define o tema pai
    $parent_theme = 'defaultTheme';

    // Verifica se o tema pai está instalado e ativo
    if ( ! wp_get_theme( $parent_theme )->exists() || ! is_admin() ) {
        switch_theme( $parent_theme );
        return;
    }

    // Define o tema filho
    $child_theme = wp_get_theme();

    if ( 'defaultTheme' !== $child_theme->get( 'Template' ) ) {
        switch_theme( $parent_theme );
        return;
    }
}
add_action( 'after_setup_theme', 'setup_default_theme' );
