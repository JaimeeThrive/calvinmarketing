<div class="last3-block container">
    <div class="news-listing ">
        <div class="row">

            <?php 
          $custom_args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date', 
            'order' => 'DESC',
            
            'post__not_in' => array(get_the_ID()),
          );
          $custom_query = new WP_Query( $custom_args ); 
        ?>
            <?php if ( $custom_query->have_posts() ) : ?>
            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

            <div class="col-md-6 col-lg-4 ">
                <div class="contentdiv ">
                    <img src="<?php the_field('newslisting_thumbnail'); ?>" alt="">
                    <a href="<?php the_permalink(); ?>" class="textdiv">
                        <h5><?php the_title();?></h5>
                        <h6><?php the_excerpt(); ?></h6>
                        <h6><?php echo get_the_date('M Y'); ?></h6>

                        <h6>
                            <?php

                          $categories = get_the_category();
                          foreach($categories as $category) {
                            if ($category->cat_name == 'blog'):
                              echo get_the_author_meta('display_name', $author_id); 
                            endif;
                          }                       
                          
                         
                      ?>
                        </h6>

                    </a>
                </div>
            </div>

            <?php endwhile; ?>

            <?php endif; wp_reset_query();?>

        </div>
    </div>
</div>