<?php
// Functions.php
// This is the file for managing various WordPress functions. Registering menus, setting up filters, things like that.

// This function sets the excerpt length for this website, right here it's set to 50 words.
function my_excerpt_length($length){
    return 50;
}
add_filter('excerpt_length', 'my_excerpt_length', 999);

// This function activates the thumbnail option for posts, allowing you to set a featured image for a post.
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150);

// This function registers nav menus, allowing you to set them up in WordPress's GUI
register_nav_menus(array(
    'upper' => 'Upper Nav Menu',
    'footer' => 'Footer Nav Menu'
));

//Page Slug Body Class - Adds the page slug to the body as a class, makes styling easier
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
add_filter('widget_text', 'do_shortcode');

// Gets rid of extra p tags
remove_filter('the_content', 'wpautop');

// Enqueue Scripts - Need to queue up each script
// function my_theme_scripts() {
//     wp_enqueue_script( 'robin', get_template_directory_uri() . '/js/robin_nav_menu.js', '1.0.0', false );
// }
// add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

// Register Sidebars - Need one block for each sidebar
function site3_widgets_init(){
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar AA1', 'site1'),
            'id' => 'sidebar-aa1',
            'description' => esc_html__('The sidebar for AA1', 'site1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Blog Sidebar', 'site1'),
            'id' => 'sidebar-blog',
            'description' => esc_html__('The sidebar for the blog', 'site1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer Sidebar', 'site1'),
            'id' => 'sidebar-footer',
            'description' => esc_html__('The sidebar for the footer', 'site1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>'
        )
    );
}
add_action( 'widgets_init', 'site3_widgets_init' );
