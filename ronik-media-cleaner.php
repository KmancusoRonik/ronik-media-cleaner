<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://kmancuso.com/
 * @since             1.0.0
 * @package           Ronik_Media_Cleaner
 *
 * @wordpress-plugin
 * Plugin Name:       Ronik Media Cleaner
 * Plugin URI:        https://www.ronikdesign.com/
 * Description:       Media Cleaner is a highly effective plugin that aids in the organization and maintenance of your WordPress media library. It accomplishes this by removing unused media entries and files, while also repairing any broken entries present.
 * Version:           1.0.0
 * Author:            Kevin Mancuso
 * Author URI:        https://kmancuso.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ronik-media-cleaner
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RONIK_MEDIA_CLEANER_VERSION', '1.0.0' );


/**
 * The code that pushes for live updates via github push tag.
 */
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/ronik-design/ronik-media-cleaner',
	__FILE__,
	'ronikmediacleaner'
);
//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ronik-media-cleaner-activator.php
 */
function activate_ronik_media_cleaner() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ronik-media-cleaner-activator.php';
	Ronik_Media_Cleaner_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ronik-media-cleaner-deactivator.php
 */
function deactivate_ronik_media_cleaner() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ronik-media-cleaner-deactivator.php';
	Ronik_Media_Cleaner_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ronik_media_cleaner' );
register_deactivation_hook( __FILE__, 'deactivate_ronik_media_cleaner' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ronik-media-cleaner.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ronik_media_cleaner() {

	$plugin = new Ronik_Media_Cleaner();
	$plugin->run();

}
run_ronik_media_cleaner();
