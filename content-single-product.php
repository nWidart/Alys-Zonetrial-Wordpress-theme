<?php
/**
 * @package zonetrial
 * @since zonetrial 1.0
 */
?>
<div class="grid_12 contentSingle">
	<div class="entry" <?php post_class(); ?>>
		<div class="backBtn alignright"><i class="icon-arrow-left"></i> <a href="<?php echo home_url(); ?>/catalog">Back</a></div>
		<h1><?php the_title(); ?></h1>
		<?php $field = get_fields(); ?>
		<p class="desc"><?php echo $field['cc'] .  'cc, ' . $field['weight'] .  'kg'; ?></p>
		<div class="productPhoto">
			<a href="<?php echo $field['image_thumbnail']; ?>" rel="lightbox">
				<img src="<?php echo $field['image_thumbnail']; ?>" alt="" width="300">
				<span><i class="icon-zoom-in"></i> zoom</span>
			</a>
		</div>
		<div class="productExcerpt">
			<h4>Short description</h4>
			<p>
				<?php echo $field['short_description']; ?>
			</p>
		</div>
		<div class="clear"></div>
		<div class="fullInfo">
			<h4  id="fullDescription">Description</h4>
			<?php the_content(); ?>
		</div>
	</div><!-- end entry -->

</div><!-- end Content single -->
<div class="grid_4 productInfo">
	<div class="prix">
		<table>
			<thead>
				<tr>
					<td>With Tax</td>
					<td>Without Tax</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo '€ ' . get_field('price_tcc'); ?></td>
					<td class="noTax"><?php echo '€ ' . get_field('price_without_tax'); ?></td>
				</tr>
			</tbody>
		</table>

	</div>
	<div class="basket">
		<?php $brand = wp_get_post_terms( $post->ID, $taxonomy = 'brands' ); ?>
		<a href="<?php echo home_url(); ?>/contact/?subject=Order&brand_name=<?php echo $brand[0]->name;?>" class="order">Request Info</a>
	</div>
	<div class="stockInfo">
		<ul>
			<?php if ( $field['in_stock'] ) :	?>
				<li>
				<i class="icon-shopping-cart"></i> <a href="<?php echo home_url(); ?>/contact/?subject=Order&brand_name=<?php echo $brand[0]->name;?>">Availability: <span class="stocked">In stock</span></a>
				</li>
			<?php else: ?>
				<li>
					<i class="icon-shopping-cart"></i> Availability: <a href="/contact"><span class="nostock">Contact us</span></a>
				</li>
			<?php endif; ?>
			<?php
			$brand_url = get_tax_meta($brand[0]->term_id,'brand_url_link');
			?>
			<li><i class="icon-home"></i> <a href="<?php echo $brand_url; ?>" target="_blank">Manufacturer's website</a></li>
		</ul>
	</div>
	<div class="clear"></div>
	<div class="shareThis">
		<h5>Share this</h5>
		<ul>
			<li>
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="zonetrialcom" data-hashtags="zonetrial">Tweet</a>
			</li>
			<li>
				<div class="fb-like" data-send="true" data-layout="button_count" data-width="150" data-show-faces="true" data-action="recommend" data-font="lucida grande"></div>
			</li>
		</ul>
	</div>
</div>
<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=319866938048613";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
