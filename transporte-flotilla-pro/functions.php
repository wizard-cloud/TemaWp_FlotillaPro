<?php
// Activar soporte para funcionalidades básicas
function transporte_flotilla_setup() {
  add_theme_support('post-thumbnails'); // imágenes destacadas
  add_theme_support('title-tag');     // título dinámico en <head>
  add_theme_support('custom-logo');  // logo desde personalizador
  register_nav_menus( array(
    'primary' => 'Menú Principal',
  ) );
}
add_action('after_setup_theme', 'transporte_flotilla_setup');

/**
 * Enqueue theme stylesheet
 */
function transporte_flotilla_enqueue_styles() {
  // Carga style.css de la raíz del tema
  wp_enqueue_style( 'transporte-flotilla-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'transporte_flotilla_enqueue_styles' );