<script>
$(document).ready(function() {
    $("#trigger_login").fancybox({
      closeClick  : false, // prevents closing when clicking INSIDE fancybox 
            openEffect  : 'none',
      closeEffect : 'none',
      helpers   : { 
        overlay : {closeClick: false} // prevents closing when clicking OUTSIDE fancybox 
      },
      keys : {
      close  : null
      }
     }).trigger("click");
});

</script>

<div class="row" style="clear:both;">
         <div class="cols coltwo singlepost">

<!--   <div class="break">
    <?php //the_post_thumbnail('large'); ?>
  </div>  -->  
  <div class="catdate noborderslim">
    <?php the_date(); ?> 
    <?php wp_get_post_categories(); ?>

    <div class="s_date" style="padding-top: 0;">
    <?php  
      $cats = get_the_category( $post->ID ); 
      if(!empty($cats)){
      foreach($cats as $cat){$catar[]=$cat->name;} 
        $cats = implode(", ", $catar);
        echo $cats; 
      } 
    ?>
    </div>
  </div>
      <h1 class="single_title"><?php the_title(); ?></h1>
      <div class="rule"></div> 
      <div class="post_author">by <?php echo get_the_author(); ?></div>
            
            <!-- <div class="on_post_share"> -->
             <!-- AddThis Button BEGIN -->
<!-- <div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook" addthis:url="<? the_permalink(); ?>" addthis:title="<? the_title(); ?>" addthis:description="<? the_excerpt(); ?>"></a>
<a class="addthis_button_twitter" addthis:url="<? the_permalink(); ?>" addthis:title="<? the_title(); ?>" addthis:description="<? the_excerpt(); ?>"></a>
<a class="addthis_button_email" addthis:url="<? the_permalink(); ?>" addthis:title="<? the_title(); ?>" addthis:description="<? the_excerpt(); ?>"></a>
<a class="addthis_button_compact" addthis:url="<? the_permalink(); ?>" addthis:title="<? the_title(); ?>" addthis:description="<? the_excerpt(); ?>"></a>
<a class="addthis_counter addthis_bubble_style" addthis:url="<? the_permalink(); ?>" addthis:title="<? the_title(); ?>" addthis:description="<? the_excerpt(); ?>"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-515ed84a4f219fab"></script>
 --><!-- AddThis Button END -->
            <!-- </div> -->
      <?php //the_post_thumbnail('large'); ?>
      <?php the_content(); ?>
      <div class="rule-small"></div> 
      <div class="share-menu">
        <p class="group"> 
          <span class="social-media-share-link">Share: </span>
          <span class="social-media-share-link"><a class="addthis_button_facebook" addthis:url="<? the_permalink(); ?>" addthis:title="<? the_title(); ?>" addthis:description="<? the_excerpt(); ?>"></a></span>
          <span class="social-media-share-link"><a class="addthis_button_twitter" addthis:url="<? the_permalink(); ?>" addthis:title="<? the_title(); ?>" addthis:description="<? the_excerpt(); ?>"></a></span>
          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-515ed84a4f219fab"></script>
        </p>
        <p><?php the_tags(); ?> </p>
      </div>

<!--             <div class="comments_title">COMMENTS</div>
            <div id="comments_part">
              <?php //comments_template(); ?> 
            </div> -->
            
          <div id="new-singlemenu">
            <div class="singlemenu-container group">
              <div class="new-singlemenu-link new-prevlink"><?php previous_post_link( '%link', '<  PREVIOUS POST' ) ?></div>
              <div class="new-singlemenu-link new-middlelink"><a href="<?php bloginfo('siteurl'); ?>/blog/">HOME</a></div>
              <div class="new-singlemenu-link new-nextlink"><?php next_post_link( '%link', 'NEXT POST  >' ) ?></div>
            </div>
          </div><!-- #post-entries -->
            
    </div>
     <div class="cols colone">
           <?php include("sidebar-new.php"); ?>
    </div>
        
       

    </div>
   <div class="row"></div>