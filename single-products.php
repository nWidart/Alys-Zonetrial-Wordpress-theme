<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single-product' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php //get_sidebar('links'); ?>
<?php get_footer(); ?>
