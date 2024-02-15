<?php
// I created the "custom_post" custom post type in /mu-plugins instead of functions.php so it could survive a theme change

function mockup_files()
{
    wp_enqueue_style('mockup_styles', get_theme_file_uri('/css/main.min.css'), array(), rand(111, 9999), 'all');
    wp_enqueue_script('mockup_scripts', get_theme_file_uri('/js/minified/scripts.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), null);
    // I would not usually link to a cdn--I initially tried to make the nav bar with Bootstrap, but could not get it to work 
    // with Native Wordpress memus, so I uninstalled it. Then I discovered that I had a few bootstrap classes still in use.
}

function my_filter_head()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
function mockup_features()
{
    add_theme_support('title_tag');
    register_nav_menu('primary', 'Header Menu Location');
    register_nav_menu('mobile', "Header Mobile Menu");
}
function add_menu_parent_class($items)
// identify nav menu item that has children
{
    $parents = array();
    foreach ($items as $item) {
        if ($item->menu_item_parent && $item->menu_item_parent > 0) {
            $parents[] = $item->menu_item_parent;
        }
    }
    foreach ($items as $item) {
        if (in_array($item->ID, $parents)) {
            $item->classes[] = 'menu-parent-item';
        }
    }
    return $items;
}

add_action('wp_enqueue_scripts', 'mockup_files');
add_action('get_header', 'my_filter_head');
add_action('after_setup_theme', 'mockup_features');

add_filter('wp_nav_menu_objects', 'add_menu_parent_class');
