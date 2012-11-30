<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package zonetrial
 * @since zonetrial 1.0
 */
?>
	<div class="clear"></div>
	<div class="grid_16 bigFooter">
		<div class="grid_4">
			<?php if ( ! dynamic_sidebar( 'sidebar-footer-1' ) ) : ?>
			<p>Accessoires et pièces détachées Trial pour vous les passionnés !</p>
			<p>
				Vous surfez sur le site www.zonetrial.net Votre trial shop on-line. ZoneTrial, Trial shop en ligne, vous propose tous les accessoires trial et les équipements moto trial, comme les pièces Ossa Trial, les accessoires GasGas Trial, les pièces S3, les équipements moto Trial Jitsie. Dans notre boutique ZoneTrial.net, trouvez aussi des équipements trial comme des pantalons, vareuses, gants, bottes, et également des vestes, des T-shirts, des pulls sans oublier des chaussettes, des bonnets et des casquettes... Découvrez facilement nos Nouveautés et achetez à bon prix grâce à nos promotions
			</p>
			<?php endif; ?>
		</div>
		<div class="grid_4">
			<?php if ( ! dynamic_sidebar( 'sidebar-footer-2' ) ) : ?>
			<p>Accessories and Trial Spare Parts for you fans!</p>
			<p>
				Welcome on the site ZoneTrial. Your Trial motorbike shop online. On www.zonetrial.net you will find 3S, Jitsie, Hebo, Shiro Clice equipment, all the trial accessories and parts for Ossa, GasGas, Scorpa. You can buy online your trial equipment: trousers, sweaters, gloves, boots, socks, jackets as well as T-shirts, caps and hats. Click on PROMOTIONS or NEW to have a look at the promotional items and new items.
			</p>
			<?php endif; ?>
		</div>
		<div class="grid_4">
			<?php if ( ! dynamic_sidebar( 'sidebar-footer-3' ) ) : ?>
			<p>Accessoires en onderdelen Trial voor je fans!</p>
			<p>
				www.zonetrial.net, online Trial boetiek, stelt heel wat TRIAL kleding voor, zoals, broeken, maar ook sweater, handschoenen , Helmen, en vergeet de T-shirts, muts en pet niet. In onze boetiek voor Trial vindt u laarzen, sokken, motorrijder bescherming en andere motorrijderuitrusting en andere trial hardparts, trial apparel liggen op u te wachten. Ontdek ook onze rubrieken met motoronderhoud en motoruitrusting. In de rubrieken van Zonetrial laat u toe om uw trial hardparts en werktuigen te vernieuwen. En geniet van lage prijzen dankzij de promotie artikelen!
			</p>
			<?php endif; ?>
		</div>
		<div class="grid_4">
			<?php if ( ! dynamic_sidebar( 'sidebar-footer-4' ) ) : ?>
			<p>Zubehör und Ersatzteile Kostenlos für Sie-Fans!</p>
			<p>
				www.zonetrial.net. Willkommen auf unserer Website! Nun ZONETRIAL bietet Ihnen auf seiner Website www.zonetrial.net eine Vielzahl hochwertiger und interessanter Artikel für das Trial fahren: Jacke, Hose, Handschuhe, Helm, Handschuhe, Hemd, Lenker, Trial Gummi, Dichtung, Hauspuff, Zubehör für Gasgas, Scorpa, Beta. Egal wo Sie wohnen, nun können Sie hochwertige Artikel der großen TRIAL-Marken zu attraktiven Preisen bestellen: Jitsie, Hebo, S3. Mit einem Klick auf das LOGO DER MARKE Ihrer Wahl werden Ihnen alle Produkte dieser Marke angezeigt. Auf der Startseite sehen Sie die 12 neuesten Produkte und die 12 aktuellsten Sonderangebote. Sie können sich auch alle Neuheiten oder Sonderangebote anzeigen lassen. Klicken Sie dazu einfach auf SONDERANGEBOTE Oder NEUHEITEN
			</p>
			<?php endif; ?>
		</div>
	</div>
	<div class="grid_16 footer">
		<p>
			<a href="http://www.alys.be/">Copyright 2012 © Alys SPRL</a> | <a href="<?php echo home_url(); ?>/conditions-generales">General conditions</a> | <a href="<?php echo home_url(); ?>/contact-home">Contact</a>
		</p>
		<ul class="right socialLinks">
			<li>
				<a href=<?php echo 'http://www.twitter.com/' .  of_get_option('twitterid', 'Alysbrussels'); ?> target=_blank>
					<img src=<?php  echo get_template_directory_uri() . "/img/twitter.png"; ?> alt="" width="24px" height="24px">
				</a>
			</li>
			<li>
				<a href=<?php echo of_get_option('facebookid'); ?> target=_blank>
					<img src=<?php  echo get_template_directory_uri() . "/img/facebook.png"; ?> alt="" width="24px" height="24px">
				</a>
			</li>
		</ul>
	</div><!-- end Footer -->

</div><!-- End container _16-->
<?php wp_footer(); ?>
<script type="text/javascript">
$(document).ready(function(){
	$.localScroll();
	 $('ul.nav').superfish({
	 	speed: 'fast',
	 	animation:   {opacity:'show',height:'show'},
	 	delay: 200
	 });
	 $("#home-brands").als({
		visible_items: 6,
		scrolling_items: 1,
		orientation: "horizontal",
		circular: "yes",
		autoscroll: "yes",
		interval: 4000
	});
});
</script>
</body>
</html>
