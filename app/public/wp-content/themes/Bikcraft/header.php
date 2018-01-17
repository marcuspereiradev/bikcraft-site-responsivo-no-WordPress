<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('description_seo'); ?>">
    
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?>"/>
    <meta property="og:description" content="<?php bloginfo('name'); ?> <?php wp_title('-'); ?> <?php the_field('title_seo'); ?>"/>
    <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <script src="js/libs/modernizr.custom.45655.js"></script>
    <!-- INÍCIO WORDPRESS HEADER-->
    <?php wp_head(); ?>
    <!-- FINAL WORDPRESS HEADER-->
</head>
<body>
    <!-- MENU -->
    <header class="header">
        <div class="container">
            <a href="/" class="grid-4"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Bikcraft"></a>
            
            <nav class="header_menu grid-12">
                <?php
                    $args = array(
                        'menu' => 'principal',
                        'theme_location' => 'menu-principal',
                        'container' => false
                    );
                    wp_nav_menu( $args );
                ?>
            </nav>
        </div>
    </header> 