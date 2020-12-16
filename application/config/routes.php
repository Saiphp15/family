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
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'WebsiteController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] 										= 'WebsiteController';
$route['events'] 									= 'WebsiteController/events';
$route['faqs'] 										= 'WebsiteController/faqs';
$route['gallery'] 									= 'WebsiteController/gallery';
$route['about'] 									= 'WebsiteController/about';
$route['contact'] 									= 'WebsiteController/contact';


$route["super-admin-login"] 						= 'UserController/super_admin_login';
$route["chk-super-admin-login"] 					= 'UserController/chk_super_admin_login';
$route["super-admin-logout"] 						= 'AdminController/super_admin_logout';


$route['register-user'] 							= 'WebsiteController/register_user';
$route['save-user'] 								= 'ApiController/save_user';
$route['save-user-password'] 						= 'ApiController/save_user_password';
$route['user-login'] 								= 'WebsiteController/user_login';
$route['chk-user-login'] 							= 'ApiController/chk_user_login';

$route['admin'] 									= 'AdminController';
$route['add-new-slider-image/(:any)'] 				= 'AdminController/add_new_slider_image/$1';
$route['add-new-slider-image/(:any)/(:any)'] 		= 'AdminController/add_new_slider_image/$1/$2';
$route['save-slider-image'] 						= 'AdminController/save_slider_image';
$route["view-all-slider-images"] 					= 'AdminController/view_all_slider_images';
$route["all-slider-images"] 						= 'ApiController/all_slider_images';
$route['add-new-announcement/(:any)'] 				= 'AdminController/add_new_announcement/$1';
$route['add-new-announcement/(:any)/(:any)'] 		= 'AdminController/add_new_announcement/$1/$2';
$route['save-announcement'] 						= 'AdminController/save_announcement';
$route['view-all-announcements']					= 'AdminController/view_all_announcements';
$route['all-announcements'] 						= 'ApiController/all_announcements';
$route['add-new-upcomig-event/(:any)'] 				= 'AdminController/add_new_upcomig_event/$1';
$route['add-new-upcomig-event/(:any)/(:any)'] 		= 'AdminController/add_new_upcomig_event/$1/$2';
$route['save-upcomig-event'] 						= 'AdminController/save_upcomig_event';
$route['view-all-upcomig-events'] 					= 'AdminController/view_all_upcomig_events';
$route['all-upcomig-events'] 						= 'ApiController/all_upcomig_events';

$route['add-new-imp-date/(:any)'] 					= 'AdminController/add_new_imp_date/$1';
$route['add-new-imp-date/(:any)/(:any)'] 			= 'AdminController/add_new_imp_date/$1/$2';
$route['save-important-date'] 						= 'AdminController/save_important_date';
$route['view-all-imp-dates']  						= 'AdminController/view_all_imp_dates';
$route['all-imp-dates'] 							= 'ApiController/all_imp_dates';

$route['pagination-events'] 						= 'ApiController/pagination_events';
$route['pagination-imp-dates'] 						= 'ApiController/pagination_imp_dates';

/* ====================================== */
$route['all-countries-list'] 	= 'CommonController/all_countries_list';
$route['secratelock'] 			= 'CommonController/secratelock';






