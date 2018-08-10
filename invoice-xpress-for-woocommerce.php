<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/wakeup-os/invocicexpress-for-woocommerce
 * @since             1.0.0
 * @package           invoiceXpress for Woocommerce
 *
 * @wordpress-plugin
 * Plugin Name:       invoiceXpress for Woocommerce
 * Plugin URI:        https://github.com/wakeup-os/invocicexpress-for-woocommerce
 * Description:       invoiceXpress for Woocommerce
 * Version:           1.0.0
 * Author:            Wakeup, Lda.
 * Author URI:        http://log.pt/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       invoice-xpress-for-woocommerce
 * Domain Path:       /languages
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in lib/Activator.php
 */
\register_activation_hook( __FILE__, 'InvoiceXpressWoocommerce\Activator::activate' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in lib/Deactivator.php
 */
\register_deactivation_hook( __FILE__, 'InvoiceXpressWoocommerce\Deactivator::deactivate' );

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
\add_action( 'plugins_loaded', function () {
	$plugin = new InvoiceXpressWoocommerce\Plugin( 'invoice-xpress-for-woocommerce', '1.0.0' );
	$plugin->run();
} );
