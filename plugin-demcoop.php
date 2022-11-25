<?php
/**
 * Plugin Name:       Demcoop Plugin
 * Plugin URI:        /plugins/demcoop
 * Description:       Handle the basics with this plugin.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            David Ramirez
 * Author URI:        https://github.com/davidra24/demcoop
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       demcoop-plugin
 * Domain Path:       /demcoop
 */

define("DEMC_PATH", plugin_dir_path(__FILE__));

require_once DEMC_PATH .. 'demcoop/index.php';
