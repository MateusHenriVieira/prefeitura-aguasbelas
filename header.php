<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo includes_url('css/dashicons.min.css'); ?>">
</head>
<body <?php body_class(); ?>>
<div class="color-stripe">
    <div class="stripe-green"></div>
    <div class="stripe-red"></div>
    <div class="stripe-yellow"></div>
    <div class="stripe-blue"></div>
</div>

<div class="brand-header">
    <div class="overlay-bg"></div>
    <div class="container center-content">
        <a href="<?php echo home_url(); ?>" class="logo-link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGOTIPO ÀGUAS BELAS BRANCA.png" alt="Prefeitura de Águas Belas">
        </a>
    </div>
</div>

<div class="nav-bar-strip">
    <div class="container nav-flex">
        <nav class="main-nav">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav-list'
            )); ?>
        </nav>
        <div class="search-pill">
            <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                <input type="text" placeholder="BUSCAR NO SITE" value="<?php echo get_search_query() ?>" name="s" />
                <button type="submit"><span class="dashicons dashicons-search"></span></button>
            </form>
        </div>
    </div>
</div>