<?php
/**
 * Plugin Name: WC Reviews Carousel
 * Plugin URI: https://itsmereal.com/plugins/woocommerce-reviews-carousel
 * Description: A simple plugin that converts WooCommerce product reviews to carousel
 * Version: 1.0.0
 * Author: Al-Mamun Talukder
 * Author URI: https://itsmereal.com
 * Requires at least: 4.3
 * Tested up to: 5.4.1
 * License: GPLv3 or later
 * Text Domain: wcprc
 */

defined( 'ABSPATH' ) || exit;

/**
 * Include Template Parts
 */

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/customizer.php';

/**
 *	Plugin Update Checker
 *  @source https://github.com/YahnisElsts/plugin-update-checker
 */

require_once __DIR__ . '/includes/update-checker/plugin-update-checker.php';

$imrsmodsUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/itsmereal/wc-reviews-carousel',
	__FILE__,
	'wc-reviews-carousel'
);

/**
 * Add settings link to plugin actions
 */

function wcprc_add_plugin_link ( $links ) {
	$link = add_query_arg(
        array(
            'url'            => urlencode( site_url( '/?wcprc_settings=true' ) ),
            'return'         => urlencode( admin_url() ),
            'wcprc_settings' => 'true',
        ),
        'customize.php?autofocus[section]=wcprc_settings'
    );
    $settings_link = array(
        '<a href="' . admin_url( $link ) . '">Settings</a>',
    );
    return array_merge( $links, $settings_link );
}

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wcprc_add_plugin_link' );