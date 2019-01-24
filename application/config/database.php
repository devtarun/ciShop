<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',				//DEVELOPMENT
	'username' => 'root',					//DEVELOPMENT
	'password' => '',						//DEVELOPMENT
	'database' => 'cishop',					//DEVELOPMENT
	// 'hostname' => 'localhost',					//PRODUCTION
	// 'username' => 'sakshamueft_cishop',			//PRODUCTION
	// 'password' => 'eRGxBvjBNm9I',				//PRODUCTION
	// 'database' => 'sakshamueft_cishop',			//PRODUCTION
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
