<!DOCTYPE html>
<html <?php language_attributes() ;?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
    
    <!-- Links -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
</head>
<body <?php body_class(); ?>>
<header>
    <div class="inner_header">
    <div id="top">
        <?php get_search_form(); ?>
    </div>
    <a href="<?php echo get_home_url(); ?>">
        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="The Great Adventures logo, orange text in a nice cartoonish style." />
    </a>
    <nav id="site-navigation" class="main-navigation">
        <button class="nav-button">Toggle Navigation</button>
        <?php 
            $args_primary = array(
                'theme_location' => 'primary',
                'items_wrap' => '<ul class="primary-nav">%3$s</ul>'
            );
            wp_nav_menu($args_primary);
        ?>
    </nav>
    </div>
</header>