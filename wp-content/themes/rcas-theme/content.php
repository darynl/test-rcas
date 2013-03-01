<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage RCAS-Theme
 * @since RCAS-Theme 0.1.0
 */
?>

<div class="row-fluid">
	<div class="span12">
		<div class="row-fluid">
			<div class="span12">
				<?php the_post_thumbnail('post-thumbnail', array('class' => 'single-img')); ?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span9">
				<p class="single-title">
					<?php the_title(); ?>
				</p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span9 single-info">
				<p class="single-date"><?php the_date('d M'); ?></p>
				| 
				<p class="single-category"><?php the_category(' '); ?></p>
				| 
				<p class="single-author">By <?php the_author(); ?></p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span9">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>