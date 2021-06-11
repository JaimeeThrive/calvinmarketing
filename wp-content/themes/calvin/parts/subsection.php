<div class="container subsection">
  <div class="row">
    <div class="col-md-9">
      <h3><?php the_sub_field('subbannersection_title'); ?></h3>
      <?php the_sub_field('subbannersection_text'); ?>
    </div>
    <div class="col-md-3 right-col">
      <div class=""><?php the_sub_field('subbannersection_what-we-did'); ?></div>
      <ul class="">
      
        <?php
        
        if (have_rows('subbannersection_what-we-did_items')):
          while (have_rows('subbannersection_what-we-did_items')) : the_row();
        ?>        
            <li><?php the_sub_field('item'); ?></li>

        <?php endwhile; else : endif; ?>
      </ul>
    </div>
  </div>
</div>