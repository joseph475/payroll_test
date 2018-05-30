<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/employee/details', 'employee\EmpMasterFileController@details');
Route::get('/employee/job-order', 'employee\EmpMasterFileController@joborder');

Route::get('/system/setup-earnings', 'system\SystemController@setup_earnings');
Route::get('/system/setup-deductions', 'system\SystemController@setup_deductions');

Route::resource('/system', 'system\SystemController');
// Company folder
Route::resource('/company', 'company\CompanyController');
Route::resource('/branch', 'company\BranchController');
// employee folder
Route::resource('/employee', 'employee\EmpMasterFileController');
Route::resource('/system', 'system\SystemController');


