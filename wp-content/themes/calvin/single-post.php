

<?php get_header() ?>
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php
    if( have_rows('flexible_content') ):
        while ( have_rows('flexible_content') ) : the_row();
        
            if( get_row_layout() ):
                get_template_part( 'parts/'.get_row_layout() );
            endif;

        endwhile;
    endif;
    wp_reset_postdata();
?>


      









  <?php            
          endwhile;
          wp_reset_postdata();
          else :?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>   

<?php get_footer() ?>