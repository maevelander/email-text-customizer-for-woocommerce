<?php
/**
 * Class WETCOrderOnHold
 */
class WETCOrderOnHold extends WC_Email_Customer_On_Hold_Order {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'Your order is on-hold until we confirm payment has been received. Your order details are shown below for your reference:', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}