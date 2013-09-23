<div class="cols colone">

  <div class="new-sidebar">
    <div class="sidebar-section group">
      <p> Follow Us </p>
        <ul class="follow-list">
          <li class="follow-icon"> 
            <a class='social_top_icon' target="_blank" href="https://twitter.com/trnknyc">
              <img src="https://s3-us-west-2.amazonaws.com/trnk-images/twitter.png">
            </a>
          </li>
          <li class="follow-icon"> 
            <a class='social_top_icon' target="_blank" href="https://www.facebook.com/pages/TRNK-New-York/171883279616736">
              <img src="https://s3-us-west-2.amazonaws.com/trnk-images/facebook.png">
            </a>
          </li>
          <li class="follow-icon"> 
            <a class='social_top_icon' target="_blank" href="http://instagram.com/trnknyc/">
              <img src="https://s3-us-west-2.amazonaws.com/trnk-images/instagram.png">
            </a>
          </li>
          <li class="follow-icon"> 
            <a class='social_top_icon' target="_blank" href="http://pinterest.com/trnknyc/boards/">
              <img src="https://s3-us-west-2.amazonaws.com/trnk-images/pinterest.png">
            </a>
          </li>
        </ul>
      </div>
    <div class="sidebar-section group">
      <p> News and Updates </p>
        <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="http://trnk-newyork.us4.list-manage2.com/subscribe/post?u=83d31755b5a57f780de73da26&amp;id=1ce19cce2c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="email" value="" name="EMAIL" class="sidebar-text-field email signup_box" id="mce-EMAIL" placeholder="  Enter email" required>
            <input type="submit" value="Subscribe" name="subscribe" id="sidebar-mc-embedded-subscribe" class="sidebar-btn btn button">
          </form>
          </div>
        <!--End mc_embed_signup-->
    </div>
    <div class="sidebar-section group">
      <p> Categories </p>
      <?php $args = array(
        'show_option_all'    => '',
        'orderby'            => 'name',
        'order'              => 'ASC',
        'style'              => 'list',
        'show_count'         => 0,
        'hide_empty'         => 1,
        'use_desc_for_title' => 0,
        'child_of'           => 0,
        'feed'               => '',
        'feed_type'          => '',
        'feed_image'         => '',
        'exclude'            => '',
        'exclude_tree'       => '',
        'include'            => '',
        'hierarchical'       => 1,
        'title_li'           => __( '' ),
        'show_option_none'   => __('No categories'),
        'number'             => null,
        'echo'               => 1,
        'depth'              => 0,
        'current_category'   => 0,
        'pad_counts'         => 0,
        'taxonomy'           => 'category',
        'walker'             => null);
        wp_list_categories( $args ); 
      ?>         
    </div>
<!--     <div class="sidebar-section group">
      <p> Popular Posts </p>
    </div> -->
  
  </div>      

</div>