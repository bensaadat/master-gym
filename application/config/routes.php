<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

# migration route
# Note: make sure migrations are enabled in config/migration.php before accessing this route
$route['migrate'] = '/Migrate/index';




// Auth Routes
$route['users/createAdmin'] = '/Auth/createUserERP';
$route['users/changePasswordByAdmin'] = '/Auth/changePasswordByAdmin';
$route['users/activate/(:any)'] = '/Auth/activate/$1';
$route['users/deactivate/(:any)'] = '/Auth/deactivate/$1';





//lang
$route['langswitch/switchLanguage'] = '/LangSwitchController/switchLanguage';


// User Logs
$route['logs'] = 'UserLogController/index';
