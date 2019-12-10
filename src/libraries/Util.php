<?php

if (!defined('SRCPATH'))//if src path before accessing this file hack attack detected
    exit('script access denied'); //no direct script access

class Util {

    private static $instance;

    public function __construct() {
        self::$instance = & $this;
    }

    public static function &get_instance() {
        return self::$instance;
    }

    /**
      @return string Returns the site address with the http: of the current page
     */
    public function siteName() { //this return the present url of the site
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $sitename = "http://" . $host . $uri;
        return $sitename;
    }

    /**

     * @param string $url the url to build the link on
     * @param string $text The string to be render for the page link
     * @param string $attr Additional attribute for the page html tag
      @return string returns the a link for html page with all the site attribute */
    public function anchor($url = '', $text, $attr = '') {
        //create an anchor tag based on the url passed in as the page segment
        $attributes = ''; //empty url
        if (!empty($attr)) {
            foreach ($attr as $key => $value) {
                $attributes .= ' ' . $key . '="' . $value . '"';
            }
        }
        $url = $url; //
        // $attr = implode('=', $attributes);
        $sitename = Util::siteName() . "/" . $url;   //calling sitename function and adding it to the submitted url
        return '<a href="' . $sitename . '" ' . $attributes . '>' . $text . '</a>';
    }

    public function siteUrl($add) {
        //this method returns the site url concantenated with the in passed argument as the segment
        $extra = $add; //'index.php';
        $sitename = Util::siteName() . "/" . $extra;   //calling sitename function and adding it to the submitted url
        return $sitename;
    }

    public function headout($wheretogo) {
        header("Location:" . "$wheretogo");
        exit;
    }

}
