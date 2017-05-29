<?php

/*
 * Plugin Name: Email Text Customizer for WooCommerce
 * Plugin URI: https://wordpress.org/plugins/email-text-customizer-for-woocommerce
 * Description: Allows you to customize the text of all WooCommerce emails without having to delve into template code.
 * Author: EnigmaWeb
 * Author URI: https://www.enigmaweb.com.au
 * Version: 1.0
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

		$email_classes['WC_Email_New_Order']                 = include ('assets/class-wc-email-new-order.php');
		$email_classes['WC_Email_Cancelled_Order']           = include ('assets/class-wc-email-cancelled-order.php');
		$email_classes['WC_Email_Failed_Order']              = include ('assets/class-wc-email-failed-order.php');
		$email_classes['WC_Email_Customer_On_Hold_Order']    = include ('assets/class-wc-email-customer-on-hold-order.php');
		$email_classes['WC_Email_Customer_Processing_Order'] = include ('assets/class-wc-email-customer-processing-order.php');
		$email_classes['WC_Email_Customer_Completed_Order']  = include ('assets/class-wc-email-customer-completed-order.php');
		$email_classes['WC_Email_Customer_Refunded_Order']   = include ('assets/class-wc-email-customer-refunded-order.php');
		$email_classes['WC_Email_Customer_Invoice']          = include ('assets/class-wc-email-customer-invoice.php');
		$email_classes['WC_Email_Customer_Note']             = include ('assets/class-wc-email-customer-note.php');
		$email_classes['WC_Email_Customer_Reset_Password']   = include ('assets/class-wc-email-customer-reset-password.php');
		$email_classes['WC_Email_Customer_New_Account']      = include ('assets/class-wc-email-customer-new-account.php');

		return $email_classes;

	}

}

/** Main Plugin Instance */
$WETC = new WETC;
