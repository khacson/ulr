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
|	http://codeigniter.com/user_guide/general/routing.html
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
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = DCT;
//$route['404_override'] = 'trang-chu';
#region ban
$route['admin'] = "authorize";

$route['trang-chu'] = "home";
$route['trang-chu/(:any)'] = "home/$1";

$route['lien-he'] = "contactus";
$route['lien-he/(:any)'] = "contactus/$1";

$route['gioi-thieu'] = "aboutus";
$route['gioi-thieu/(:any)'] = "aboutus/$1";
$route['gioi-thieu/(:any)/(:any)'] = "aboutus/$1/$2";


$route['ban'] = "sell";
$route['ban/(:any)'] = "sell/$1";
$route['ban/(:any)/(:any)'] = "sell/$1/$2";

$route['cho-thue'] = "lease";
$route['cho-thue/(:any)'] = "lease/$1";
$route['cho-thue/(:any)/(:any)'] = "lease/$1/$2";

$route['sang-mat-bang'] = "sangmatbant";
$route['sang-mat-bang/(:any)'] = "sangmatbant/login/$1";
$route['sang-mat-bang/(:any)/(:any)'] = "sangmatbant/$1/$2";

$route['xay-dung'] = "xaydung";
$route['xay-dung/(:any)'] = "xaydung/login/$1";
$route['xay-dung/(:any)/(:any)'] = "xaydung/$1/$2";

$route['noi-ngoai-that'] = "noingoaithat";
$route['noi-ngoai-that/(:any)'] = "noingoaithat/login/$1";
$route['noi-ngoai-that/(:any)/(:any)'] = "noingoaithat/$1/$2";

$route['tin-tuc'] = "news";
$route['tin-tuc/(:any)'] = "news/login/$1";
$route['tin-tuc/(:any)/(:any)'] = "news/$1/$2";

$route['danh-ba'] = "menu";
$route['danh-ba/(:any)'] = "menus/login/$1";
$route['danh-ba/(:any)/(:any)'] = "menus/$1/$2";

$route['tu-van'] = "tuvan";
$route['tu-van/(:any)'] = "tuvan/login/$1";
$route['tu-van/(:any)/(:any)'] = "tuvan/$1/$2";

$route['du-an'] = "project";
$route['du-an/(:any)'] = "project/login/$1";
$route['du-an/(:any)/(:any)'] = "project/$1/$2";

$route['dang-nhap'] = "account/login_ui";
$route['dang-nhap/(:any)'] = "account/login/$1";

$route['dang-ky'] = "account/register_ui";
$route['dang-ky/(:any)'] = "account/register/$1";

$route['dat-lai-mat-khau'] = "account/reset_password_ui";
$route['dat-lai-mat-khau/(:any)'] = "account/reset_password_ui/$1";

$route['quen-mat-khau'] = "account/forgot_password_ui";
$route['quen-mat-khau/(:any)'] = "account/forgot_password_ui/$1";

$route['translate_uri_dashes'] = FALSE;
