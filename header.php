<?php
/**
 * The header for Resume Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head();?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header class="section-flex-header padding-x2">
        <div class="section-flex-row">
         <img src="./inc/images/logo icon.png" height="40%" ></img>
            <div class="section-flex-column">
                <a href="<?php echo get_home_url(); ?>">
                    <h1 class="fs-small fc-dark fw-bold"><?php echo get_bloginfo('name'); ?></h1>
                    <p class="fs-x-small fc-medium fw-regular"><?php echo get_bloginfo('description'); ?></p>
                </a>
            </div>
        </div>

        <div class="nav-wrapper">
            <button class="mobile-nav" aria-controls="header-nav" aria-expanded="false">
                <i class="fa-solid fa-bars icon-hamburguer" aria-hidden="true"></i>
                <i class="fa-solid fa-xmark icon-close" aria-hidden="true"></i>
                <span class="visually-hidden">Menu</span>
            </button>
            
            <nav class="header-nav" id="header-nav">
                <ul role="list" class="nav-list">

                 <!-- Check for Class Walkers {} -->

                    <?php wp_nav_menu (
                        array (
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'item_wrap' => '<li class="fs-x-small fc-dark fw-medium">%3$s</li>'
                        )
                        ); ?>

<!--                         

                    <li class="fs-x-small fc-dark fw-medium">
                        <a href="./about.html" class="">About</a>
                    </li>
                    <li class="fs-x-small fc-dark fw-medium">
                        <a href="./blog.html" class="">Blog</a>
                    </li>
                    <li class="fs-x-small fc-dark fw-medium">
                    <a href="./projects.html" class="">Projects</a>
                    </li>
                    <li class="fs-x-small fc-dark fw-medium">
                        <a href="" class=""><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li> -->
                </ul>
            </nav>
        </div>
        
    </header>