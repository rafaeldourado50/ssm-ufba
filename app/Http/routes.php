<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

  Route::resource('areas', 'AreasController');
  Route::resource('courses', 'CoursesController');
  Route::resource('disciplines', 'DisciplinesController');
  Route::resource('permissions', 'PermissionsController');
  Route::resource('professors', 'ProfessorsController');
  Route::resource('roles', 'RolesController');
  Route::resource('users', 'UsersController');
  Route::resource('records', 'RecordsController');
  Route::resource('suggestion', 'SuggestionController');

  Route::get('/', function () {
    return view('welcome');
  });

  Route::auth();

  Route::get('/home', 'HomeController@index');

  Route::get('/profile', 'ProfileController@index');
  
  Route::get('users/{users}/roles', ['as' => 'user_roles.index', 'uses' => 'UserRolesController@index']);
  Route::post('users/{users}/roles', ['as' => 'user_roles.store', 'uses' => 'UserRolesController@store']);
  Route::delete('users/{users}/roles/{roles}', ['as' => 'user_roles.destroy', 'uses' => 'UserRolesController@destroy']);

  Route::get('users/{users}/permissions', ['as' => 'user_permissions.index', 'uses' => 'UserPermissionsController@index']);
  Route::post('users/{users}/permissions', ['as' => 'user_permissions.store', 'uses' => 'UserPermissionsController@store']);
  Route::delete('users/{users}/permissions/{permissions}', ['as' => 'user_permissions.destroy', 'uses' => 'UserPermissionsController@destroy']);

  Route::get('roles/{users}/permissions', ['as' => 'role_permissions.index', 'uses' => 'RolePermissionsController@index']);
  Route::post('roles/{users}/permissions', ['as' => 'role_permissions.store', 'uses' => 'RolePermissionsController@store']);
  Route::delete('roles/{users}/permissions/{permissions}', ['as' => 'role_permissions.destroy', 'uses' => 'RolePermissionsController@destroy']);

  Route::get('courses/{courses}/disciplines', ['as' => 'course_disciplines.index', 'uses' => 'CourseDisciplinesController@index']);
  
  Route::get('students/create', ['as' => 'students.create', 'uses' => 'StudentsController@create']);
  Route::post('students', ['as' => 'students.store', 'uses' => 'StudentsController@store']);
  
  Route::get('suggestion/make', 'SuggestionController@makeSuggestion');

});
