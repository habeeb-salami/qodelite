<?php

/**
 * Description of Controller
 *
 * @author Habeeb Salami
 */
if (!defined('SRCPATH'))//if src path before accessing this file hack attack detected
    exit('script access denied'); //no direct script access

class Controller extends Base {

    private $var = array();
    private static $instance;

    //put your code here
    public function __construct() {
        parent::__construct();
        self::$instance = & $this;
        $this->view = new View();
    }

    public function index($page = 'default') {
        $this->render->view($page);
    }

    public static function getInstance() {
        return self::$instance;
    }

}
