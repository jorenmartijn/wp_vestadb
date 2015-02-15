<?php
/**
 * Vesta Database
 *
 * Database for Vestachem
 *
 * @package   Vesta_Database
 * @author    Joren de Graaf <jorendegraaf@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.jorendegraaf.nl
 * @copyright 2014 Joren de Graaf
 *
 * @wordpress-plugin
 * Plugin Name:       Vesta Database
 * Plugin URI:        http://www.jorendegraaf.nl
 * Description:       Database for Vestachem
 * Version:           0.0.1
 * Author:            Joren de Graaf
 * Author URI:        http://www.jorendegraaf.nl
 * Text Domain:       vestadb
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: 
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
// Initialize PHPExcel
require_once( plugin_dir_path(__FILE__). 'vendor/autoload.php');
/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

require_once( plugin_dir_path( __FILE__ ) . 'public/class-vestadb.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 */
register_activation_hook( __FILE__, array( 'Vesta_Database', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Vesta_Database', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Vesta_Database', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-vestadb-admin.php' );
	add_action( 'plugins_loaded', array( 'Vesta_Database_Admin', 'get_instance' ) );

}
