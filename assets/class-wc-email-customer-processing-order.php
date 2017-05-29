<?php
/**
 * Class WETCProcessingOrder
 */
class WETCProcessingOrder extends WC_Email_Customer_Processing_Order {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'Your order has been received and is now being processed. Your order details are shown below for your reference:', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}