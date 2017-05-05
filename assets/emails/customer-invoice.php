<?php
/**
 * Customer invoice email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-invoice.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email );


/**
 * WETC Mod
 */
$WCOption  = get_option( 'woocommerce_customer_invoice_settings' );
$emailText = 'An order has been created for you on {site_name}. To pay for this order please use the following link: {link}';

if ( $WCOption && $WCOption['email_text'] ) {
	$emailText = $WCOption['email_text'];
}

$emailText = str_replace( '{site_name}', get_bloginfo( 'name', 'display' ), $emailText );
$emailText = str_replace( '{link}', '<a href="' . esc_url( $order->get_checkout_payment_url() ) . '">' . __( 'pay', 'woocommerce' ) . '</a>', $emailText );



?>

<?php if ( $order->has_status( 'pending' ) ) : ?>
	<p><?php _e( $emailText, 'woocommerce' ); ?></p>
<?php endif; ?>

<?php

/**
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Emails::order_schema_markup() Adds Schema.org markup.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
