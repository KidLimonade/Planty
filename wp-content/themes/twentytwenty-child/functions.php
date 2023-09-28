<?php

// Scripts loading action
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {

    // Load parent theme style.css
    wp_enqueue_style(
        'parent-style', 
        get_template_directory_uri() . '/style.css'
    );

    // Load planty child theme main css file
    wp_enqueue_style(
        'planty-style',
        get_stylesheet_directory_uri() . '/css/planty.css',
        array(),
        filemtime(get_stylesheet_directory() . '/css/planty.css')
    );
}

// Widgets Loading
require_once(__DIR__ . '/widgets/planty-gout-widget.php');

add_action('widgets_init', 'planty_register_widgets');
function planty_register_widgets() {
    register_widget('Planty_Gout_Widget');
}

/**
 * Manage primary nav menu items according
 * to the WordPress admin login status 
 */
add_filter("wp_nav_menu_items", 'planty_header_nav_menu', 10, 2);
function planty_header_nav_menu($items, $args) {

    // Only if logged in and primary menu
    if (is_user_logged_in() && $args->theme_location == 'primary') {

        // Menu string splitted into array of menu item strings
        $split_pattern = '<li ';
        $menu_items = explode($split_pattern, $items);
        $nb_menu_items = count($menu_items);

        // Admin menu item added just before last menu item
        $new_items = array_slice($menu_items, 0, $nb_menu_items - 1);
        $site_url = get_bloginfo('wpurl');
        $new_items[] =
            'class="menu-item">' .
                '<a href="' . $site_url . '/wp-admin">' . 
                    'Admin' .
                '</a>' .
            '</li>';

        // Last menu item added
        $new_items[] = $menu_items[$nb_menu_items - 1];

        // Array of menu item strings joined into menu string
        $items = implode($split_pattern, $new_items);
    }
    
    return $items;
}