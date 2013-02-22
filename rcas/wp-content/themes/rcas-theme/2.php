<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage RCAS-Theme
 * @since RCAS-Theme 0.1.0
 */
?>
<?php /* Set the category of the blog */ ?>
<?php $categories = get_the_category(); ?>
	<?php 
	if ($categories[0]->cat_name == 'Event') {
		echo '<div class="span4 category-event box-container">';
	} else if ($categories[0]->cat_name == 'News') {
		echo '<div class="span4 category-news box-container">';
	} else if ($categories[0]->cat_name == 'Blog') {
		echo '<div class="span4 category-blog box-container">';
	} else if ($categories[0]->cat_name == 'Other') {
		echo '<div class="span4 category-other box-container">';
	} else {
		echo '<div class="span4 box-container">';
	}
	?>
	<a href="<?php the_permalink(); ?>" style="">
		<div class="box">
	     	<span class="categories"><?php echo $categories[0]->cat_name ?></span>
			<div class="box-content">
	            <header>
	            	<h3 class="box-title"><?php the_title(); ?></h3>
	            </header>
				<p><?php the_content(); ?></p>
	        </div>
	    </div>
	</a>
</div>