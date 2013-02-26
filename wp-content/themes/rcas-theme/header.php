<!DOCTYPE html>
<html>
  <head>
    <title>RCAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">-->

    <?php
      /* We add some JavaScript to pages with the comment form
       * to support sites with threaded comments (when in use).
       */
      if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

      /* Always have wp_head() just before the closing </head>
       * tag of your theme, or you will break many plugins, which
       * generally use this hook to add elements to <head> such
       * as styles, scripts, and meta tags.
       */
      wp_head();
      
    ?>
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/rcas.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/bootstrap/js/bootstrap.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.masonry.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="masthead">
        <div class="container">
          <div class="muted" style="display:inline-block">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/main_logo/RCASlogonavy.gif" alt="" width="275">
            </a>
          </div>
          <div class="network-box">
            <div class="network-logos">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/facebook.png" alt="fb_logo" width="50" 
              onmouseover="this.src='<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/facebook_hover.png'" 
              onmouseout="this.src='<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/facebook.png'">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/twitter.png" alt="twit_logo" width="50" 
              onmouseover="this.src='<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/twitter_hover.png'" 
              onmouseout="this.src='<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/twitter.png'">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/rotman.png" alt="twit_logo" width="50" 
              onmouseover="this.src='<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/rotman_hover.png'" 
              onmouseout="this.src='<?php bloginfo( 'stylesheet_directory' ); ?>/img/social_logo/rotman.png'">
            </div>
          </div>
        </div>
        <div class="container rcas-navbar">
          <ul class="rcas-nav">
          <?php 
          $pages = get_pages( array('sort_column' => 'menu_order', 'parent' => 0) );
          foreach ( $pages as $page ) {
            // Set menu item
            $option = '<li class="rcas-nav"><a href="'. get_page_link( $page->ID ) . '">';
            $option .= $page->post_title;
            $option .= '</a>';
            echo $option;

            // Set child dropdown
            $children = get_pages(array('child_of' => $page->ID, 'parent' => $page->ID));
            if (sizeof($children) != 0) {
              echo '<ul class="rcas-sub-menu">';
              foreach ( $children as $child ) {
                $option = '<li class="rcas-nav-sub"><a href="'. get_page_link( $child->ID ) . '">';
                $option .= $child->post_title;
                $option .= '</a></li>';
                echo $option;
              }
              echo '</ul>';
            }
            echo '</li>';
          }
          ?>
          </ul>
        </div>
        <div class="container rcas-navbar rcas-navbar-hidden">
          <ul class="rcas-nav">
          <?php 
          $pages = get_pages( array('sort_column' => 'menu_order', 'parent' => 0) );
          foreach ( $pages as $page ) {
            // Set menu item
            $option = '<li class="rcas-nav"><a href="'. get_page_link( $page->ID ) . '">';
            $option .= $page->post_title;
            $option .= '</a>';
            echo $option;

            // Set child dropdown
            $children = get_pages(array('child_of' => $page->ID, 'parent' => $page->ID));
            if (sizeof($children) != 0) {
              echo '<ul class="rcas-sub-menu">';
              foreach ( $children as $child ) {
                $option = '<li class="rcas-nav-sub"><a href="'. get_page_link( $child->ID ) . '">';
                $option .= $child->post_title;
                $option .= '</a></li>';
                echo $option;
              }
              echo '</ul>';
            }
            echo '</li>';
          }
          ?>
          </ul>
        </div>
      </div>

      