<?php get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
print_r($term);
?>


azeaz


<?php get_sidebar('links'); ?>
<?php get_footer(); ?>
