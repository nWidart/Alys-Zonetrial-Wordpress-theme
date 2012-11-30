<div class="grid_3 sidebarLinks">
	<ul class="secondNav">
		<li><a href="<?php echo home_url(); ?>/promotions" class="promo" title="Promotions">Promotions</a></li>
		<li><a href="<?php echo home_url(); ?>/faq" class="faq" title="Frequently Asked Questions">FAQ</a></li>
		<li><a href="<?php echo home_url(); ?>/contact-home" class="contact" title="Contact us">Contact</a></li>
		<li><a href="http://www.zonetrial.com" class="contact" title="Accessories and Trial Spare">Goto zonetrial.com</a></li>
	</ul>
	<ul class="miscInfo">
		<li><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FZonetrial%2F140398192702473%3Fsk%3Dwall&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:40px;" allowtransparency="true"></iframe></li>
		<li>
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
			<p>
				Remise de 10% dès que l'historique de vos achats sur www.zonetrial.com aura atteint 600 euros.
				Cette remise sera, alors, activée par nos soins et sera définitive et sans limite dans le temps!
				Transport UE (8,50 €) GRATUIT au delà de 200,00 € !!!
			</p>
			<?php endif; ?>
		</li>
	</ul>
</div>
