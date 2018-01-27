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

Route::get('/', function () {
  return view('welcome');
});

Route::resource('areas', 'AreasController');
Route::resource('course_disciplines', 'CourseDisciplinesController');
Route::resource('courses', 'CoursesController');
Route::resource('discipline_classes', 'DisciplineClassesController');
Route::resource('discipline_class_offers', 'DisciplineClassOffersController');
Route::resource('disciplines', 'DisciplinesController');
Route::resource('professors', 'ProfessorsController');
Route::resource('schedules', 'SchedulesController');
Route::resource('students', 'StudentsController');

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
  Route::resource('professors', 'ProfessorsController');
});
