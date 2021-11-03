<?php /* Template Name: agency */ ?>

<?php get_header() ?>




<div class="banner">
    <img src="<?php the_field('banner_image'); ?>" alt="">
    <img class="banner_image_mobile" src="<?php the_field('banner_image_mobile'); ?>" alt="image">
    <div class="b-content">
        <div class="container">
            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>

            <?php   endwhile; endif; ?>
        </div>
    </div>
    <a href="#arrowpoint" class="arrow-wrap">
        <img src="<?php the_field('banner_arrow', 'options'); ?>" alt="">
    </a>
</div>
<div class="subbanner container " id="arrowpoint">
    <h4><?php the_field('subbanner_title'); ?></h4>
    <p class="al25">
        <?php the_field('subbanner_text'); ?>
    </p>
</div>
<div class="agency-bot-ban " style="background-image: url(<?php the_field('bottom_banner'); ?>);">
    <div class="container">
        <h4 class="white"><?php the_field('bottom_banner_title'); ?></h4>
        <p class="al25l">
            <?php the_field('bottom_banner_text'); ?>
        </p>
    </div>
</div>
<div class="subbanner container agency-s">
    <h4><?php the_field('subbottombanner_title'); ?></h4>
    <p class="al25">
        <?php the_field('subbottombanner_text'); ?>
    </p>
</div>

<div class="container-fluid two-col">

    <?php

            $count = 1;

            if (have_rows('two_column_repeater')):
            while (have_rows('two_column_repeater')) : the_row();
          ?>

    <div class="row" id="row<?php echo $count ?>">
        <div class="col-auto ">
            <img src="<?php the_sub_field('image'); ?>" alt="">

        </div>
        <div class="col-auto ">
            <div class="img-wrap ">
                <img src="<?php the_sub_field('icon'); ?>" alt="">
            </div>
            <h5><?php the_sub_field('title'); ?></h5>
            <p>
                <?php the_sub_field('text'); ?>
            </p>

        </div>
    </div>

    <?php $count++ ;  ?>

    <?php endwhile; else : endif; ?>

</div>

<div class="clients">
    <h4 class="tb30">Our clients</h4>

    <div class="container ">
        <div class="client-carousel owl-carousel owl-theme">

            <?php
if (have_rows('brands_logos', 'options')):
while (have_rows('brands_logos', 'options')) : the_row();

$link = get_sub_field('link', 'options');

if($link):
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
endif;            
?>

            <div class="item ">
                <div>
                    <?php 
if($link) :?>
                    <a href="<?php echo $link_url; ?>" target="<?php echo $link_target ?>"><img
                            src="<?php the_sub_field('logo', 'options'); ?>" alt=""></a>
                    <?php 
else:?>
                    <div style="display:flex;flex-direction:column;justify-content:center;"><img
                            style="max-height:132px; width: auto; max-width: 100%;margin: auto;"
                            src="<?php the_sub_field('logo', 'options'); ?>" alt=""></div>
                    <?php endif;?>
                </div>

            </div>

            <?php endwhile; else : endif; ?>

        </div>
        <a href="<?php the_field('see_our_work'); ?>" class="readmore-wrap agencyread"><span><img
                    src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>See our work</span>
            <span>See our work</span></a>
    </div>

</div>
<div class="h-line"></div>


<?php get_footer() ?>