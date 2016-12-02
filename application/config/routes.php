<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translationk.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['gallery'] = 'welcome/gallery';
$route['schedules'] = 'welcome/schedules';
$route['store'] = 'welcome/store';
$route['contact'] = 'welcome/contact';
$route['about-us'] = 'welcome/about';
$route['programs'] = 'welcome/programs';
$route['classes'] = 'welcome/classes';
$route['login'] = 'welcome/login';
$route['registration'] = 'welcome/registration';

$route['admin'] = 'Welcome/admin';
$route['admin-basic-calendar'] = 'Welcome/adminCalendar';
$route['admin-basic-gallery/(:any)'] = "Welcome/adminGallery/$1";
$route['admin-basic-gallery/modifysettings/publish/(:any)/(:num)'] = "Welcome/modifysettings/publish/$1/$2";
$route['admin-basic-gallery/modifysettings/drop/(:num)'] = "Welcome/modifysettings/drop/$1";
$route['admin-basic-gallery'] = 'Welcome/adminGallery';
$route['admin-basic-messages'] = 'Welcome/adminMessages';
$route['admin-basic-profile'] = 'Welcome/adminProfile';
$route['admin-basic-search-results'] = 'Welcome/adminSearch';
$route['admin-charts-d3'] = 'Welcome/adminChart1';
$route['admin-charts-flot'] = 'Welcome/adminChart2';
$route['admin-charts-highcharts'] = 'Welcome/adminChart3';
$route['admin-sales-stats-clients'] = 'Welcome/adminClients';
$route['admin-sales-stats-general-settings'] = 'Welcome/adminGeneralSettings';
$route['admin-sales-stats-products'] = 'Welcome/adminProducts';
$route['admin-sales-stats-purchases'] = 'Welcome/adminPurchases';
$route['admin-dashboard2'] = 'Welcome/adminDashboard';
