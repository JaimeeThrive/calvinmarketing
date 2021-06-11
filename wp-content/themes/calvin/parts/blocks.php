<div class="work-twocol">
  <div class="container-fluid">

      <?php
      if (have_rows('two_columns')):
          while (have_rows('two_columns')) : the_row();
      ?>        
        <div class="row ">
          <div class="col-md-6 ">
            <img src="<?php the_sub_field('image'); ?>" alt="">
          </div>
          <div class="col-auto  r-col ">
            <div class="">
              <h5><?php the_sub_field('text_title'); ?></h5>
              <p><?php the_sub_field('text'); ?></p>
            </div>

          </div>
        </div>

      <?php endwhile; else : endif; ?>


  </div>
</div>