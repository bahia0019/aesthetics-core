<?php
/**
 * Aesthetics Custom Post Types bootstrap file.
 *
 * @link https://aesthetics.net
 * @since 0.1
 * @package Aesthetics_Core
 *
 * @wordpress-plugin
 * Plugin Name:       Aesthetics Core Functionality Plugin
 * GitHub Plugin URI: https://github.com/
 * Description:       Adds Custom Post Types & Taxonomies and additional core functionality for Aesthetics custom cite.
 * Version:           0.1
 * Author:            Flaunt Your Site
 * Author URI:        https://flauntyoursite.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       aescore
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Loads all Post Types
 */
function aescore_post_types() {
	require_once 'cpts/services.php';
	require_once 'cpts/case-study.php';
}
add_action( 'init', 'aescore_post_types' );
