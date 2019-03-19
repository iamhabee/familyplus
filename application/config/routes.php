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
$route['default_controller'] = 'page';
$route['404_override'] = '';
$route['login'] = 'page/login';
$route['signup'] = 'page/signup';
$route['about'] = 'page/about';
$route['connect'] = 'page/connect';
$route['consultation'] = 'page/consultation';
$route['maritalIssues'] = 'page/maritalIssues';
$route['MarriageArticle'] = 'page/marriageArticle';


$route['dashboard'] = 'dashboard/index';
$route['admin'] = 'admin/index';
$route['adminlogin'] = 'admin/login';
$route['admin_counsellor'] = 'admin/counsellor';
$route['admin_single'] = 'admin/single';
$route['admin_married'] = 'admin/married';
$route['admin_maritalissues'] = 'admin/maritalissues';
$route['admin_edit'] = 'admin/edit';
$route['admin_delete'] = 'admin/delete';

$route['user/single'] = 'users/single';
$route['user/married'] = 'users/married';
$route['user/issues'] = 'users/issues';
$route['user/comunity'] = 'users/comunity';
$route['user/issue'] = 'users/maritalissues_by_counsellors';
$route['user/counsellor'] = 'users/counsellor';
$route['user/scheduler'] = 'users/scheduler';
$route['user/update'] = 'users/update_profile';
$route['user/photo'] = 'users/upload_picture';
$route['user/login'] = 'users/login_user';
$route['logout'] = 'users/logout';
$route['translate_uri_dashes'] = FALSE;

// chat 
$route['profile'] = 'ProfileController/index';
$route['upload-profile'] = 'ProfileController/change_photo';
$route['profile-password-update'] = 'ProfileController/change_user_profile_password_update';
$route['profile-details-update'] = 'ProfileController/user_update_profile_data';
$route['i-forgot-my-password'] = 'ProfileController/forgot_password';
$route['forgot-password'] = 'ProfileController/forgot_password_email';
$route['all-messages'] = 'MessagesController/index';
$route['view-all-notifications'] = 'NotificationsController/index';

////////////////
$route['chat'] = 'ChatController/index';
$route['send-message'] = 'ChatController/send_text_message';
$route['chat-attachment/upload'] = 'ChatController/send_text_message';
$route['get-chat-history-vendor'] = 'ChatController/get_chat_history_by_vendor';
$route['chat-clear'] = 'ChatController/chat_clear_client_cs';
