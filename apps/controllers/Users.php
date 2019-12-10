<?php

/**
 * Users details shall be manage in here
 *
 * @author Habeeb Salami
 */
class Users extends AppController {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function index($page = 'home') {
        //$this->view->messg = 'Hello from the index controller';
        // $this->users = $this->load->model('Result');
        $data['book'] = array('Motivational', 'Educational', 'Inspirational');
        $data['name'] = 'Habeeb Salami';
        $data['age'] = '23';
        $this->view->render('home', $data);
        // $this->view->render('sidebar');
        // $this->view->render($page, $data);
        // $this->view->render('footer');
    }

    private function getUsers() {
        return $arryDetails;
    }

    public function register() {
        if (isset($_POST['register'])) {
            //  print_r($_POST);
        }
    }

}
