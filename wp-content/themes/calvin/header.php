<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=https://www.googletagmanager.com/gtag/js?id=UA-189849659-1></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag(‘js’, new Date());
    gtag(‘config’, ‘UA - 189849659 - 1’);
    </script>
</head>

<body <?php body_class(); ?>>


    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <title>home</title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>


        <header class="container ">
            <div class="top-nav">
                <a href="/" class="mainlogo-wrap">
                    <img src="<?php the_field('header-logo', 'options'); ?>" alt="">
                </a>
                <div class="menudiv">


                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'topmenu',
                            'container' => false,

                        )
                    )
                  ?>

                    <div class="social">

                        <li><a href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="<?php the_field('twitter', 'options'); ?>"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="<?php the_field('linkedin', 'options'); ?>"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a></li>
                    </div>

                    <style>
                    @media only screen and (min-width: 768px) {
                        .social {
                            display: flex;
                            margin-left: 20px;
                        }

                        .social li {
                            list-style: none;
                            margin-left: 8px;
                            margin-right: 8px;
                        }

                        .menudiv {
                            display: flex;

                        }
                    }
                    </style>
                </div>
                <div class="gg ">
                    <div class="animated-icon2 "><span></span><span></span><span></span><span></span></div>
                </div>
            </div>
        </header>