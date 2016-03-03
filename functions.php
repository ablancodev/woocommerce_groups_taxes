function eggemplo_woocommerce_product_tax_class( $tax_class, $product ) {
	// you can get this value from Groups->Groups table
	$group_id = 2;
	
	$user_id = get_current_user_id();
	
	$exists = Groups_User_Group::read( $user_id, $group_id );
	if ( $exists ) {
		$tax_class = 'Zero Rate';
	}
	return $tax_class;
}
add_filter( 'woocommerce_product_tax_class', 'eggemplo_woocommerce_product_tax_class', 1, 2 );
