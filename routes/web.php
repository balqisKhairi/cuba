<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TypeaheadAutocompleteController;

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
    return view('welcome1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

//Test Data
Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/create', 'StudentController@create')->name('students.create');
Route::post('/students', 'StudentController@store')->name('students.store');
Route::get('students/{student}', 'StudentController@show')->name('students.show');
Route::get('students/{student}/edit', 'StudentController@edit')->name('students.edit');
Route::put('students/{student}', 'StudentController@update')->name('students.update');
Route::delete('students/{student}', 'StudentController@destroy')->name('students.destroy');
Route::resource('subjects', 'SubjectController');

//Student
Route::resource('studdents', 'StuddentController');

//Employer
Route::resource('employers', 'EmployerController');
Route::get('/employers', 'EmployerController@index')->name('employers.index');
Route::view('employers','auth.emp-register')->name('employers.registration');
Route::post('employers/store', 'EmployerController@store')->name('employers.store');

//Job
Route::resource('jobs', 'JobController');
Route::get('jobs/create', 'JobController@create')->name('jobs.create');
Route::post('jobs/store', 'JobController@store')->name('jobs.store');
Route::resource('applications', 'ApplyJobController');
Route::resource('admins', 'AdminController');
//Route::get('/applications', 'ApplyJobController@index')->name('applications.index');
Route::resource('customsearch', 'CustomSearchController');
Route::get('/typeahead_autocomplete', [TypeaheadAutocompleteController::class, 'index']);
Route::get('/typeahead_autocomplete/action', [TypeaheadAutocompleteController::class, 'action'])->name('typeahead_autocomplete.action');
