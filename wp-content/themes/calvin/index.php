

<?php get_header() ?>
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="agency-bot-ban n-single-banner" style="background-image: url(<?php echo get_the_post_thumbnail_url('', 'full'); ?>)">
        <div class="container ">
          <h4 class=""><?php the_title(); ?></h4>
        
        </div>
      </div>
    
    <div class="container">
        <?php the_content(); ?>
    </div>
     
<?php            
          endwhile;
          wp_reset_postdata();
          else :?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>  

<?php get_footer() ?>
