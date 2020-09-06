<nav class="woo-nav" id="woo-navigation">

	<h1 class="screen-reader-text">Woo Menu</h1>

	<ul class="menu menu--icons">

		<li class="list-item--search">
			<?php get_template_part( 'searchform' ); ?>
		</li>
		
		<li>
			<a href="<?php echo wc_get_page_permalink( 'cart' ); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
			<i class="icon-cart"><span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span></i>
			
		</a>
	</li>
	
	<li>
		<a href="<?php echo wc_get_page_permalink( 'myaccount' ); ?>" title="<?php _e( 'View your account' ); ?>">
			<i class="icon-user"></i>
		</a>
	</li>

	</ul>

</nav><!-- #woo-navigation -->