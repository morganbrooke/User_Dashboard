<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'users';

// registration routing info
$route['register/index'] = 'logins/index';
$route['register/register'] = 'logins/create';

// home routing
$route['home'] = 'users/home';

// logging in routing
$route['signin/login'] = 'logins/login_verify';
// $route['showwhatever'] = 'users/show';
$route['register'] = 'logins/create';
$route['register_failure'] = 'users/loginfail';

// signing in routing info
$route['signin'] = 'users/load_signin';
$route['signin_verify'] = 'logins/login_verify';

// dashboard users loading information
$route['dashboard'] = 'logins/all_users';

// show page user info on load
$route['showuser/(:any)'] = 'logins/show/$1';

// message routing info
$route['postmessage/(:any)'] = 'logins/post_message/$1';
$route['message_fail'] = 'users/messagefail';
$route['show/(:any)'] = 'logins/show_messages/$1';

//comment routing info
$route['post_comment/(:any)'] = 'logins/comment/$1';

// editing
$route['edit/profile'] = 'users/user_edit';
$route['user/(:num)/edit'] = 'logins/edit/$1';

// editing users information
$route['user/update'] = 'logins/update_user';
$route['edituser'] = 'logins/edituserinfo';


// editing users passwords
$route['user/(:num)/editpass'] = 'logins/edit_password/$1';
$route['password/update'] = 'logins/update_password';
$route['editpassword'] = 'logins/editpass';

// deleting a user
$route['deleteuser'] = 'logins/delete';

// logging off user information
$route['logoff'] = 'logins/logoff';

// $route['manage'] = 'users/manage';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['check'] = 'main/checkSession';
?>