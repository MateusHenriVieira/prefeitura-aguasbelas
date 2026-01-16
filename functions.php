<?php
function carregar_scripts() {
    wp_enqueue_style('style-tema', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'carregar_scripts');

function setup_tema() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(array('primary' => 'Menu Principal'));
}
add_action('after_setup_theme', 'setup_tema');

// CPT Licitações
function registrar_licitacoes() {
    register_post_type('licitacao', array(
        'labels' => array('name' => 'Licitações', 'singular_name' => 'Licitação'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor', 'custom-fields'),
        'rewrite' => array('slug' => 'licitacoes'),
    ));
}
add_action('init', 'registrar_licitacoes');