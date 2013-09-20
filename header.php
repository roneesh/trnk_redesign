<?php

/**

 * Header Template

 *

 * Here we setup all logic and HTML that is required for the header section of all screens.

 *

 */

 global $woo_options;

 global $woocommerce;

?>
<?php 

  $http_or_https = (is_ssl()) ? 'https:' : 'http:'; 

?>

<!DOCTYPE html>

<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->

<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->

<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->

<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->

<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">
<title>
TRNK</title>
<?php woo_meta(); ?>

<!-- The main stylesheet -->

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php $GLOBALS['feedurl'] = get_option('woo_feed_url'); if ( !empty($feedurl) ) { echo $feedurl; } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bjqs-1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/skin.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/fancybox/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="./trnkblog.css">
<link rel='stylesheet' id='gforms_formsmain_css-css'  href='http://www.trnk-newyork.com/wp-content/plugins/gravityforms/css/formsmain.css?ver=1.7.3' type='text/css' media='all' />
<!-- Load Modernizr which enables HTML5 elements & feature detects -->

<script src="<?php echo get_template_directory_uri(); ?>/includes/js/libs/modernizr-2.0.6.min.js"></script>
<script type="text/javascript">

jQuery(document).ready(function() {

$(".zoom").fancybox();

var checkdata = $("#datecheck").attr("checked");

var checkprice = $("#pricecheck").attr("checked");

if(checkdata){

 $("#low_change").html("Old");

 $("#high_change").html("New");

}



if(checkprice){

 $("#low_change").html("Low");

 $("#high_change").html("High ");

}



$("#datecheck").change(function(){

 if($(this).attr("checked")){

  $("#low_change").html("Old");

 $("#high_change").html("New");

 }

});



$("#pricecheck").change(function(){

 if($(this).attr("checked")){

  $("#low_change").html("Low");

 $("#high_change").html("High");

 }

});







$("#reset_form").click(function(){

  $("#filter_products input").removeAttr("checked");

});



 $(".tab_a").click(function(){

   $(".tab_a").removeClass("tab_active").removeClass("tab_inactive").addClass("tab_inactive");

   $(this).removeClass("tab_inactive").addClass("tab_active");

   var show_tab = $(this).attr("rel");

   $("#tab1").removeClass("active_tab").addClass("inactive_tab");

   $("#tab2").removeClass("active_tab").addClass("inactive_tab");

   $("#tab3").removeClass("active_tab").addClass("inactive_tab");

   $("#active_tab").val(show_tab);

   $("#"+show_tab).removeClass("inactive_tab").addClass("active_tab");

 });



$("#input_2_1_3").attr("placeholder","First name");

$("#input_2_1_6").attr("placeholder","Last name");

$("#input_2_3").attr("placeholder","Enter your email");

$("#input_2_2").attr("placeholder","Enter password");

$("#input_2_2_2").attr("placeholder","Confirm password");



$(".coupon label").html("Promo Code");

$(".coupon .button").attr("value","Apply Code");



$(".hidden_black").each(function(){

   var black_height= $(this).height();

   var h_height= $(this).find(".h_find").height();

   var h2_height= $(this).find(".see_height").height();

   $(this).find(".h_find").css("margin-top", (black_height-h_height)/2);

   

   $(this).find(".see_height").css("margin-top", (black_height-h2_height)/2);

   

});



$(".new_hidden_black").each(function(){

   var black_height= $(this).height();

   var h_height= $(this).find("h3").height();

   $(this).find("h3").css("margin-top", (black_height-h_height)/2);

});







$("#first_s a").each(function(){

  $(this).click(function(){

    $("#first_s input").removeAttr("checked");

    $(this).parent().find("input").attr("checked", "checked");

  $("#filter_products").submit();

  });

});





$(".sortsecond p").click(function(){

  $(this).find("input").attr("checked","checked");

  $("#filter_products").submit();

});





$(".check_all").click(function(){

  $(this).parent().parent().find("input").attr("checked","checked");

  return false;

});

$(".uncheck_all").click(function(){

  $(this).parent().parent().find("input").removeAttr("checked");

  return false;

});





$("#hide_filters").click(function(){

  if($("#filter_products .sorting_div").is(":visible")){

    $("#filter_products .sorting_div").hide();

    $(this).text("Show filters");

  }else{

    $("#filter_products .sorting_div").show();

    $(this).text("Hide filters");

  }

});



 $('#banner-fade').bjqs({

            height      : 317,

            width       : 670,

            responsive  : true

          });



    $(".wishlistadd a").addClass("addtowishlist");

    $(".wishlistaddedbrowse").html("Added");

  

  $("#header_menu ul").prepend('<li class="search"><form name="s" action="<?php bloginfo('siteurl'); ?>/" method="GET"><a style="cursor:pointer;"></a> <input type="text" name="s" id="s" /><input type="submit" value="SEARCH" /></form></li>');

  

  $(".search a").click(function(){

     $(".search").animate({

              width: '280'

              }, 200, function() {

              // Animation complete.

              });

  });

  

  

    $('#mycarousel').jcarousel();

  

  $('#mynewcarousel').jcarousel();

  

  

  

});

</script>
<?php wp_head(); ?>
<?php woo_head(); ?>

<!-- Load Google HTML5 shim to provide support for <IE9 -->

<!--[if lt IE 9]>

<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6558852/772602/css/fonts.css" />

</head>

<body <?php //body_class(get_option('woo_site_layout')); ?>>

<?php //woo_top(); ?>
<!-- <div id="black_bar" style="position:absolute; z-index:-1; height:67px; background:#000; width:100%; top:0; left:0;"></div> -->


<!-- <div id="main_menu"> -->
  <?php //wp_nav_menu( array( 'depth' => 1, 'sort_column' => 'menu_order', 'container' => false, 'theme_location' => 'primary-menu' ) ); ?>
<!-- </div> -->


<div class='social_top'>
    <a href="https://twitter.com/trnknyc" class='social_top_icon'><img src="https://s3-us-west-2.amazonaws.com/trnk-images/twitter.png"></a>
    <a href="https://www.facebook.com/pages/TRNK-New-York/171883279616736?ref=br_tf" class='social_top_icon'><img src="https://s3-us-west-2.amazonaws.com/trnk-images/facebook.png"></a>
</div>

<div class='logo'>
  <a href='index.html'><img class="logo" title="logo" src="https://s3-us-west-2.amazonaws.com/trnk-images/trnk_logo.png"></a>
</div>

<nav class='new-nav group'>
  <div class='nav_links_contain group'>
    <?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => '', 'theme_location' => 'primary-menu' ) ); ?>
    <!-- <a class='nav_link' href='hometour.html'>Stories</a>
    <a class='nav_link' href='#'>Blog</a>
    <a class='nav_link' href='about.html'>About</a> -->
  </div>
</nav>


<!--   <header class="new-header">
    
    <h1 class="trnk gradient"> TRNK </h1>
    <small class="new-york-city"> New york City </small>

    <nav class="new-nav"> -->
      <?php //wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'theme_location' => 'primary-menu' ) ); ?>
<!--       <div class="social-media-links">
        <a href="/facebook" class="social-media-link"> f </a>
        <a href="/twitter" class="social-media-link"> t </a>
      </div> -->
<!--     </nav>

  </header> -->

<div id="container">