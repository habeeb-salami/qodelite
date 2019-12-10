<?php

/**
 * Handles all Post Request and route it to the appropriate controller
 *
 * @author Habeeb Salami
 */
class Post {

    private $posts;
    private $postsValue;

    //put your code here
    public function __construct() {
        $this->posts = array();
    }

    public function posts($posts = array()) {
        print_r($posts);
    }

    public function __get($name) {
        return $this->posts[$name];
    }

    public function __set($name, $value) {
        $this->posts[$name] = $value;
    }

}
