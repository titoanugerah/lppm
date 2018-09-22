<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Untuk mengarahkan suatu link yang diminta ke suatu sub kontroller
$route['default_controller'] = 'home';
$route['profil'] = 'home/profil';
$route['logout'] = 'home/logout';
$route['detailPlace/(:any)'] = 'home/detailPlace/$1';
$route['detailRegion/(:any)'] = 'home/detailPlace/$1';
$route['deleteRegion/(:any)'] = 'admin/deleteRegion/$1';
$route['deleteBrand/(:any)'] = 'admin/deleteBrand/$1';
$route['editRegion/(:any)'] = 'admin/editRegion/$1';
$route['editBrand/(:any)'] = 'admin/editBrand/$1';
$route['configureContent'] = 'admin/configureContent';
$route['adminDashboard'] = 'admin/adminDashboard';
$route['configureDisplay'] = 'admin/configureDisplay';
$route['translate_uri_dashes'] = FALSE;
$route['404_override'] = '';
