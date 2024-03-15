<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body data-barba="wrapper">
    <div class="transitionOut">
        <div id="menuTitleDisplay" class="menu-name-text"></div>
    </div>
    <div class="topmenu">

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'left-menu',
                'menu_class' => 'left-bar',
            )
        );

        wp_nav_menu(
            array(
                'theme_location' => 'right-menu',
                'menu_class' => 'top-bar',
            )
        );
        ?>

    </div>
    <?php
    $burger       = get_field('menu_pic');
    $close_burger = get_field('close_menu_pic');
    $menu         = $burger['sizes']['cstm_size'];
    $close        = $close_burger['sizes']['cstm_size']; ?>
    <div class="burger">
        <button class="burger-button" id="burger-button"><img src="<?php echo $menu; ?>"></button>
        <button class="burger-button" id="close-button"><img src="<?php echo $close; ?>"></button>
    </div>
    <div class="sidebar-container">
        <div class="sidebar">
            <div class="row">
                <div class="col-md-12">
                    <div class="sidebar-menus">
                        <h5 class="side-bar-header">NAVIGATION
                            <hr>
                        </h5>
                        <div class="navmenus-sb">
                            <?php

                            wp_nav_menu(
                                array(
                                    'theme_location' => 'right-menu',
                                    'menu_class' => 'side-bar-menu'
                                )
                            );
                            ?>
                        </div>

                        <div class="spacer2"></div>
                        <h5 class="side-bar-header">SOCIALS</h5>
                        <div class="sidebar-socials">
                            <ul>
                                <li><a href="https://www.instagram.com/lei_ooooo/" target="_blank">Instagram</a></li>
                                <li><a href="https://www.facebook.com/Leio.elvambuena" target="_blank">Facebook</a></li>
                                <li><a href="https://www.linkedin.com/in/leonard-jay-elvambuena-4671912a2/" target="_blank">LinkedIn</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <main data-barba="container" data-barba-namespace="home">