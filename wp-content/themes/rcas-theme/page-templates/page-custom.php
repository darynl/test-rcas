<?php
/*
Template Name: Custom
*/
get_header(); ?>

<div class="container">

<div class="row-fluid">
	<div class="span12">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_content(); ?></h1>
		<?php endwhile; ?>
	</div>
</div>

</div>

<?php get_footer(); ?>