<?php
/**
 * Plugin Name: Copyright Shortcode
 * Plugin URI: http://codemuffin.com
 * Description: Use [copyright] to insert the current year and your site name
 * Version: 1
 * Author: Chris Bloomfield
 * Author URI: http://codemuffin.com
 * License: GPL2
 */

// Main function
function muffin_copyright_shortcode() {
	$sitename = get_bloginfo( 'name' ); 
	$output = '<span class="copyright">&copy; Copyright '. date('Y') .' | <a href="/">'. $sitename .'</a></span>';		
	return $output;
}

// Ensure this shortcode hasn't already been registered
if ( shortcode_exists( 'copyright' ) ) {
	// Shortcode exists already! We can use a variant instead
	add_shortcode('muffincopyright', 'muffin_copyright_shortcode');	
} else {
	// Shortcode hasn't been registered, so register it
	add_shortcode('copyright', 'muffin_copyright_shortcode');	
}
?>