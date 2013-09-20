<?php //get_header();the_post(); ?>
<?php global $woo_options; ?>
<?php 
  // include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
  // if(is_plugin_active('blog-redesign/blog-redesign.php')){
    $template=get_post_meta($post->ID, 'template',true);
    wp_head();
    get_header();
    the_post();
    include( 'new-blog-single.php' );  
    get_footer();
  // }
  // else {
  //   get_header();the_post();
  //   $template=get_post_meta($post->ID, 'template',true);
  //   if($template == "fullwidth"){
  //    include( 'single-fullwidth.php' );  
  //   } else{
  //    include( 'single-twocols.php' );    
  //   }
  // get_footer();
  // }
?>
    
<?php //get_footer(); ?>