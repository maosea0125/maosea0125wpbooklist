<?php
/*
Plugin Name: WordPress Book List
Plugin URI: http://doudou0911.com
Description: WordPress Book List
Version: 1.0
Author: John Mao
Author URI: http://doudou0911.com
License: GPL2
*/
if ( ! defined( 'ABSPATH' ) ) exit; //Exit if accessed directly

define("DS", DIRECTORY_SEPARATOR);
define("MAOSEA0125_WP_BOOKLIST_DIR", dirname(__FILE__));

require_once MAOSEA0125_WP_BOOKLIST_DIR . DS . 'wpbooklist' . DS . 'database.php';
require_once MAOSEA0125_WP_BOOKLIST_DIR . DS . 'wpbooklist' . DS . 'booklist.php';

// 插件激活与未激活
register_activation_hook( __FILE__, array( 'BooklistDatabase', 'createTable' ) );
register_deactivation_hook( __FILE__, array( 'BooklistDatabase', 'deleteTable' ) );

// 左侧导航
add_action( 'admin_menu', 'registerBookListMenu' );
function registerBookListMenu() {
    add_menu_page( '书籍管理', '书籍管理', 'manage_options', 'maosea0125_booklist', '', plugins_url('/public/images/book.png', __FILE__), 26 );
}

// top level hook
add_action( 'toplevel_page_maosea0125_booklist', 'toplevel_page_maosea0125_booklist_callback' );
function toplevel_page_maosea0125_booklist_callback(){
    switch ($_GET['action']) {
        case 'edit':
            break;
        case 'list':
        default:
            include MAOSEA0125_WP_BOOKLIST_DIR . DS . 'templates' . DS . 'list.php';
            break;
    }
}

function wpLog($message) {
    if (WP_DEBUG === true) {
        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }
    }
}