<?php

/**
 * Class WETCNewOrder
 */
class WETCNewOrder extends WC_Email_New_Order {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'You have received an order from {customer_name}. The order is as follows:', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}