<?php $categories = get_the_category();?>
<div class="text-block text-block-top container n-sing">
        <h6>
          <?php
              foreach($categories as $category) {                   
              
              if ($category->cat_name == 'blog'):
                  echo get_the_author_meta('display_name', $author_id); 
              endif;
              }
          ?>
        </h6>
        
        <h6><?php echo get_the_date('d M Y'); ?></h6>

        <?php the_sub_field('top_text'); ?>

      </div>