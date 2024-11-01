<?php
/*
Plugin Name: WP Auto Update Plugins
Plugin URI: https://wordpress.org/plugins/wp-auto-update-plugins/
Description: Automatically update your wordpress plugin by activating this plugin, no setup required.
Version: 1.0.3
Author: Hawp Media
Author URI: http://hawpmedia.com
License: GPLv2 or later
Text Domain: hawp-wp-aup
*/

if (!defined('ABSPATH')) exit();

class hm_wpaup_module {

	public function __construct() {
		add_filter('auto_update_plugin', array($this,'__return_true')); 
	}

}
$hm_wpaup_module = new hm_wpaup_module();