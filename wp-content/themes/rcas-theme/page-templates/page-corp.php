<?php
/*
Template Name: Corp. Spons.
*/
get_header(); ?><!-- 
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.countdown.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/jquery.countdown.css" />
 -->
<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.countdown.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.countdown.css" />
<div class="row-fluid">
	<div class="span12">
		<h1><?php the_title(); ?></h1>
	</div>
</div>


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

<section id="countdown-container" style="">
	<div class="container-fluid">
		<div class="row-fluid">
			<div id="counter" class="span8 offset2"></div>
		</div>
	</div>
</section>

<section id="first-sponsor" style="background-color: #00b686;">
	<div class="container-fluid">
		<div class="span12">
			<h1 class="sponsor-header" style="padding-bottom: 20px;">Price waterhouse Coopers</h1>
			<div class="row-fluid">

			</div>
		</div>
	</div>
</section>
<section id="second-sponsor" style="background-color: #555555;">
	<div class="container-fluid">
		<div class="span12">
			<h1 class="sponsor-header" style="padding-bottom: 20px;">KPMG</h1>
			<div class="row-fluid">

			</div>
		</div>
	</div>
</section>
<section id="third-sponsor" style="background-color: #FFFFFF;">
	<div class="container-fluid">
		<div class="span12">
			<h1 class="sponsor-header" style="padding-bottom: 20px;">Deloitte</h1>
			<div class="row-fluid">

			</div>
		</div>
	</div>
</section>
<section id="fourth-sponsor" style="background-color: rgb(255, 203, 0);">
	<div class="container-fluid">
		<div class="span12">
			<h1 class="sponsor-header" style="padding-bottom: 20px;">Ernst & Young</h1>
			<div class="row-fluid">

			</div>
		</div>
	</div>
</section>

<div class="row-fluid">
	<div class="span12">
		<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_content(); ?></h1>
		<?php endwhile; ?>
	</div>
</div>


<?php get_footer(); ?>