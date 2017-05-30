<?php
/**
 * Class WETCCompletedOrder
 */
class WETCCompletedOrder extends WC_Email_Customer_Completed_Order {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'Hi there. Your recent order on {site_name} has been completed. Your order details are shown below for your reference:', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}