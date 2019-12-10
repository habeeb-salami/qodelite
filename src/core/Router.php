<?php

/**
 * Description of Router
 *
 * @author Habeeb
 */
if (!defined('SRCPATH'))
    exit('No direct script access allowed'); //no direct script access
/**
  @version 1.0.1
 * @author Habeeb
 *
 */

class Router {

// private $defaultPage;
    private $page;

    public function __construct() {
        require_once APPPATH . 'config/routes.php';
        if (isset($_GET['page']) && $_GET['page'] != NULL) {
            //if page is requested
            $this->page = $_GET['page'];
            if (array_key_exists($this->page, $routes)) {
                $this->page = $routes[$this->page]; //get the router from the list of router
                $this->loadPage();
            } else { //pass the url along
                $this->page = $_GET['page']; //$routes['error'];
                $this->loadPage();
            }
        } else {
            //defualt page is requested
            $this->page = $routes['default'];
            $this->loadPage();
        }
    }

    private function loadPage() {
//load the page in here
        $trimUrl = rtrim($this->page, '/');
        $url = explode('/', $trimUrl);
        $controller = ucfirst($url[0]);
        array_shift($url);
        $action = $url[0];
        array_shift($url);
        $param = $url;
        if (empty($action)): //if controller is set and action not set then
            $action = 'index';
            $controller = new $controller;
            $controller->{$action}();
        elseif (empty($controller)) : //if no controller
            $controller = ucfirst('error');
            $action = 'index';
            $controller = new $controller;
            $controller->{$action}();
        else :
            $controller = new $controller;
            if ((int) method_exists($controller, $action)) {
                call_user_func_array(array($controller, $action), $param);
            } else {
                print_r('Missing action of the controller');
                echo 'Method <strong>' . $action . '</strong> does not exist in ' . $controller;
            }
        endif;
    }

}
