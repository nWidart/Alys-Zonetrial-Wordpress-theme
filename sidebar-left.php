<div class="grid_3 sidebar">
<?php
/**
 * Create an unordered list of links to active location archives
 */
// $terms = get_terms( 'brands', array(
// 	'hide_empty' => 0,
// ) );
// $brands = array();
// if ( count($terms) > 0 ):
// 	foreach ($terms as $term) {
// 		$brands[] = $term->name;
// 	}
// endif;

// Getting all child pages of /catalog
$args = array(
	'child_of'     => 76,
);
?>
<?php $pages = get_pages($args); ?>
	<ul>
		<h2>Categories <span class="arrow-down"></span></h2>
		<?php

		foreach ($pages as $page) {
			echo '<li><i class="icon-play"></i> <a href="'. home_url() . '/catalog/'.$page->post_name.'">'. $page->post_title .'</a></li>';
		}
		?>

	</ul>
</div> <!-- end Sidebar -->
<?php
	// foreach ($brands as $brand) {
	// 	echo '<li><i class="icon-play"></i> <a href="../brand/'.$brand.'">' . $brand . '</a></li>';
	// }
?>
