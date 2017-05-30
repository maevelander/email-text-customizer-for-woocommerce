<?php
/**
 * Class WETCInvoice
 */
class WETCInvoice extends WC_Email_Customer_Invoice {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'An order has been created for you on {site_name}. To pay for this order please use the following link: {link}', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}