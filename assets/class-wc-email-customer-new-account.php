<?php
/**
 * Class WETCNewAccount
 */
class WETCNewAccount extends WC_Email_Customer_New_Account {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'Thanks for creating an account on {site_name}. Your username is {username}', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}