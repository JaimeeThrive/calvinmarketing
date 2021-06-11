<?php /* Template Name: contact */ ?>

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
      <div id="arrowpoint">&nbsp;</div>

      <?php echo do_shortcode( '[contact-form-7 id="329" title="Contact form 1"]' ); ?>



     

      <div class="bottom-section container">
        <div class="row">
          <div class="col-md-6 order-2 order-md-1">
            
            <div class="l-content-wrap ">
              <img src="<?php the_field('bottom_image'); ?>" alt="">
              <div class="left-content">
                <?php the_field('bottom_image_text'); ?>            
              </div>
            </div>
          </div>

          <div class="col-md-6 right-content order-1 order-md-2">
            <div>
                
                
                <?php 
                    $str = get_field('telephone');
                    $rev = strrev($str);
                    $split = trim(chunk_split($rev, 6, ' '));
                    $str1 = strrev($split); 
                ?>
                
              <a class="tel" href="tel:+<?php the_field('telephone'); ?>"> <span>T</span><?php echo $str1; ?></a>
              <a class="mail" href="mailto:<?php the_field('email') ?>"><span>E</span><?php the_field('email') ?></a>
              <ul class="">
                <li><a target="_blank" href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="<?php the_field('twitter', 'options'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a target="_blank" href="<?php the_field('linkedin', 'options'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div> 
          </div>
        </div>

      </div>


<?php get_footer() ?>