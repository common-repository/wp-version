<?php
/*
Plugin Name: Version
Plugin URI: http://www.nicolasbonniot.com/conception-informatique/web/plugins-wordpress/Version
Description: Add a website version number in your website footer.
Version: 1.5.0.0
Author: Nicolas BONNIOT
Author URI: http://www.nicolasbonniot.com/
*/

/* Copyright 2010 Nicolas BONNIOT (email : nicolas@nicolasbonniot.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/


//$ct = current_theme_info();
//$version_wordpress = $ct->version

// INITIALIZATION - locales @ /lang/

function SWV_nicolasbonniot_init() {
	load_plugin_textdomain('wp-version', '', 'wp-version/lang');//PLUGINDIR.'/'.dirname(plugin_basename(__FILE__)), dirname(plugin_basename(__FILE__)));
}

add_action('init', 'SWV_nicolasbonniot_init');



// Add administration items in the admin panel
function SWV_nicolasbonniot_pages() {

	add_options_page( __('SWV 0ptions', 'wp-version'), 'S. Website Version', 'administrator', 'wp-version/version-admin.php' );
}
add_action( 'admin_menu', 'SWV_nicolasbonniot_pages' );	


//on activation add default options to databaseoptions 
function SWV_nicolasbonniot_activate() {

	$options=array(	'version_major'=> '1', 
					'version_minor'=> '0', 
					'version_revision'=> '0', 
					'version_build'=> '0',
					'RAZ_Num' => 'true',
					'nombre' => '4',
					'HTMLCodeBefore' => '',
					'HTMLCodeAfter' => '',
					'TextBefore' => 'Version '					
				   ); 
	add_option( 'SWV_options',$options,'','no' );
}
register_activation_hook( __FILE__, 'SWV_nicolasbonniot_activate' );

//on deactivation unregister options and remove options
function SWV_nicolasbonniot_deactivate() {

	$saved_optionname = 'SWV_options';
	unregister_setting( 'SWV saved options', $saved_optionname, '' );
	delete_option($saved_optionname);
}
register_deactivation_hook( __FILE__, 'SWV_nicolasbonniot_deactivate' );

// Custom template tag to retrieve the current version  
function get_website_version() {
	$before = get_option( 'HTMLCodeBefore' );
	$after = get_option( 'HTMLCodeAfter' );
	$textBefore = get_option( 'TextBefore' );
	
	switch(get_option( 'nombre' ))
	{
		case '2':
			echo($before . $textBefore .' ' . get_option( 'version_major' ) . '.' . get_option( 'version_minor' ) . $after);	
		break;
		case '3':
			echo($before . $textBefore .' ' . get_option( 'version_major' ) . '.' . get_option( 'version_minor' ) . '.' . get_option( 'version_revision' ) . $after);	
		break;
		case '4':
			echo($before . $textBefore .' ' . get_option( 'version_major' ) . '.' . get_option( 'version_minor' ) . '.' . get_option( 'version_revision' ) . '.' . get_option( 'version_build' ) . $after);	
		break;
	}
}
?>
