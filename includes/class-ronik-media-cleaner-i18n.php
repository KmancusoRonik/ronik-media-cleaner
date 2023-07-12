<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://kmancuso.com/
 * @since      1.0.0
 *
 * @package    Ronik_Media_Cleaner
 * @subpackage Ronik_Media_Cleaner/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ronik_Media_Cleaner
 * @subpackage Ronik_Media_Cleaner/includes
 * @author     Kevin Mancuso <kevin@ronikdesign.com>
 */
class Ronik_Media_Cleaner_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ronik-media-cleaner',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
