
<?php
// Register cpt in mu-plugins so it will persist if the theme is changed
function mockup_post_types()
{
    register_post_type('custom_post', array(
        'public' => true,
        'labels' => array(
            'name' => 'Custom Posts',
            'add_new_item' => "Add New Custom Post",
            'new_item' => 'New Custom Post',
            'edit_item' => 'Edit Custom Post',
            'all_items' => 'All Custom Posts',
            'singular_name' => 'Custom Post'
        ),
        'menu_icon' => 'dashicons-star-filled'
    ));
}
add_action('init', 'mockup_post_types');
