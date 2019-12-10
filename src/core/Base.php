<?php

/**
 * Description of Base
 *
 * @author Habeeb Salami
 */
if (!defined('SRCPATH'))//if src path before accessing this file hack attack detected
    exit('direct access to this script is base script allowed'); //no direct script access

class Base {

    //put your code here
    private $var = array();
    private static $instance;
    protected $load;

    public function __construct() {
        self::$instance = & $this;
    }

    public static function getInstance() {
        return self::$instance;
    }

    protected function load($resources) {
        $this->resources = & load_class($resources);
        return $this->resources;
    }

}
