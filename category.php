<?php
/*
Template Name: Blog
*/
?>
<?php get_header('new'); the_post(); ?>

<?php
  $cat = get_query_var('cat');
?>

<script type="text/JavaScript" >
 

 
$(document).ready(function(){

var paged=2;
$("#load_more_results").click(function(){


            $.ajax({
          url: "<? echo get_bloginfo('siteurl')."/load-more/"; ?>?cat=<?php echo $cat; ?>&paged="+paged,
          context: document.body
        }).done(function(data) {
          if(!data){
            
          }else{
              
            $("#put_data").append(data);
            
            $(".hidden_black").each(function(){

               var black_height= $(this).height();

               var h_height= $(this).find(".h_find").height();

               var h2_height= $(this).find(".see_height").height();

               $(this).find(".h_find").css("margin-top", (black_height-h_height)/2);

               

               $(this).find(".see_height").css("margin-top", (black_height-h2_height)/2);

               

            });
            
            paged++;            
          }
        });
        
return false;

});

}); 
 
</script>


 

    
 
 <div class="row">
  <div class="cols coltwo hash new-blogroll-col">
    <h2 class="category">Category: <?php single_cat_title(); ?></h2>
    <div id="put_data">
    <?php
    
    $cat = get_query_var('cat');
    
    $args1=array(
      'post_type' => 'post',
      'cat'  => $cat
      // 'posts_per_page' => 8
  );
  $my_query = new wp_query($args1);
  if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) {
        $my_query->the_post();
        
  $excerpt = get_the_excerpt();
  ?>
 <div class="blog-index-entry row">
      <div class="catdate noborderslim">
        <?php the_date(); ?>
        <div class="s_date" style="padding-top: 0;">
          <?php 
            $cats = get_the_category( $post->ID ); 
            $catar=array();
            if(!empty($cats)){
            foreach($cats as $cat){$catar[]= '<a class="gogray" href="'.get_term_link( $cat, 'category' ).'">'.$cat->name.'</a>';} 
                  $cats = implode(", ", $catar);
                  echo $cats;
            }
          ?>
        </div>
      </div>
      <a class="thumbnail-link" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('large'); ?>
      </a>
        <a href="<?php the_permalink(); ?>">
          <h1 class="blog-index-post-title"><?php the_title(); ?></h1>
        </a>
        <div class="rule"></div>
        <div class="post_excerpt"> 
          <?php echo string_limit_words($excerpt, 40)."..."; ?>
          <a href="<?php the_permalink(); ?>" style="color:#000;">
            <div class="post-excerpt-read-more">
              Read More >
            </div>
          </a>
        </div>
    </div>
    <?php } } ?>

    </div>
      <a href="#" id="load_more_results">
        <div class="load-more-button">
          Load More
        </div>
      </a>
    </div>

    
    <div class="cols colone">
      <?php include('sidebar-new.php'); ?>
    </div>
  </div> 
 
<?php get_footer(); ?>