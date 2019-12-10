<?php

include_once SRCPATH . "pdo-db/class.pdowrapper.php";

/**
 * Description of MyDb
 *
 * @author Habeeb Salami
 */
class MyDb extends PdoWrapper {

    public function __construct($dsn = array()) {
        parent::__construct($dsn);
    }

}
