<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php wp_title('-', true, 'right'); bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="description" content="<?php bloginfo('description'); ?>" />

        <link rel="stylesheet" href="<?php echo theme_url('css/reset.css'); ?>" />
        <link rel="stylesheet" href="<?php echo theme_url('css/style.css'); ?>" />
        
        <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>" />

        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <meta name="viewport" content="width=device-width" />
        
        <meta property="og:title" content="<?php bloginfo('name'); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php echo home_url('/'); ?>" />
        <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>" />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:description" content="<?php bloginfo('description'); ?>" />
        
        <?php wp_head(); ?>
    </head>
    <body>
    
        <?php get_search_form(); ?>

        <header id="top">
            <div class="wrap">
                
                <a id="logo" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    
                <nav id="main" role="navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'container' => false,
                            'fallback_cb' => 'no_wp_nav_menu',
                            'theme_location' => 'primary'
                        )
                    );
                    ?>
                </nav>
            </div>
        </header>
