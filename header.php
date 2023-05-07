<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>
    
    <nav class="navbar">
        <a href="<?php echo site_url('') ?>"><div class="brand-title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cropped-black-pink-bold-elegant-monogram-personal-brand-logo.png" alt="logo"></div></a>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        
        <div class="navbar-links">
            <ul>
                <li><a class="menu-link" href="<?php echo site_url('/home') ?>"><i id="home" class="fas fa-home"></i> Home</a></li>
                <li>
                    <a href="#" id="category-btn">Categories <i id="arrow-down" class="fas fa-caret-down"></i></a>
                    <div class="dropdown-menu">
                        
                        <ul class="menu-items">
                            <li><a href="<?php echo get_category_link(3) ?>">Business</a></li>
                            <li><a href="<?php echo get_category_link(7) ?>">Technology</a></li>
                            <li><a href="<?php echo get_category_link(6) ?>">Sport</a></li>
                            <li><a href="<?php echo get_category_link(4) ?>">International student in USA</a></li>
                            <li><a href="<?php echo get_category_link(8) ?>">Travel</a></li>
                            <li><a href="<?php echo get_category_link(9) ?>">Art</a></li>
                        </ul>
                        
                    </div>
                </li>
                <li><a class="menu-link" href="<?php echo site_url('/blog') ?>">Blog</a></li>
                <li><a class="menu-link" href="<?php echo site_url('/about') ?>">About Me</li></a>
                <li><a class="menu-link" href="<?php echo site_url('/contact') ?>"><i id="phone-contact" class="fas fa-phone"></i> Contact</a></li>

            </ul>
        </div>
    </nav>
