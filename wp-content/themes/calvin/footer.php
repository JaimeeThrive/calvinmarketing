
      <footer class="">
          
            <?php 
                $str = get_field('footer_phone', 'options');
                $rev = strrev($str);
                $split = trim(chunk_split($rev, 6, ' '));
                $str1 = strrev($split); //9 01 02 01
            ?>
          
          
          
          
          
        <a class="tel" href="tel:+<?php the_field('footer_phone', 'options'); ?>"> <span>T</span><?php echo $str1; ?></a>
        <a class="mail" href="mailto:<?php the_field('footer_email', 'options'); ?>"><span>E</span><?php the_field('footer_email', 'options'); ?></a>
        <?php
            $link = get_field('get_in_touch', 'options');
          
            if($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
            endif;
        ?>        
                  
        <a class="getintouch" href="<?php echo $link_url; ?>"><?php echo $link_title; ?> <img src="<?php the_field('read_more_icon', 'options'); ?>" alt=""></a>
        <ul class="">
          <li><a target="_blank" href="<?php the_field('facebook', 'options'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a target="_blank" href="<?php the_field('twitter', 'options'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a target="_blank" href="<?php the_field('linkedin', 'options'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
        <?php
           $link = get_field('privacy', 'options');
              if($link):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
              endif;
        
        ?>
        
        
        <a target="$link_target" class="privacy" href="<?php echo $link_url; ?>">Privacy Policy</a>   
        <span class="copy">&#169; Copyright Calvin Marketing 2021 | All rights reserved</span>    
      </footer>
    <?php wp_footer(); ?>   
  </body>
</html>

