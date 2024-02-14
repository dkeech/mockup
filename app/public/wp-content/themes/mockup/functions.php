<?php
function mockup_files()
{
    wp_enqueue_style('mockup_styles', get_stylesheet_uri());
}
function my_filter_head()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('wp_enqueue_scripts', 'mockup_files');
add_action('get_header', 'my_filter_head');
