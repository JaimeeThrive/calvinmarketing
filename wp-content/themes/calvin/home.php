<?php get_header();
$home_id = get_option('page_for_posts'); ?>


<div class="banner">
    <img src="<?php the_field('banner_image', $home_id); ?>" alt="">
    <img class="banner_image_mobile" src="<?php the_field('banner_image_mobile' ,  $home_id); ?>" alt="image">
    <div class="b-content">
        <div class="container">
            <p><span>News</span></p>
            <p>& blogs</p>
        </div>
    </div>
    <a href="#arrowpoint" class="arrow-wrap">
        <img src="<?php the_field('banner_arrow', 'options'); ?>" alt="">
    </a>
</div>


<div class="news-listing " id="arrowpoint">
    <div class="row">

        <?php
                  if( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>
        <?php $categories = get_the_category();?>

        <div class="col-md-6 col-lg-4 col-xl-3 ">
            <div class="contentdiv ">
                <img src="<?php the_field('newslisting_thumbnail'); ?>" alt="">
                <a href="<?php the_permalink(); ?>" class="textdiv">
                    <h5><?php the_title();?></h5>
                    <h6><?php the_excerpt(); ?></h6>
                    <h6><?php echo get_the_date('M Y'); ?></h6>
                    <h6>
                        <?php
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

        <?php            
                    endwhile;
                    wp_reset_postdata();
                    else :?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>




    </div>
</div>

<?php get_footer() ?>