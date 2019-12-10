<?php

/**
 * $key = '';
 * Encryption Key, is a 64 key encryption for the cookies and for session id
  this can be generated with an md5(), sha1, or even base64 generator for generating this input
 *  of any word or sentence even files */
/* Site wide configutrations goes in here */
//the default controller
$config['default_controller'] = 'index';
//site name or url
$config['base_url'] = 'http://sitename.com';
$config['host_name'] = 'http//localhost/payment/';
//change to true if you intend to use database in your application
$config['use_database'] = TRUE;
//change to true if you intend to use cookies
$config['cookies'] = FALSE;
//change to true if you intend to Enable encryption site wide
$config['encrypt'] = FALSE;
//create your own encryption key if you intend to use a security encryption key
$config['secret_key'] = 'YTY5OTJmNTI1ZWQxZjc4MDhkMWY5OWFiOTlkZjcyNmE1M2U3YTg4YQ==';
