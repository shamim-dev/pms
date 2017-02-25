<?php

Route::get('/', 'Adminauth\AuthController@showLoginForm');
Route::post('login','Adminauth\AuthController@login');

Route::group(['middleware'=>['admin']],function(){
	Route::get('/dashboard','Admin\AdminController@dashboard');
	Route::get('/logout','Adminauth\AuthController@logout');
});


/*
Route::get('/dashboard',function()
   {
	    return view('home');
   });*/

Route::get('/dashboard','HomeController@index');

/*************************************************************************
 ******                Users Management                           ********
 *************************************************************************/

// User List-------------------------------------------------------------
Route::get('/dashboard/user/index','UserController@index');

// User Create----------------------------------------------------------- 
Route::get('/dashboard/user/create','UserController@create');

// Save User------------------------------------------------------------- 
Route::post('/dashboard/user/store','UserController@store');

// User Details----------------------------------------------------------
Route::get('/dashboard/user/show','UserController@show');

// User Edit-------------------------------------------------------------- 
Route::get('/dashboard/user/edit/{id}','UserController@edit');

// User Update------------------------------------------------------------
Route::post('/dashboard/user/update/{id}','UserController@update');

// User Destroy-----------------------------------------------------------
Route::get('/dashboard/user/destroy/{id}','UserController@destroy');



/*************************************************************************
 ******                Manage Company / Clients                   ********
 *************************************************************************/

// Client List-------------------------------------------------------------
Route::get('/dashboard/company/index','ClientController@index');

// Client Create----------------------------------------------------------- 
Route::get('/dashboard/company/create','ClientController@create');

// Save Client------------------------------------------------------------- 
Route::post('/dashboard/company/store','ClientController@store');

// Client Details----------------------------------------------------------
Route::get('/dashboard/company/show','ClientController@show');

// Client Edit-------------------------------------------------------------- 
Route::get('/dashboard/company/edit/{id}','ClientController@edit');

// Client Update------------------------------------------------------------
Route::post('/dashboard/company/update/{id}','ClientController@update');

// Client Destroy-----------------------------------------------------------
Route::get('/dashboard/company/destroy/{id}','ClientController@destroy');



/*************************************************************************
 ******                Project Management                          ********
 *************************************************************************/


Route::get('/dashboard/project/index','ProjectsController@index');
Route::get('/dashboard/project/create','ProjectsController@create');
Route::post('/dashboard/project/store','ProjectsController@store');
Route::get('/dashboard/project/edit/{id}','ProjectsController@edit');
Route::post('/dashboard/project/update/{id}','ProjectsController@update');
Route::get('/dashboard/project/destroy/{id}','ProjectsController@destroy');

/*************************************************************************
 ******                Module Management                          ********
 *************************************************************************/

// Module List--------------------------------------------------------------------------
Route::get('/dashboard/module/index','ModuleController@index');

// Module Create--------------------------------------------------------------------------
Route::get('/dashboard/module/create','ModuleController@create');
// Save Module--------------------------------------------------------------------------
Route::post('/dashboard/module/store','ModuleController@store');

// Module Details--------------------------------------------------------------------------
Route::get('/dashboard/module/show','ModuleController@show');

// Module Edit--------------------------------------------------------------------------
Route::get('/dashboard/module/edit/{id}','ModuleController@edit');
// Module Update--------------------------------------------------------------------------
Route::post('/dashboard/module/update/{id}','ModuleController@update');

// Module Destroy--------------------------------------------------------------------------
Route::get('/dashboard/module/destroy/{id}','ModuleController@destroy');



/*************************************************************************
 ******                Task Management                            ********
 *************************************************************************/
// task List------------------------------------------------------------------------
Route::get('/dashboard/task/index','TaskController@index');

// task Create--------------------------------------------------------------------------
Route::get('/dashboard/task/create','TaskController@create');

// task Client--------------------------------------------------------------------------
Route::post('/dashboard/task/store','TaskController@store');

// task Details--------------------------------------------------------------------------
Route::get('/dashboard/task/show','TaskController@show');

// task Edit--------------------------------------------------------------------------
Route::get('/dashboard/task/edit/{id}','TaskController@edit');

// task Update--------------------------------------------------------------------------
Route::post('/dashboard/task/update/{id}','TaskController@update');

// task Destroy--------------------------------------------------------------------------
Route::get('/dashboard/task/destroy/{id}','TaskController@destroy');



/*************************************************************************
 ******                Developer Management                       ********
 *************************************************************************/


Route::get('dashboard/developer/index','DevelopersController@index');
Route::get('dashboard/developer/create','DevelopersController@create');
Route::post('dashboard/developer/store','DevelopersController@store');
Route::get('/dashboard/developer/edit/{id}','DevelopersController@edit');
Route::post('/dashboard/developer/update/{id}','DevelopersController@update');
Route::get('/dashboard/developer/destroy/{id}','DevelopersController@destroy');


/*************************************************************************
 ******                Assign Task Management                     ********
 *************************************************************************/

// dev_task List--------------------------------------------------------------------------
Route::get('/dashboard/asigntask/index','Asign_taskController@index');

// dev_task Create--------------------------------------------------------------------------
Route::get('/dashboard/asigntask/create','Asign_taskController@create');
// Save dev_task--------------------------------------------------------------------------
Route::post('/dashboard/asigntask/store','Asign_taskController@store');

// dev_task Details--------------------------------------------------------------------------
Route::get('/dashboard/asigntask/show','Asign_taskController@show');

// dev_task Edit--------------------------------------------------------------------------
Route::get('/dashboard/asigntask/edit/{id}','Asign_taskController@edit');
// dev_task Update--------------------------------------------------------------------------
Route::post('/dashboard/asigntask/update/{id}','Asign_taskController@update');

// dev_task Destroy--------------------------------------------------------------------------
Route::get('/dashboard/asigntask/destroy/{id}','Asign_taskController@destroy');



/*************************************************************************
 ******               Submit task Management                     ********
 *************************************************************************/// 
// dev_task List--------------------------------------------------------------------------
Route::get('/dashboard/submittask/index','Submit_taskController@index');

// dev_task Create--------------------------------------------------------------------------
Route::get('/dashboard/submittask/create','Submit_taskController@create');
// Save dev_task--------------------------------------------------------------------------
Route::post('/dashboard/submittask/store','Submit_taskController@store');

// dev_task Details--------------------------------------------------------------------------
Route::get('/dashboard/submittask/show','Submit_taskController@show');

// dev_task Edit--------------------------------------------------------------------------
Route::get('/dashboard/submittask/edit/{id}','Submit_taskController@edit');
// dev_task Update--------------------------------------------------------------------------
Route::post('/dashboard/submittask/update/{id}','Submit_taskController@update');

// dev_task Destroy--------------------------------------------------------------------------
Route::get('/dashboard/submittask/destroy/{id}','Submit_taskController@destroy');




