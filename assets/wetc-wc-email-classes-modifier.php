<?php

/**
 * WETC Email Classes Modifier
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


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


/**
 * Class WETCCancelledOrder
 */
class WETCCancelledOrder extends WC_Email_Cancelled_Order {

	public function __construct() {

		parent::__construct();

		$this->form_fields['email_text'] = array(
			'title'       => __( 'Email Text', 'woocommerce' ),
			'type'        => 'textarea',
			'description' => __( 'This controls the body text of the email template.', 'woocommerce' ),
			'default'     => __( 'The order {order_number} from {customer_name} has been cancelled. The order was as follows:', 'woocommerce' ),
			'desc_tip'    => true
		);

	}

}

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