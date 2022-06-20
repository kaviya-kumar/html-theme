
<?php
// style appliying
wp_enqueue_style('style', get_stylesheet_uri());
function nav_menus()
{


    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',

        'footer' => 'footer Menu Location',
    );
    register_nav_menus($locations);
}
add_action('init', 'nav_menus');
function load_stylesheet()
{

    wp_register_style('font', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('styles', get_template_directory_uri() . '/css/templatemo-xtra-blog.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('custom', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheet');




function add_featured_image_support_to_your_wordpress_theme()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme');

// add_filter('wp_pagenavi_class_previouspostslink', 'theme_pagination_previouspostslink_class');
// add_filter('wp_pagenavi_class_nextpostslink', 'theme_pagination_nextpostslink_class');
// add_filter('wp_pagenavi_class_page', 'theme_pagination_page_class');

// function theme_pagination_previouspostslink_class($class_name)
// {
//     return 'pagination__control-link pagination__control-link--previous';
// }

// function theme_pagination_nextpostslink_class($class_name)
// {
//     return 'pagination__control-link pagination__control-link--next';
// }

// function theme_pagination_page_class($class_name)
// {
//     return 'pagination__current-page';
// }


function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    if (isset($args->active_class) && in_array('current-menu-item', $classes)) {
        $classes[] = $args->active_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_anchor_class($attr, $item, $args)
{
    if (isset($args->a_class)) {
        $attr['class'] = $args->a_class;
    }
    return $attr;
}
add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);
