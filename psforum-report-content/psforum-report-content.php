<?php
/**
 * Plugin Name: PS Forum - Inhalt melden
 * Plugin URI:  https://n3rds.work/piestingtal_source/ps-forum-plugin/
 * Description: Ermöglicht Benutzern, unangemessene Inhalte in Themen und Antworten zu melden.
 * Version:     1.0.9
 * Author:      DerN3rd
 * Author URI:  https://n3rds.work/
 * Text Domain: psforum-report-content
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Include the plugin class
require_once( plugin_dir_path( __FILE__ ) . 'classes/class-psforum-report-content.php' );

// Get the class instance
add_action( 'plugins_loaded', array( 'psf_ReportContent', 'get_instance' ) );

// Register activation hook
register_activation_hook( __FILE__, array( 'psf_ReportContent', 'activation_check' ) );