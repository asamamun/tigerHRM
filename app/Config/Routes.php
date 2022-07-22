<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('AutocompleteController');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/register', 'RegisterController::index');
$routes->post('/register', 'RegisterController::store');
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::check');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/tiger/settings', 'SettingController::index');
$routes->post('/tiger/settings', 'SettingController::save');
//department
$routes->get('/tiger/department', 'DepartmentController::index');
$routes->get('/tiger/department-add', 'DepartmentController::create');
$routes->post('/tiger/department-store', 'DepartmentController::store');
$routes->get('/tiger/department/edit/(:num)', 'DepartmentController::edit/$1');
$routes->post('/tiger/department/update/(:num)', 'DepartmentController::update/$1');
$routes->get('/tiger/department/delete/(:num)', 'DepartmentController::delete/$1');


//section
$routes->get('/tiger/section', 'SectionController::index');
$routes->get('/tiger/section/add', 'SectionController::create');
$routes->post('/tiger/section/add', 'SectionController::store');
$routes->get('/tiger/section/edit/(:num)', 'SectionController::edit/$1');
$routes->post('/tiger/section/update/(:num)', 'SectionController::update/$1');
$routes->get('/tiger/section/delete/(:num)', 'SectionController::delete/$1');

//Grade
$routes->get('/tiger/grade', 'GradeController::index');
$routes->get('/tiger/grade/add', 'GradeController::create');
$routes->post('/tiger/grade/add', 'GradeController::store');
$routes->get('/tiger/grade/edit/(:num)', 'GradeController::edit/$1');
$routes->post('/grade/update/(:num)', 'GradeController::update/$1');
$routes->get('/tiger/grade/delete/(:num)', 'GradeController::delete/$1');

//employee
$routes->get('/tiger/employee', 'EmployeeController::index');
$routes->get('/tiger/employee/add', 'EmployeeController::create');
$routes->post('/tiger/employee/add', 'EmployeeController::store');
$routes->get('/tiger/employee/details/(:num)', 'EmployeeController::details/$1');
$routes->get('/tiger/employee/card/(:num)', 'EmployeeController::card/$1');

//education
$routes->post('/tiger/education/add', 'EmployeeController::addeducation');
$routes->get('/tiger/disiplinary', 'DisiplinaryController::index');
$routes->post('/tiger/disiplinary', 'DisiplinaryController::delete');



//designation
$routes->get('/tiger/designation', 'DesignationController::index');
$routes->get('/tiger/designation/add', 'DesignationController::create');
$routes->post('/tiger/designation/create', 'DesignationController::store');
$routes->get('/tiger/designation/edit/(:num)', 'DesignationController::edit/$1');
$routes->post('/tiger/designation/edit/(:num)', 'DesignationController::update/$1');
$routes->get('/designation/delete/(:num)', 'DesignationController::delete/$1');

// dashboard's links redirect
$routes->get('/tiger/project', 'ProjectController::index');
$routes->get('/tiger/holiday', 'HolidayController::index');
$routes->get('/tiger/notice', 'NociceController::index');
$routes->get('/tiger/todo', 'TodoController::index');
$routes->get('/ctiger/ountall', 'CountAll::index');
$routes->get('/tiger/employee/cardpdf', 'DompdfController::index');
$routes->get('/tiger/employee/cardpdf', 'DompdfController::htmlToPDF');




// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/tiger/dashboard', 'Home::index');
$routes->get('/tiger/users', 'UsersController::index');
//customers
$routes->get('/tiger/customers', 'CustomersController::index');
$routes->get('/tiger/customers/create', 'CustomersController::create');
$routes->post('/tiger/customers/create', 'CustomersController::store');
$routes->get('/tiger/customers/edit/(:num)', 'CustomersController::edit/$1');
$routes->post('/tiger/customers/edit/(:num)', 'CustomersController::update/$1');
$routes->post('/tiger/customers/delete/(:num)', 'CustomersController::delete/$1');



//users
$routes->get('/tiger/users', 'UsersController::index');
$routes->get('/tiger/users/create', 'UsersController::create');
$routes->post('/tiger/users/create', 'UsersController::store');
$routes->get('/tiger/users/edit/(:num)', 'UsersController::edit/$1');
$routes->post('/tiger/users/edit/(:num)', 'UsersController::update/$1');
$routes->post('/tiger/users/delete/(:num)', 'UsersController::delete/$1');

//expenses
$routes->get('/tiger/expenses', 'ExpensesController::index');
$routes->get('/expenses/create', 'ExpensesController::create');
$routes->post('/expenses/create', 'ExpensesController::store');
$routes->get('/expenses/edit/(:num)', 'ExpensesController::edit/$1');
$routes->post('/expenses/edit/(:num)', 'ExpensesController::update/$1');
$routes->post('/expenses/delete/(:num)', 'ExpensesController::delete/$1');

//Leave

$routes->get('/tiger/leave', 'LeaveController::index');
$routes->get('/tiger/addleave', 'LeaveController::addleave');


//attendance
$routes->get('attendance', 'AttendanceController::index');
$routes->post('attendance', 'AttendanceController::store');
$routes->get('/tiger/attendance/report', 'AttendanceController::report');
$routes->get('/tiger/attendance/addattendance', 'AttendanceController::addattendance');
$routes->get('/tiger/attendance/attendancelist', 'AttendanceController::attendancelist');

// search
$routes->get('/tiger/search', 'AutocompleteSearch::index');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
