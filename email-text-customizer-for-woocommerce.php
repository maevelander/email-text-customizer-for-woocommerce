<?php

/*
 * Plugin Name: Email Text Customizer for WooCommerce
 * Plugin URI: https://wordpress.org/plugins/email-text-customizer-for-woocommerce
 * Description: Allows you to customize the text of all WooCommerce emails without having to delve into template code.
 * Author: EnigmaWeb
 * Author URI: https://www.enigmaweb.com.au
 * Version: 1.0.3
 * Text Domain: woo-email-text-customizer
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


/**
 * Class WETC
 */
class WETC {

	/**
	 * Do the magic
	 */
	public function __construct() {

		/** WC Email Classes Modifier */
		add_filter( 'woocommerce_email_classes', array( $this, 'WCEmailClassesModifier' ) );

		/** Copy WC Email Modified Templates on Activation */
		register_activation_hook( __FILE__, array( $this, 'WCEmailTemplateCopier' ) );

	}


	/**
	 * Copy WC Email Modified Templates
	 */
	public function WCEmailTemplateCopier() {

		// Source & Destination path
		$src = plugin_dir_path( __FILE__ ) . 'assets/emails/';
		$dst = get_stylesheet_directory() . '/woocommerce/emails/';

		// If Woo emails templates dir is not exists
		if ( ! file_exists( $dst ) ) {

			// Create directories
			mkdir( get_stylesheet_directory() . '/woocommerce/' );
			mkdir( get_stylesheet_directory() . '/woocommerce/emails/' );

		}

		// If Woo emails templates dir exists
		if ( is_dir( $src ) ) {

			if ( $dir = opendir( $src ) ) {

				while ( ( $file = readdir( $dir ) ) !== false ) {
					if ( $file != '.' && $file != '..' ) {

						if ( file_exists( $dst . $file ) ) {
							unlink( $dst . $file );
						}

						// Copy WC email templates files
						copy( $src . $file, $dst . $file );

					}
				}

				closedir( $dir );
			}
		}


	}


	/**
	 * WC Default Email Classes Modifier
	 *
	 * @param array $email_classes
	 *
	 * @return mixed
	 */
	public function WCEmailClassesModifier( $email_classes ) {

		require ('assets/wetc-wc-email-classes-modifier.php');

		$email_classes['WC_Email_New_Order']                 = new WETCNewOrder();
		$email_classes['WC_Email_Cancelled_Order']           = new WETCCancelledOrder();
		$email_classes['WC_Email_Failed_Order']              = new WETCFailedOrder();
		$email_classes['WC_Email_Customer_On_Hold_Order']    = new WETCOrderOnHold();
		$email_classes['WC_Email_Customer_Processing_Order'] = new WETCProcessingOrder();
		$email_classes['WC_Email_Customer_Completed_Order']  = new WETCCompletedOrder();
		$email_classes['WC_Email_Customer_Refunded_Order']   = new WETCRefundedOrder();
		$email_classes['WC_Email_Customer_Invoice']          = new WETCInvoice();
		$email_classes['WC_Email_Customer_Note']             = new WETCNote();
		$email_classes['WC_Email_Customer_Reset_Password']   = new WETCResetPassword();
		$email_classes['WC_Email_Customer_New_Account']      = new WETCNewAccount();

		return $email_classes;

	}

}

/** Main Plugin Instance */
$WETC = new WETC;
