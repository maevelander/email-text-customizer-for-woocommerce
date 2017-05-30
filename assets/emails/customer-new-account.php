<?php
/**
 * Customer new account email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-new-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates/Emails
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php
/**
 * WETC Mod
 */
$WCOption  = get_option( 'woocommerce_customer_new_account_settings' );
$emailText = 'Thanks for creating an account on {site_name}. Your username is {username}';

if ( $WCOption && $WCOption['email_text'] ) {
	$emailText = $WCOption['email_text'];
}

$emailText = str_replace( '{site_name}', esc_html( $blogname ), $emailText );
$emailText = str_replace( '{username}', esc_html( $user_login ), $emailText );
?>

    <p><?php _e( $emailText, 'woocommerce' ); ?></p>

<?php if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated ) : ?>

    <p><?php printf( __( 'Your password has been automatically generated: <strong>%s</strong>', 'woocommerce' ), esc_html( $user_pass ) ); ?></p>

<?php endif; ?>

    <p><?php printf( __( 'You can access your account area to view your orders and change your password here: %s.', 'woocommerce' ), make_clickable( esc_url( wc_get_page_permalink( 'myaccount' ) ) ) ); ?></p>

<?php do_action( 'woocommerce_email_footer', $email );
