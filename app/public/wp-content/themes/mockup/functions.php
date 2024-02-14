<?php
function mockup_files()
{
    wp_enqueue_script('mockup_scripts', get_theme_file_uri('/build/index.js'), NULL, 1.0, true);
    wp_enqueue_style('mockup_styles', get_stylesheet_uri());
}
function my_filter_head()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
function mockup_features()
{
    add_theme_support('title_tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}
function add_menu_parent_class($items)
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
