<?php

/**
 * Description of Init
 *
 * @author Habeeb
 */
class Init {

    private $page; //requested page name

    public function __construct() {
        $this->page = '';
        if (isset($_GET['page']) && $_GET['page'] != NULL) {
            $this->page = $_GET['page'];
        } else {
            $this->page = 'home'; //else the default page
        }
        $this->pageLoader();
    }

    private function pageLoader() {
        $filename = VIEWPATH . rtrim($this->page, '/') . ".php";
        if (file_exists($filename)) {
            include_once $filename;
        } else {
            //load the 404 error page
            include VIEWPATH . "404.php";
        }
    }

    public function loader() {
        foreach (is_loaded() as $var => $class) {
            $this->$var = & load_class($class);
        }
    }

}
