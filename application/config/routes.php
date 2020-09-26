<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/index';
$route['admin/articles'] = 'admin/articles';
$route['admin/gallery'] = 'admin/gallery';
$route['login'] = 'admin/login';

$route['articles/(:any)'] = 'pages/articles/$1';
$route['articles'] = 'pages/articles';
$route['events'] = 'pages/events';
$route['history'] = 'pages/history';

$route['default_controller'] = 'pages';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
