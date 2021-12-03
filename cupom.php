add_action('woocommerce_cart_calculate_fees' , 'ganhe_um_produto');
 
function ganhe_um_produto( WC_Cart $cart ){
	
  $rtQtdMin = 3;
	
	$rtCupom = 'Digite aqui o nome do cupom';
	
	$rtDesc = '';
 
    if( $cart->cart_contents_count < $rtQtdMin ) return;
         
    $match = false;
    $applied_coupons = $cart->get_applied_coupons(); 
     
    foreach ($applied_coupons as $coupon_code) {
        $coupon = get_page_by_title($coupon_code, OBJECT, 'shop_coupon');
        if ($coupon->post_title == $rtCupom) {
			$rtDesc = $coupon->post_excerpt;
            $match = true;
            break;
        }
    }
    if (!$match) return;
     
    foreach ( $cart->get_cart() as $cart_item_key => $values ) {
        $_product = $values['data'];
         
        $price = $_product->get_price_including_tax();
        for ($i = 1; $i <= $values['quantity']; $i++) {
            $product_price[] = $price;
        }
    }
    sort($product_price, SORT_NUMERIC);
    $free_items = floor($cart->cart_contents_count/4);
 
    $discount_amount = 0;
    for ($i = 1; $i <= $free_items; $i++) {
        $discount_amount += array_shift($product_price);
    }
    $cart->add_fee( $rtDesc, -$discount_amount);
}
