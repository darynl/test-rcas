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
		echo '<div class="category-event box-container">';
	} else if ($categories[0]->cat_name == 'News') {
		echo '<div class="category-news box-container">';
	} else if ($categories[0]->cat_name == 'Blog') {
		echo '<div class="category-blog box-container">';
	} else if ($categories[0]->cat_name == 'Other') {
		echo '<div class="category-other box-container">';
	} else {
		echo '<div class="box-container">';
	}
	?>
	<a href="<?php the_permalink(); ?>" style="">
		<div class="box">
	     	<span class="categories"><?php echo $categories[0]->cat_name ?></span>
			<div class="box-content">
	            <?php 
	            if ( has_post_thumbnail() ) {
	            	the_post_thumbnail( '', array('class' => "box-thumb") ); 
	        	}
	        	?>
	            <header>
	            	<div class="box-title"><?php the_title(); ?></div>
	            </header>
				<?php the_excerpt(); ?>
	        </div>
	        
	    </div>
	</a>
</div>