<?php get_header(); ?>
<div class="grid_13 contentSingle">
	<div class="entry">
		<h1>Découvrez nos nouveautées</h1>
		<?php echo do_shortcode( "[SlideDeck2 id=91]" ); ?>
		<h1 class="topOffset">Marques</h1>
		<div class="als-container" id="home-brands">
			<span class="als-prev"><img src="<?php echo bloginfo('template_directory'); ?>/img/thin_left_arrow_333.png" alt="prev" title="previous" /></span>
			<div class="als-viewport">
				<ul class="als-wrapper">
					<li class="als-item">
						<a href="<?php echo home_url(); ?>/catalog/beta-2/">
							<img src="<?php echo bloginfo('template_directory'); ?>/img/logo/crop/beta.png" alt="">
						</a>
					</li>
					<li class="als-item"><a href="<?php echo home_url(); ?>/catalog/gasgas/"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo/crop/gasgas.png" alt=""></a></li>
					<li class="als-item"><a href="<?php echo home_url(); ?>/catalog/jtg/"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo/crop/jtg.png" alt=""></a></li>
					<li class="als-item"><a href="<?php echo home_url(); ?>/catalog/montesa/"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo/crop/montesa.png" alt=""></a></li>
					<li class="als-item"><a href="<?php echo home_url(); ?>/catalog/ossa/"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo/crop/ossa.png" alt=""></a></li>
					<li class="als-item"><a href="<?php echo home_url(); ?>/catalog/scorpa/"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo/crop/scorpa.png" alt=""></a></li>
					<li class="als-item"><a href="<?php echo home_url(); ?>/catalog/sherco/"><img src="<?php echo bloginfo('template_directory'); ?>/img/logo/crop/sherco.png" alt=""></a></li>
				</ul>
			</div>
			<span class="als-next"><img src="<?php echo bloginfo('template_directory'); ?>/img/thin_right_arrow_333.png" alt="next" title="next" /></span>
		</div>
	</div><!-- end entry -->
</div><!-- end Content single -->

<?php get_sidebar('links'); ?>
<?php get_footer(); ?>
