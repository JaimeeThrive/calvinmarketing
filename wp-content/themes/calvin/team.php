<?php /* Template Name: team */ ?>

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

    <div class="team" id="arrowpoint">
        <div class="row">
        <?php
          if (have_rows('item_repeater')):
            while (have_rows('item_repeater')) : the_row();
        ?> 
       
            <div class="col-md-6 col-lg-4 col-xl-3 ">
                <div class="contentdiv">
                  <img src="<?php the_sub_field('image'); ?>" alt="">
                  <div class="textdiv">
                    <h5><?php the_sub_field('name'); ?></h5>
                    <p><?php the_sub_field('text'); ?></p>
                    
                  </div>
                
                </div>
            </div>

         <?php endwhile; else : endif; ?>  
      
        </div>        
    </div> 
      

    

<?php get_footer() ?>