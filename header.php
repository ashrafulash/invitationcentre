<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="<?php header_image(); ?>" type="image/gif" sizes="16x16">   
    <title> <?php bloginfo('name')?> | <?php bloginfo('description') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

<nav class="navbar-default" id="site-nav" role="navigation">
    <div class="row no-gutter mx-0">
        <div class="col-lg-4 col-md-3" id="d-none">
                <div class="navbar-default__logo">
                <?php

                    if(get_header_image()){
                    ?>
                        <img src="<?php header_image() ?>" alt="<?php bloginfo('name') ?>">
                    <?php
                    }
                ?>
                <h1><?php bloginfo('name') ?></h1>
            </div>
        </div>
        <div class="col-lg-7 col-md-11 col-sm-10 text-right">
            <div class="nav-menu">
                <?php
                    $defaults = array(
                        'menu'            => 'default-menu',
                        'container'       => 'div',
                        'container_class' => 'default-navbar',
                        'container_id'    => '',
                        'menu_class'      => 'menu-panel',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'item_spacing'    => 'preserve',
                        'depth'           => 0,
                        'walker'          => '',
                        'theme_location'  => '',
                    );

                    wp_nav_menu($defaults);
                ?>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-2">
            <button class="e-btn sidebar-btn"><i class="fas fa-sliders-h"></i></button>
        </div>
    </div>
</nav>