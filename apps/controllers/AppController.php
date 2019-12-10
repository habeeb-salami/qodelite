<?php

/**
 * AppController loads any library that might be needed in all controller
 * or better still all Model that might be needed in all the controller
 *
 * @author Habeeb Salami
 */
if (!defined('APPPATH'))//if src path before accessing this file hack attack detected
    exit('script access denied'); //no direct script access

class AppController extends Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

}
