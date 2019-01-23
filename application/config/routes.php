<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/edit/(:any)'] = 'admin/editproduct/$1';
$route['admin/category/(:any)'] = 'admin/categories/$1';
$route['category/(:any)'] = 'products/getByCat';
$route['products/:num'] = 'products/details';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
