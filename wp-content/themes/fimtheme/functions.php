<?php
/**
 * SUPPORT CHILD THEME CSS
 */

// SECURITY
defined('ABSPATH') || exit;

// SET DEFAULT THEME SUPPORT
if ( !function_exists('fim_theme_support') ) :
    function fim_theme_support() {
        
        // DECLARE THUMBNAILS
        add_theme_support( 'post-thumbnails' );

        // MY CUSTOMS THUMBNAILS
        add_image_size( 'custom-thumb', 350, 200, array( 'center', 'center' ) );
        add_image_size( 'single-thumb', 825, '', array( 'center', 'center' ) );

        // ACTIVE DYNAMIC TITLE IN TEMPLATE
        add_theme_support( 'title-tag' );

        // Allows the use of HTML5 markup for the search forms, comment forms, comment lists, gallery, and caption
        add_theme_support(
            'html5',
            array(
                'comment-list',
                'comment-form',
                'search-form',
                'gallery',
                'caption',
                'style',
                'script' 
                )
        );
        
        // Add Selective Refresh Widgets
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Register Menu
        register_nav_menus( array(
            'menu-1' => __( 'Main Menu', 'fimtheme' ),
            'footer'  => __( 'Footer Menu', 'fimtheme' ),
        ) );


    }
endif;
add_action( 'after_setup_theme', 'fim_theme_support' );

// LOAD CSS
function fim_theme_style() { 
    // BOOTSTRAP CSS STYLE
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.1', 'all' );
    wp_enqueue_style( 'bootstrap-css' );
   
    // fontawesome CSS STYLE
    if ( is_single() ){
        wp_register_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/fontawesome.min.css', false, '5', 'all' );
        wp_enqueue_style( 'fontawesome-css' );
    }

    // DEFAULT WP CSS STYLE
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fim_theme_style' );

// LOAD JS
function fim_theme_script() { 
    // JQUERY SCRIPT
    wp_register_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.5.1.slim.min.js', false, '3.5.1', true );
    wp_enqueue_script( 'jquery-js' );

    // BOOTSTRAP SCRIPT
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', false, '4', true );
    wp_enqueue_script( 'bootstrap-js' );
}
add_action( 'wp_enqueue_scripts', 'fim_theme_script' );

// Register widget area
function fim_widgets_init() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'name'          => __( 'Lateral', 'fimtheme' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Ajouter des widgets aux pages article', 'fimtheme' ),
            'before_widget' => '<div id="%1$s" class="widget-sidebar widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="sidebar-title">',
            'after_title'   => '</h5>',
        )
    );
}
add_action( 'widgets_init', 'fim_widgets_init' );


// Limite title lenght
function max_title_length( $title ) {
    $max = 55;
    if( strlen( $title ) > $max && is_single() || is_page() ) {
        return substr( $title, 0, $max ). " &hellip;";
    } elseif ( strlen( $title ) > 45 && is_home() ) {
        return substr( $title, 0, 45 ). " &hellip;";
    } else {
        return $title;
    }
    }
add_filter( 'the_title', 'max_title_length');

// Remove admin bar in front
add_filter('show_admin_bar', '__return_false');

// Disable the emoji's
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
   }
   add_action( 'init', 'disable_emojis' );

// Disable Gutenberg on specific pages
function disable_gutenberg ($is_enabled) {
    global $post;
    if ( $post->ID == 17 ) return false;

    return $is_enabled;
}
add_filter( 'use_block_editor_for_post_type', 'disable_gutenberg', 10, 2 );

// Login/logout in menu
function login_logout_link_in_menu( $items, $args  ) {
    if( $args->theme_location == 'footer' && ! is_user_logged_in() ) {
        $loginoutlink = wp_loginout( 'wp-admin', false );
        $items .= '<li class="menu-item">'. $loginoutlink .'</li>';
        return $items;
    } else if( $args->theme_location == 'footer' && is_user_logged_in() ) {
        $loginoutlink = wp_loginout( 'index.php', false );
        $adminlink = '<a href="'. admin_url() .'">admin</a>';
        $items .= '<li class="menu-item">'. $adminlink .'</li>';
        $items .= '<li class="menu-item">'. $loginoutlink .'</li>';
        return $items;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'login_logout_link_in_menu', 10, 2 );

// Custom excerpt lenght
function custom_excerpt_length( $length ) {
    if ( is_home() ){
        return 18;
    } else {
        return 55;
    }
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );