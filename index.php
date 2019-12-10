<?php

/*
 * @version 1.0.1
 * @Author Habeeb Salami
 * Qode-lite is a light weight framework for rapid application development
 * that follows in the path of Codeigniter but deviate from the path of codeigniter in
 * the sense that it was inspire from the concept of
 * C language which does not have library in it but allow libraries to be developed for it.
 * to make it do anything
 */
error_reporting(1);
define('DIR', str_replace("\\", "/", getcwd())); //this project current path
define('SRCPATH', DIR . '/src/'); //framework source path
define('APPPATH', DIR . '/apps/'); //application development path
define('VIEWPATH', APPPATH . 'view/'); //the view absolute path
require_once SRCPATH . "core/core.php"; //the core of the framework
