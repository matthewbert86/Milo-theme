<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chain Breaker Outdoors</title>

    <?php wp_head();?>
</head>
<body <?php body_class('test');?> >
    

<header>
    <!-- d-flex helps us place the logo and menu side by side -->
    <div class="headspace d-flex align-items-center justify-content-between">
    
    <img src="<?php bloginfo('template_directory');?>/images/chainlogo.png" class="img-fluid logo">

    <!-- Add menu to header -->
    <?php
        wp_nav_menu(

            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'primary-menu'
            )
        );?>

    </div>
</header>
