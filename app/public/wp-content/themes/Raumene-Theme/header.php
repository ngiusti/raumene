<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <script src="https://kit.fontawesome.com/154550eacd.js"></script>
    </head>
    <body>
        <div class="header__banner" style="background-image: url(<?php echo get_theme_file_uri('/images/mt-saint-helens.jpg') ?>">
            <div class='header__banner--color'></div>

            <nav class="main__nav">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'headerMenuLocation'
                    ));
                ?>
            </nav>
            <div class="header__copy-wrap">
                <h1 class="header__copy">Sound Heart Integrative Counseling</h1>
                <h2 class="header__sub-copy">Hope <i class="fab fa-centos"></i> Health <i class="fab fa-centos"></i> Healing </h2>
            </div>
        </div>
        


       