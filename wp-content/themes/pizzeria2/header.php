<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
        <div class="container">

        
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logoimage" alt="">
            </a>
        </div>
        <div class="header-information">
        <div class="social-menu">
            <?php 
                $args = array(
                    "theme_location"=> "social-menu",
                    "container"   => "nav",
                    "container_class" => "socials",
                    "container_id" => "socials",
                    "link_before" => "<span class='sr-text'>",
                    "link_after"   =>"</span>"
                );
                wp_nav_menu($args);
            ?>


        </div>
        <div class="address">
            <p>Nehruova No.35, 11 000 Belgrade, Serbia</p>
            <p>Phone Number: +381-64-558-555</p>
        
        </div>
        </div>
        </div>

</header>

<div class="main-menu">
    <div class="mobile-menu">
        <a href="#" class="mobile"><i class="fa fa-bars"></i> Menu</a>
    </div>

    <div class="navigation container">
        <?php 
        
            $args = array(
                "theme_location"=> "header-menu",
                "container" => "nav",
                "container_class" => "site-nav"
            );

            wp_nav_menu( $args );
        
        ?>
    </div>

</div>