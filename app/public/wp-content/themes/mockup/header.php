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

    <nav class="navbar ">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <div> <a href="<?php echo get_site_url() ?>">
                    <img class="header-logo" src="<?php echo get_theme_file_uri('/images/logo.svg') ?>" />
                    <img class="small-header-logo" src="<?php echo get_theme_file_uri('/images/logo-small.svg') ?>" />
                </a>
            </div>
            <div>
                <div class="rendered-navbar">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary'
                    )) ?>
                </div>
                <div class="hamburger-menu">
                    <button class="hamburger" aria-label="Toggle Menu">&#9776;</button>

                </div>
            </div>

    </nav>
    <div class="mobile-menu-breakout">
        <div class="mobile-menu">
            <ul>
                <?php wp_nav_menu(array(
                    'theme_location' => 'mobile'
                )) ?>
            </ul>
        </div>
    </div>