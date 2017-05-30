<?php
/**
 * Class WETCFailedOrder
 */
class WETCFailedOrder extends WC_Email_Failed_Order {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'Payment for order {order_number} from {customer_name} has failed. The order was as follows:', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}