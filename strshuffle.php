<?php
/*
Plugin Name: strshuffle
Plugin URI: http://maxdoom.com
Description: A simple shortcode to shuffle the chars in a string. (See str_shuffle)
Version: 0.1
Author: max.doom
Author URI: http://maxdoom.com
License: GPLv2
*/

function strshuffle_shortcode($atts, $content=null)
{
	if(! $content) return null;
	return str_shuffle($content);
}

add_shortcode( 'strshuffle', 'strshuffle_shortcode' );
