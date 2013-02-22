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
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/rcas.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/bootstrap/js/bootstrap.js"></script>
    <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.masonry.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="masthead">
        <div class="container">
          <h3 class="muted" style="display:inline-block"><?php bloginfo( 'name' ); ?></h3>
          <div class="network-box">
            <div class="network-logos">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/f_logo.jpg" alt="fb_logo" width="30">
              <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/twit_logo.jpg" alt="twit_logo" width="40">
            </div>
          </div>
        </div>
        <div class="container rcas-navbar">
          <ul class="rcas-nav">
          <?php 
          $pages = get_pages( array('sort_column' => 'menu_order') );
          foreach ( $pages as $page ) {
            $option = '<li class="rcas-nav"><a href="'. get_page_link( $page->ID ) . '">';
            $option .= $page->post_title;
            $option .= '</a></li>';
            echo $option;
          }
          ?>
          </ul>
        </div>
        <div class="container rcas-navbar rcas-navbar-hidden">
          <ul class="rcas-nav">
          <?php 
          $pages = get_pages( array('sort_column' => 'menu_order') );
          foreach ( $pages as $page ) {
            $option = '<li class="rcas-nav"><a href="'. get_page_link( $page->ID ) . '">';
            $option .= $page->post_title;
            $option .= '</a></li>';
            echo $option;
          }
          ?>
          </ul>
        </div>
      </div>

      