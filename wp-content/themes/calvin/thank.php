
<?php /* Template Name: thank */ ?>

<?php get_header() ?>
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="wrap">

  <span class="closespan ">&#x2715; </span>
  <div class="contentt ">
    <?php the_content(); ?>
  </div>


</div>
<?php endwhile;  endif; ?>

<?php get_footer(); ?>
