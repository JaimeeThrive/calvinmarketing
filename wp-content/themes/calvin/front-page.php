

<?php get_header() ?>




<div class="banner">
  <img src="<?php the_field('top_banner'); ?>" alt="">
    <img class="banner_image_mobile" src="<?php the_field('banner_image_mobile'); ?>" alt="image">
  <div class="b-content">
    <div class="container">
      <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
          <?php the_content(); ?> 
      
      <?php   endwhile; endif; ?>
    
      <div class="changing-line ">
        <div class="one "><?php the_field('banner_text1'); ?></div>
        <div class="two"><?php the_field('banner_text2'); ?></div>
        <div class="three"><?php the_field('banner_text3'); ?></div>
      </div>

    </div>
    
  </div>
  <a href="#arrowpoint" class="arrow-wrap">
    <img src="<?php the_field('banner_arrow', 'options'); ?>" alt="">
  </a>
</div>



<div class="subbanner container " id="arrowpoint">
  <?php the_field('subbanner_text'); ?>
</div>
<div class="quadro ">
 
  <div class="col-md-6 ">
    <div class="">
      <img src="<?php the_field('marketing_image'); ?>" alt="">
      <div class="quadrooverlay">
        <div class="all-wrap">
          <div class="img-wrap ">
            <img src="<?php the_field('marketing_icon'); ?>" alt="">
          </div>
          <div class="text-wrap">
            <?php the_field('marketing_title'); ?>
          </div>
          <div class=" readmorediv ">
            <a href="<?php the_field('link'); ?>" class="readmore-wrap"><span><img src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>Read More</span> <span>Read more</span></a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 ">
    <div class="">
      <img src="<?php the_field('media_image'); ?>" alt="">
      <div class="quadrooverlay">
        <div class="all-wrap">
          <div class="img-wrap ">
            <img src="<?php the_field('media_icon'); ?>" alt="">
          </div>
          <div class="text-wrap">
          <?php the_field('media_title'); ?>
          </div>
          <div class=" readmorediv ">
            <a href="<?php the_field('link1'); ?>" class="readmore-wrap"><span><img src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>Read More</span> <span>Read more</span></a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 ">
    <div class="">
      <img src="<?php the_field('digital_image'); ?>" alt="">
      <div class="quadrooverlay">
        <div class="all-wrap">
          <div class="img-wrap ">
            <img src="<?php the_field('digital_icon'); ?>" alt="">
          </div>
          <div class="text-wrap">
          <?php the_field('digital_title'); ?>
          </div>
          <div class=" readmorediv ">
            <a href="<?php the_field('link2'); ?>" class="readmore-wrap"><span><img src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>Read More</span> <span>Read more</span></a>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 ">
    <div class="">
      <img src="<?php the_field('pr_image'); ?>" alt="">
      <div class="quadrooverlay">
        <div class="all-wrap">
          <div class="img-wrap ">
            <img src="<?php the_field('pr_icon'); ?>" alt="">
          </div>
          <div class="text-wrap">
          <?php the_field('pr_title'); ?>
            
          </div>
          <div class=" readmorediv ">
            <a href="<?php the_field('link3'); ?>" class="readmore-wrap"><span><img src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>Read More</span> <span>Read more</span></a>

          </div>
        </div>
      </div>
    </div>
  </div>        
</div>

<div class="home-slider">
  <div class="container">
    <div class="swiper-container">
      <ul class="swiper-wrapper ">

      <?php 
        
        $featured_posts = get_field('choose_case_studies');
        
      ?>
      <?php if ( $featured_posts ):  ?>
        <?php foreach( $featured_posts as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>

            <?php $img = get_the_post_thumbnail_url(); ?>

            <li class="swiper-slide ">
              <div class="main-wrap">
                <img src="<?php echo $img; ?>" alt="image">
              </div>
              
                <div class="content">
                  <div class="cutch">
                  
                  <?php
                            if( have_rows('flexible_content' , get_the_ID()) ):
                                while ( have_rows('flexible_content' ,get_the_ID()) ) : the_row();
                                
                                    if( get_row_layout() == 'news_banner' ):
                                      the_sub_field('banner_text');
                                    endif;

                                endwhile;
                            endif;
                            
                            ?>     

                  </div>
                  <div class="title"><?php the_title();?></div>
                  <a href="<?php the_permalink();?>" class="readmore-wrap"><span><img src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>Read More</span> <span>Read more</span></a>


                </div>          
            </li>
            
            <?php endforeach; ?>
         
      <?php endif; wp_reset_query();?>


       
        
      </ul>
      <div class="swiper-pagination "></div>
    </div>
  </div>
</div>

<div class="clients">
  <h4>Our clients</h4>

  <div class="container ">
    <div class="row">
     
        <?php
        if (have_rows('home_logos')):
            while (have_rows('home_logos')) : the_row();

            $link = get_sub_field('link');
         
            if($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            endif;            
        ?>  

          <div class="col-6 col-sm-4 ">
            <?php 
            if($link) :?>
              <a href="<?php echo $link_url; ?>" target="<?php echo $link_target ?>"><img src="<?php the_sub_field('logo'); ?>"  alt=""></a> 
            <?php 
            else:?>
              <div><img src="<?php the_sub_field('logo'); ?>"  alt=""></div> 
            <?php endif;?>
         </div>
         
        <?php endwhile; else : endif; ?>  

    </div>
    <a href="<?php the_field('see_more'); ?>" class="readmore-wrap home_see_more"><span><img src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>See our work</span> <span>See our work</span></a>
  </div>

</div>
<div class="h-line"></div>

  




<?php get_footer() ?>