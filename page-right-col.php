<?php
/*
Template Name: Right column sidebar
*/
get_header(); ?>

<div class="grid_13 contentSingle">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="entry" <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div><!-- end entry -->
	<?php endwhile; ?>

</div><!-- end Content single -->


<?php get_sidebar('links'); ?>
<?php get_footer(); ?>
