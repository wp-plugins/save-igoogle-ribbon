<?php
/*
Plugin Name: Save iGoogle Ribbon
Plugin URI: http://saveigoogle.org/save-igoogle-campaign/
Description: When activated, this plugin will put a Save iGoogle ribbon on the top right corner of your website. Fork of the Konstantin Kovshenin (http://kovshenin.com) Stop Sopa Ribbon.
Author: Blue Lotus Works, LLC
Version: 1.0
License: GPLv2 or later
Author URI: http://bluelotusworks.com
*/

function render_save_igoogle_ribbon() {
	$ribbon_url = plugins_url( 'save-igoogle-ribbon.png', __FILE__ );
	echo "<a target='saveigoogle' class='save-igoogle-ribbon' href='http://saveigoogle.org/save-igoogle-campaign/'><img src='{$ribbon_url}' alt='Save iGoogle' style='position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;' /></a>";
}
add_action( 'wp_footer', 'render_save_igoogle_ribbon' );