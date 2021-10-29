<?php

/**
 * Plugin Name: TP Flatsome Vertical Menu
 * Description: Vertical Menu for Flatsome theme by pdutie94@gmail.com
 * Plugin URI: https://tienpham.xyz/plugins/tp-flatsome-vertical-menu
 * Author: TienPham
 * Author URI: https://tienpham.xyz
 * Version: 1.1.4
 * Requires at least: 5.2
 * Requires PHP: 5.6
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: tp-fvm
 * Domain Path: /languages
 *
 * @since 1.0.0
 */

define( 'TP_FL_VERTICAL_MENU_VERSION', '1.1.4' );
define( 'TP_FL_VERTICAL_MENU_DIR', plugin_dir_path( __FILE__ ) );
define( 'TP_FL_VERTICAL_MENU_URI', plugins_url( '/', __FILE__ ) );

$theme = wp_get_theme();

// Only run with theme Flatsome.
if ( 'flatsome' !== $theme->template ) {
	return;
}

require_once 'inc/helpers.php';
require_once 'inc/class-tp-vertical-menu-dropdown.php';
require_once 'inc/class-tp-vertical-menu.php';

$tp_vertical_menu = new TP_Vertical_Menu();
