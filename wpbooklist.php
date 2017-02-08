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

define("MAOSEA0125_WP_BOOKLIST_DIR", dirname(__FILE__));

require_once MAOSEA0125_WP_BOOKLIST_DIR . DIRECTORY_SEPARATOR . 'wpbooklist' . DIRECTORY_SEPARATOR . 'database.php';

// 插件激活与未激活
register_activation_hook( __FILE__, array( 'BooklistDatabase', 'createTable' ) );
register_deactivation_hook( __FILE__, array( 'BooklistDatabase', 'deleteTable' ) );

// 左侧导航
add_action( 'admin_menu', 'registerBookListMenu' );
function registerBookListMenu() {
    add_menu_page( '书籍管理', '书籍管理', 'manage_options', 'maosea0125_booklist', 'booklistPage', '', 26 );
}

function booklistPage(){
    
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