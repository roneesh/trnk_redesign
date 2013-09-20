<?php
/*
Template Name: Full Width
*/
?>
<?php get_header(); ?>
</div>  <!-- Closes the <div id="container"> in the header, effectively removing the container from full-width pages -->
<?php the_post();   ?>
  <div class="row" id="page_template">
    <?php the_content(); ?>  
  </div>
    
<?php get_footer(); ?>