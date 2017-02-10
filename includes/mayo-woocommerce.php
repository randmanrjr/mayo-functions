<?php

//display updated cart items in header

add_filter( 'woocommerce_add_to_cart_fragments',

	'woocommerce_header_add_to_cart_fragment' );



function woocommerce_header_add_to_cart_fragment( $fragments ) {

	ob_start();

	?>

	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>"

	   title="<?php _e( 'View your shopping cart' ); ?>">
		<i class="fa fa-shopping-cart"> </i>
		<span class="cart-items">

        <?php echo sprintf (_n( '(%d)', '(%d)',

	        WC()->cart->cart_contents_count ),

	        WC()->cart->cart_contents_count ); ?> -

			<?php echo WC()->cart->get_cart_total(); ?>
            </span>

	</a>

	<?php



	$fragments['a.cart-contents'] = ob_get_clean();



	return $fragments;

}

//remove default sorting drop-down

remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);