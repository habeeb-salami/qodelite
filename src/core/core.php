<?php

/**
 * @version 1.0.1
 * @Author Habeeb Salami
 * Description This is the main entry point of the application after the index page
 * does all the file loading and class initialisations and inclusion
 */
if (!defined('SRCPATH'))//if src path before accessing this file hack attack detected
    exit('You cant access this script directly'); //no direct script access

require_once SRCPATH . 'core/Router.php';
require_once SRCPATH . 'core/Base.php';
require_once SRCPATH . 'core/Controller.php';
require_once SRCPATH . 'core/View.php';
require_once SRCPATH . 'core/Model.php';
require_once APPPATH . 'controllers/AppController.php';

function &is_loaded($class = '') {
    static $_is_loaded = array();
    if ($class !== '') {
        $_is_loaded[strtolower($class)] = $class;
    }
    return $_is_loaded;
}

function &load_class($classNew, $param = NULL) {
    static $_classes = array();
    $class = ucfirst($classNew);
    // Does the class exist? If so, we're done...
    if (isset($_classes[$class])) {
        return $_classes[$class];
    }
    // Keep track of what we just loaded
    $_classes[$class] = isset($param) ? new $class($param) : new $class();
    return $_classes[$class];
}

spl_autoload_register(function ($class) {
    //Auto load controller class file
    if (file_exists(APPPATH . 'controllers/' . ucfirst($class) . '.php')) {
        require_once APPPATH . 'controllers/' . ucfirst($class) . '.php';
    } elseif (file_exists(APPPATH . "libraries/" . ucfirst($class) . ".php")) {
        require_once APPPATH . "libraries/" . ucfirst($class) . ".php";
    } elseif (file_exists(APPPATH . 'models/' . $class . '.php')) {
        require_once APPPATH . 'models/' . $class . '.php';
    } elseif (file_exists(APPPATH . "view/$class.php")) {
        require_once SRCPATH . "view/$class.php";
    } elseif (file_exists(SRCPATH . "libraries/" . ucfirst($class) . ".php")) {
        require_once SRCPATH . "libraries/" . ucfirst($class) . ".php";
    } elseif (file_exists(SRCPATH . "core/" . $class . ".php")) {
        require_once SRCPATH . "core/" . ucfirst($class) . ".php";
    } else {
        /* Error Generation Code Here */
        echo '<strong>' . $class . '  does not exist!!!</strong>';
        exit();
    }
});
$router = new Router();
require_once APPPATH . "config/config.php"; //get the application configuration development path

