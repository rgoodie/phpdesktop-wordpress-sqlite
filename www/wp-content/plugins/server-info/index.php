<?php

	/*
	
	Plugin Name: Server Info

	Description: This plugin will show you useful information about the hosting server you are using e.g. PHP version, MySQL version, Server OS, Server Protocol, Server IP and other useful information.

	Version: 1.0

	Author: Usman Ali Qureshi

	Author URI: https://profiles.wordpress.org/usmanaliqureshi

	License: GPLv2 or later

	*/


	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

	define( 'PLUGIN_DIR', dirname(__FILE__).'/' ); 

	include_once PLUGIN_DIR . 'functions.php';
	
?>