<?php
/*
Template Name: Catalog
*/
get_header();
get_sidebar('left');
?>

<?php
	$args = array(
		'post_type' => 'products',
	);
	$products = new WP_Query( $args ); ?>

<div class="grid_10 content">
	<h1>All products</h1>
	<table class="productList">
			<?php if( $products->have_posts() ) : ?>
		<thead>
			<tr>
				<td>&nbsp;</td>
				<td>Name</td>
				<td>Brand</td>
				<td>Price <small>with tax</small></td>
				<td style="width:50px;">Price <small>without tax</small></td>
			</tr>
		</thead>
				<?php while( $products->have_posts() ) : $products->the_post(); ?>
		<tbody>

			<tr onclick="document.location = '<?php echo get_permalink(); ?>';">
				<td class="productImage">
					<img src="<?php the_field('image_thumbnail'); ?>" alt="" width="100px" height="100px">
				</td>
				<td class="description">
					<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					<div class="accroche">
						<?php the_field('one_line_description'); ?>
					</div>
					<div class="carac">
						<?php echo get_field('cc') . 'cc, ' . get_field('weight') . 'kg'; ?>
					</div>
				</td>
				<?php $brand = wp_get_post_terms( $post->ID, $taxonomy = 'brands' ); ?>
				<td class="marque"><?php echo $brand[0]->name; ?></td>
				<td class="prix">€ <?php the_field('price_tcc'); ?></td>
				<td class="prix noTax">€ <?php the_field('price_without_tax'); ?></td>
			</tr>
			<?php
				endwhile;
			else :
				echo 'Oh ohm no products!';
			endif;
			?>
		</tbody>
	</table>
</div><!-- end Content -->
<?php get_sidebar('links'); ?>
<?php get_footer(); ?>
