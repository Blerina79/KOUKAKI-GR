<?php
        /**
         * The header for our theme
         *
         * This is the template that displays all of the <head> section and everything up until <div id="content">
         *
         * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
         *
         * @package Fleurs_d\'oranger_&_Chats_errants
         */
        ?>
        <!doctype html>
        <html <?php language_attributes(); ?>>
        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="profile" href="https://gmpg.org/xfn/11">
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

            <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>
            <?php wp_body_open(); ?>
            <div id="page" class="site">
                <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>
                <header id="masthead" class="site-header burger">
                    <nav id="site-navigation" class="main-navigation menu-burger">
                        <ul class="menu-off">
                            <li class="site-title">
                                <h1>Fleur d'oranger & chats errants</h1>
                            </li>
                            <div class="toggle"> 
                            <button type="button" class="nav-toggle" aria-controls="primary-menu" aria-expanded="false" >
                                    <span class="line l1"></span>
                                    <span class="line l2"></span>
                                    <span class="line l3"></span>
                                </button>
                            </div>
                        </ul>
                        <div class="menu-on">
                            <div class="images-menu">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-orchidee.png'; ?> " alt="Orchidée" class="orchidee">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-flowers.png'; ?> " alt="Fleur" class="flower">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-sunflower.png'; ?> " alt="Marguerite" class="marguerite">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-hibiscus.png'; ?> " alt="Fleur hibiscus" class="hibiscus">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-randomflower.png'; ?> " alt="Fleur random" class="flower-random">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-catpurple.png'; ?> " alt="Chat mauve" class="catpurple">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-catorange.png'; ?> " alt="Chat orange" class="cat-orange">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-catgrey.png'; ?> " alt="Chat gris" class="cat-grey">

                            </div>
                            <div class="logo-menu">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/small-logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                            </div>
                            <div>
                                <ul class="burger">
                                    <li><a href="#story">Histoire</a></li>
                                    <li><a href="#character">Personnages</a></li>
                                    <li><a href="#place">Lieu</a></li>
                                    <li><a href="#studio">Studio Koukaki</a></li>
                                </ul>
                            </div>
                            <div class="footer-burger">
                                <ul class="burger-menu-footer-link">
                                    <li><a href="#colophon">STUDIO KOUKAKI</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav><!-- #site-navigation -->
                </header><!-- #masthead -->