<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage RCAS
 * @since RCAS 1.0
 */

get_header(); ?>

<div class="container-fluid">

<?php while ( have_posts() ) : the_post(); ?>

	<div class="row-fluid">

		<div class="span8 offset1">
			<?php get_template_part( 'content', get_post_format() ); ?>

			<div class="row-fluid">
				<div class="span12 single-tags">
					<?php
						$posttags = get_the_tags();
						if ($posttags) {
							echo 'Tags: ';
							foreach($posttags as $tag) {
							echo '<a href="'. get_tag_link($tag->term_id) . '">' . $tag->name . '</a> '; 
							}
						}
					?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<span class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav">' . _x( 'Next:', 'Next post link', 'rcas' ) . '</span> %title' ); ?></span>
				</div>
				<div class="span3 offset6">
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( 'Previous:', 'Previous post link', 'rcas' ) . '</span> %title' ); ?></span>
				</div>
			</div><!-- .nav-single -->

		</div>

		<div class="span3">
			<?php get_sidebar(); ?>
		</div>

	</div>

<?php endwhile; // end of the loop. ?>

</div>

<?php get_footer(); ?>