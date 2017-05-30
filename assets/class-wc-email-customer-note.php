<?php
/**
 * Class WETCNote
 */
class WETCNote extends WC_Email_Customer_Note {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'Hello, a note has just been added to your order:', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}
