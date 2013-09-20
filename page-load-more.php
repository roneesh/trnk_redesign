<?php
$paged=$_REQUEST['paged'];
$cat = $_REQUEST['cat'];

wp_reset_query();


if($cat){
$argsz=array(
      'post_type' => 'post',
      'cat' => $cat,
      'posts_per_page' => 8,
      'paged' => get_query_var("paged"),
        );
} else {
    $argsz=array(
      'post_type' => 'post',
      'posts_per_page' => 8,
      'paged' => get_query_var("paged"),
        );
}   

  $my_query = new wp_query($argsz);
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
            foreach($cats as $cat){$catar[]= '<a class="gogray post-category" href="'.get_term_link( $cat, 'category' ).'">'.$cat->name.'</a>';} 
                  $cats = implode(", ", $catar);
                  echo $cats;
            }
          ?>
        </div>
      </div>
      <a href="<?php the_permalink(); ?>">
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