<?php
/*
	Plugin Name: KPU Kaltura Enable oEmbed
	Plugin URI:
	Description: Enable KPU Kaltura Mediaspace oEmbed within your site.
	Version: 1.0
	Author: Robin Leung    
	License: GPL2
*/
add_action( 'init', 'custom_oembed_provider');
function custom_oembed_provider(){
    wp_oembed_add_provider( 'https://media.kpu.ca/id/*', 'https://media.kpu.ca/oembed/' );
}