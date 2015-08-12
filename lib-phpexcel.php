<?php
/*
Plugin Name: PHPExcel Library
Plugin URI: 
Description: Provides the PHPExcel library to other plugins and themes.
Version: 1.8.0
Author: Dennis Wallace (plugin), PHPExcel (library)
Author URI: http://www.codeplex.com/PHPExcel
License: LGPL v2.1
License URI: http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt
*/

// Only load if we don't already have the core class defined
if( !class_exists( 'PHPExcel' ) ) {
	include_once('Classes/PHPExcel.php');
}
