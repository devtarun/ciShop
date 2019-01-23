<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['category/(:any)'] = 'products/getByCat';
$route['products/:num'] = 'products/details';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
