<?php
/**
 * Class WETCResetPassword
 */
class WETCResetPassword extends WC_Email_Customer_Reset_Password {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'Someone requested that the password be reset for the following account:
			
Username: {username}

If this was a mistake, just ignore this email and nothing will happen.

To reset your password, visit the following address:

{password_reset_link}', 'woocommerce' ),

			'desc_tip' => true
		);

	}

}