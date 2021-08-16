<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>

    <!-- CSS Link -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">

    <!-- Google Fonts: Noto Sans JP, Libre Baskerville -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(! is_front_page() ? "inner-page" : "" ); ?>>

<header>

    <!-- Search box -->
    <div id="top">
        <?php get_search_form(); ?>
    </div>

    <!-- Nav menu -->
    <nav id="site-navigation" class="main-navigation">
        <div id="mobile_nav_button">
            <button onclick="toggle_menu(this)">MENU   <span>VVV</span></button>
        </div>
        <?php 
            $args_primary = array(
                'theme_location' => 'upper',
                'items_wrap' => '<ul class="upper-nav">%3$s</ul>'
            );
            wp_nav_menu($args_primary);
        ?>
    </nav>
</header>