<div class="trio-block">
  <div class="container-fluid">
    <div class="row">



  <?php 
    $custom_args = array(
      'post_type' => 'case-study',
      'posts_per_page' => 3,
      'orderby' => 'date', 
      'order' => 'DESC', 
      
      'post__not_in' => array(get_the_ID()),
    );
    
    $custom_query = new WP_Query( $custom_args ); 
    

  ?>
  <?php if ( $custom_query->have_posts() ) : ?>
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); 
      
    ?>
        
        <div class="col-md-6 col-lg-4">
          <img src="<?php the_field('listing_thumbnail'); ?>" alt="">
          <div class="trio-block-overlay">
            <h6>
            <?php
            if( have_rows('flexible_content' , get_the_ID()) ):
                while ( have_rows('flexible_content' , get_the_ID()) ) : the_row();
                
                    if( get_row_layout() == 'news_banner' ):
                        the_sub_field('banner_text');
                    endif;

                endwhile;
            endif;
            
            ?>     
            </h6>
            <h5><a class="white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <a href="<?php the_permalink(); ?>" class="readmore-wrap"><span><img src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></span> <span>Read More</span> <span>Read more</span></a>
            
          </div>
        </div>                  
    
    <?php endwhile; ?>
     
  <?php endif; wp_reset_postdata();?>


    </div>
  </div>
</div>