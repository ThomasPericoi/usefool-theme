<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="inner-header">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'menu menu-header', 'container' => false)); ?>
                <div class="menu-toggle-col">
                    <div class="menu-toggle-wrapper">
                        <input id="menu-toggle" class="menu-toggle" type="checkbox" role="button" tabindex="0" aria-label="Ouvrir le menu" />
                        <div class="menu-toggle-open" aria-hidden="true">
                            <span aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>