<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
Plugin Name: Migrate Drupal Users
Description: A plugin to migrate users from Drupal to WordPress.
Author: Ramlal Solanki
Author URI: https://about.me/ramlal
Version: 1.0
*/
//to add custom page in admin section
add_action('admin_menu', 'migrate_drupal_users_plugin');
function migrate_drupal_users_plugin(){
	$plugins_url	=	plugin_dir_url( __FILE__ ) . 'images/dwp.png' ;
	add_menu_page( 'Migrate Drupal Users', 'Migrate Drupal Users', 'manage_options', 'migrate-drupal-users-plugin', 'migrate_drupal_users_init', $plugins_url );
}
function migrate_drupal_users_init(){
	require plugin_dir_path( __FILE__ ) . 'migrate_drupal_users.php';
}
?>