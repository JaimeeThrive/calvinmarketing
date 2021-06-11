<?php /* Template Name: casestudy */ ?>

<?php get_header() ?>


      <div class="quadro brands">
       
        <div class="col-md-6 ">
          <div class="">
            <img src="<?php the_field('image'); ?>" alt="">
            <div class="quadrooverlay">
              <div class="content">                
                <div class="cutch">Cutch</div>
                <div class="title"> Case study title would go here and look something like this</div>
                <a href="" class="readmore-wrap"><span><img src="img/readmore.svg" alt=""></span> <span>Read More</span> <span>Read more</span></a>
              </div>  
            </div>
          
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="">
            <img src="<?php the_field('image'); ?>" alt="">
            <div class="quadrooverlay">
              <div class="content">                
                <div class="cutch">Franchise Recruitment</div>
                <div class="title"> Case study title would go here and look something like this</div>
                <a href="" class="readmore-wrap"><span><img src="img/readmore.svg" alt=""></span> <span>Read More</span> <span>Read more</span></a>
              </div> 
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="">
            <img src="<?php the_field('image'); ?>" alt="">
            <div class="quadrooverlay">
              <div class="content">                
                <div class="cutch">Gascoigne Halman</div>
                <div class="title"> Case study title would go here and look something like this</div>
                <a href="" class="readmore-wrap"><span><img src="img/readmore.svg" alt=""></span> <span>Read More</span> <span>Read more</span></a>
              </div> 
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="">
            <img src="<?php the_field('image'); ?>" alt="">
            <div class="quadrooverlay">
              <div class="content">                
                <div class="cutch">Home Instead</div>
                <div class="title"> Case study title would go here and look something like this</div>
                <a href="" class="readmore-wrap"><span><img src="img/readmore.svg" alt=""></span> <span>Read More</span> <span>Read more</span></a>
              </div> 
            </div>
          </div>
        </div> 
        <div class="col-md-6 ">
          <div class="">
            <img src="<?php the_field('image'); ?>" alt="">
            <div class="quadrooverlay">
              <div class="content">                
                <div class="cutch">InHabit</div>
                <div class="title"> Case study title would go here and look something like this</div>
                <a href="" class="readmore-wrap"><span><img src="img/readmore.svg" alt=""></span> <span>Read More</span> <span>Read more</span></a>
              </div> 
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="">
            <img src="<?php the_field('image'); ?>" alt="">
            <div class="quadrooverlay">
              <div class="content">                
                <div class="cutch">Tritonshield</div>
                <div class="title"> Case study title would go here and look something like this</div>
                <a href="" class="readmore-wrap"><span><img src="img/readmore.svg" alt=""></span> <span>Read More</span> <span>Read more</span></a>
              </div> 
            </div>
          </div>
        </div>
      </div>



      <div class="clients">
        <h4 class="tb30">More brands we work with</h4>

          <div class="container ">
            <div class="row">


              <?php
              if (have_rows('brands_logos')):
                  while (have_rows('brands_logos')) : the_row();

                  $link = get_sub_field('link');
               
                  if($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                  endif;            
              ?>  

                <div class="col-6 col-md-4 col-lg-3 ">
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
          </div>

      </div>


<?php get_footer() ?>
