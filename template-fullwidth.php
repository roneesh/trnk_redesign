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

<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        limit: 12,
        userId: 349071031,
        accessToken: '349071031.467ede5.35bd179280594a99a27dc8d31ea9cf00'
    });
    userFeed.run();
</script>