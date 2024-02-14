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




    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <div> <a href="<?php echo get_site_url() ?>">
                        <img class="header-logo" src="<?php echo get_theme_file_uri('/images/logo.svg') ?>" />
                    </a></div>
                <div><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/our-approach">Our Approach</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Industries
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/home-services">Home Services</a></li>
                                    <li><a class="dropdown-item" href="/franchise-marketing">Franchise Marketing</a></li>
                                    <li><a class="dropdown-item" href="/golf">Golf</a></li>
                                    <li><a class="dropdown-item" href="food-beverage">Food & Beverage</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about-us">About Us</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>