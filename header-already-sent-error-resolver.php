<?php
/*
Plugin Name: Header Already Sent Error Resolver
Plugin URI:  https://1stphp.wordpress.com/
Description: Header Already Sent Error Resolver solves header already sent error from entire  site. It solves this error automatically.
Version:     1.0
Author:      Prashant Baldha
Author URI:  https://1stphp.wordpress.com/
License:     Private
*/

/* To resolve header already sent error */
function hase_output_buffer_start() {
	ob_start();
}
add_action('init', 'hase_output_buffer_start', 1);

