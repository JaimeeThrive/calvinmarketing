<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>
<body  <?php body_class(); ?>>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <title>home</title>

    <?php wp_head(); ?> 
  </head>
  <body  <?php body_class(); ?>>

    
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
              
              <li ><a href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li ><a href="<?php the_field('twitter', 'options'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li ><a href="<?php the_field('linkedin', 'options'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </div> 
          </div>
          <div class="gg ">
            <div class="animated-icon2 "><span></span><span></span><span></span><span></span></div>
          </div>
        </div>
      </header>
    
    