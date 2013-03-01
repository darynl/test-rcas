<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
<script>
  // 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  // This is a protocol-relative URL as described here:
  //     http://paulirish.com/2010/the-protocol-relative-url/
  // If you're testing a local page accessed via a file:/// URL, please set tag.src to
  //     "https://www.youtube.com/iframe_api" instead.
  tag.src = "//www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '640',
      width: '1170',
      videoId: 'OXI0gIO9K0w',
      events: {
        'onStateChange': onPlayerStateChange
      }
    });
  }

  function onPlayerStateChange(event) {
    if (event.data == 1) { // playing
      $("#myCarousel").carousel('pause');
      console.log('playing');
    } else if (event.data == 0 || event.data == 2) { // paused or stopped
      $("#myCarousel").carousel('cycle');
    }
  }

</script>

	<!-- Jumbotron -->
	<div class="jumbotron">

		<!-- Carousel -->
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner">
				<div id="item_1" class="active item">
					<div id="player"></div>
				</div>
				<div id="item_2" class="item" onmouseover="$('#banner_1').show()" onmouseout="$('#banner_1').hide()">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banner/executives.jpg" alt="">
					<div id="banner_1" class="rcas-carousel-caption" onmouseover="$('#banner_1').show()">
						<h4>LABEL</h4>
						<p>Description</p>
					</div>
				</div>
				<div id="item_3" class="item" onmouseover="$('#banner_2').show()" onmouseout="$('#banner_2').hide()">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/banner/conference.jpg" alt="">
					<div id="banner_2" class="rcas-carousel-caption">
						<h4>LABEL</h4>
						<p>Description</p>
					</div>
				</div>
				<!-- <div id="item_3" class="item" onmouseover="$('#banner_3').show()" onmouseout="$('#banner_3').hide()">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wallpaper-656194.jpg" alt="">
					<div id="banner_3" class="rcas-carousel-caption">
						<h4>LABEL</h4>
						<p>Description</p>
					</div>
				</div> -->
			</div>
			<!-- Carousel nav -->
			<a class="carousel-control left" style="display:none;" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" style="display:none;" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>

	<hr>

	<div class="container rcas-slogan">
		<p class="lead">EDUCATE.</p><p class="lead">ENHANCE.</p><p class="lead">CONNECT.</p>
	</div>

	<hr>

	<div class="row-fluid">
        <div class="span4"><p style="font-size: 20pt;">Recent Posts</p></div>
		<div class="span1 offset3">All</div>
		<div class="span1">News</div>
		<div class="span1">Event</div>
		<div class="span1">Blog</div>
		<div class="span1">Other</div>
	</div>

	<div id="mason" class="row-fluid">
		<?php if ( have_posts() ) : ?>
			<?php $post_count = 0;?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'blog-post', get_post_format() ); ?>
				<?php $post_count++; ?>

			<?php endwhile; ?>

		<?php endif; ?>
	</div><!-- close row-fluid div -->

<?php get_footer(); ?>