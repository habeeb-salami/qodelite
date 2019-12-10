<?php

/**
 * Description of View for rendering application view of the project
 * this could be html, api, json, xml, pdf.
 *
 * @author Habeeb
 */
class View {

    protected $intsatnce;

    public function __construct() {
        $this->intsatnce = &$this; //instantiate this class as ready made object
    }

    public function render($page, $param, $status = false) {
        if ($status === false): //renders page
            //  loops through the passed in parameter
            if (isset($param)) {//if the param is set
                foreach ($param as $key => $value) {
                    ${$key} = $value;
                }
            }
            require VIEWPATH . $page . '.php';
        // call_user_func_array(array($this->intsatnce, 'render'), $data);
        elseif ($status === true): //return the page content as a string
            //  loops through the passed in parameter
            if (isset($param)) {//if the param is set
                foreach ($param as $key => $value) {
                    ${$key} = $value;
                }
            }
            $pageContents = file_get_contents(VIEWPATH . $page . '.php');
            return $pageContents;
        endif;
    }

    public function errors($errmssg) {
        require VIEWPATH . 'errors.php';
    }

}
