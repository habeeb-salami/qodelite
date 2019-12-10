<?php

/**
 * Description of Model
 *
 * @author Habeeb
 */
if (!defined('SRCPATH'))
    exit('No direct script access allowed'); //no direct script access
/**
 * Description of Model
 *
 * @author Habeeb
 */

class Model {

    //put your code here
    private $instance;
    private $load;
    protected $db; //the database object

    function __construct() {
        $this->instance = &$this;
        //$this->load = new Loader();
    }

    public function database() {
        //instantiate the database db object for the sub class
        return $this->db = $this->load->database();
    }

}
