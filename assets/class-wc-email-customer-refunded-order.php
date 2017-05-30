<?php
/**
 * Class WETCRefundedOrder
 */
class WETCRefundedOrder extends WC_Email_Customer_Refunded_Order {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'Hi there. Your order on {site_name} has been refunded.', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}