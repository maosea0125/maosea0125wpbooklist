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

require_once MAOSEA0125_WP_BOOKLIST_DIR . DS . 'vendor/autoload.php';

// 插件激活与未激活
register_activation_hook( __FILE__, array( 'BooklistDatabase', 'createTable' ) );
register_deactivation_hook( __FILE__, array( 'BooklistDatabase', 'deleteTable' ) );

// 左侧导航
add_action( 'admin_menu', 'registerBookListMenu' );
function registerBookListMenu() {
    add_menu_page( '书籍管理', '书籍管理', 'manage_options', 'maosea0125_book', '', plugins_url('/public/images/book.png', __FILE__), 26 );
}

// 初始化Propel
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->checkVersion('2.0.0-dev');
$serviceContainer->setAdapterClass('default', 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(array (
    'classname' => 'Propel\\Runtime\\Connection\\DebugPDO',
    'dsn' => 'mysql:host='.DB_HOST.';dbname='.DB_NAME,
    'user' => DB_USER,
    'password' => DB_PASSWORD,
    'attributes' => array (
        'ATTR_EMULATE_PREPARES' => false,
        'ATTR_TIMEOUT' => 30,
    ),
));
$manager->setName('default');
$serviceContainer->setConnectionManager('default', $manager);
$serviceContainer->setDefaultDatasource('default');

// 初始化Twig
$loader = new Twig_Loader_Filesystem(MAOSEA0125_WP_BOOKLIST_DIR . DS . 'templates');
$twig = new Twig_Environment($loader, array(
    'cache' => MAOSEA0125_WP_BOOKLIST_DIR . DS . 'cache',
));
$twig->clearCacheFiles();

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

// top level hook
add_action( 'toplevel_page_maosea0125_book', 'toplevel_page_maosea0125_book_callback' );
function toplevel_page_maosea0125_book_callback(){
    global $twig, $request;
    $controller = getControllerClassName($request->query->get('page'));
    $action = getActionName($request->query->get('action'));

    $currentController = new $controller();
    $currentController->$action($request, $twig);
}

function getControllerClassName($page){
    $pages = explode('_', $page);
    array_shift($pages);

    $controller = '';
    foreach($pages as $item){
        $controller .= ucfirst(strtolower($item));
    }

    return $controller;
}

function getActionName($action){
    $action = $action ? $action : 'index';
    return $action . 'Action';
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