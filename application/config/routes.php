<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* SKPD */
$route['login'] = 'login';
$route['login/signout'] = 'login/signout';

/* ADMIN */
