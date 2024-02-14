<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo get_theme_file_uri('/images/favicon.png'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <div class="header">
        <a href="<?php echo get_site_url() ?>">
            <img class="header-logo" src="<?php echo get_theme_file_uri('/images/logo.svg') ?>" />
        </a>
        <nav class="main-navigation"><?php wp_nav_menu('headerMenuLocation'); ?></nav>
    </div>