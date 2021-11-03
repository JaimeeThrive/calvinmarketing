<?php /* Template Name: archive-case */ ?>

<?php get_header() ?>


<div class="quadro brands">



    <?php 
                     
              if( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <div class="col-md-6 ">
        <div class="">
            <img src="<?php the_field('listing_thumbnail'); ?>" alt="">
            <div class="quadrooverlay">
                <div class="content contentheight">

                    <div class="cutch">

                        <?php
                            if( have_rows('flexible_content' , get_the_ID()) ):
                                while ( have_rows('flexible_content' ,get_the_ID()) ) : the_row();
                                
                                    if( get_row_layout() == 'news_banner' ):
                                      the_sub_field('banner_text');
                                    endif;

                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>

                    </div>
                    <div class="title"> <a class="white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="readmore-wrap"><span><img
                                src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>Read
                            More</span> <span>Read more</span></a>
                </div>
            </div>

        </div>
    </div>

    <?php            
                    endwhile;
                    wp_reset_postdata();
                    else :?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


</div>



<div class="clients" id="morebrands">
    <h4 class="tb30">More brands we work with</h4>

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


    </div>

</div>


<?php get_footer() ?>