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

//Route::get('/', 'JobController@index');


Auth::routes();
//Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome1', 'HomeController@index')->name('welcome1');
Route::get('/user', 'UserController@index')->name('user');
//Route::get('jobs/{id}/{job}', 'JobController@view')->name('jobs.view'); 


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
//Route::resource('studdents', 'StuddentController');
Route::get('/studdents', 'StuddentController@index')->name('studdents.index');
Route::post('studdents/upload', 'StuddentController@store')->name('studdents.upload');
Route::get('studdents/myAcc', 'StuddentController@myAcc')->name('studdents.myAcc');
Route::get('studdents/destroy', 'StuddentController@destroy')->name('studdents.destroy');
Route::get('studdents/{studdent}/show', 'StuddentController@show')->name('studdents.show');
Route::get('studdents/{studdent}/edit', 'StuddentController@edit')->name('studdents.edit');
Route::put('studdents/{studdent}', 'StuddentController@update')->name('studdents.update');
Route::get('/studdents/create', 'StuddentController@create')->name('studdents.create');
Route::get('/studdents/mycerti', 'StuddentController@mycerti')->name('studdents.mycerti');
Route::get('/studdents/myJob', 'StuddentController@myJob')->name('studdents.myJob');
//Route::get('studdents/downloadCerti/{file}','StuddentController@downloadCerti')->name('studdents.downloadCerti');



//Employer

Route::get('/employers', 'EmployerController@index')->name('employers.index');
//Route::view('employers','employers.emp-register')->name('employers.registration');
//Route::view('employers','employers.emp-register')->name('employers.emp-register');
Route::post('employers/create', 'EmployerController@create')->name('employers.emp-register');
Route::post('employers/store', 'EmployerController@store')->name('employers.store');
Route::get('employers/myAcc', 'EmployerController@myAcc')->name('employers.myAcc');
Route::get('employers/destroy', 'EmployerController@destroy')->name('employers.destroy');
Route::get('employers/{employer}/show', 'EmployerController@show')->name('employers.show');
Route::get('employers/{employer}/edit', 'EmployerController@edit')->name('employers.edit');
Route::get('employers/{employer}', 'EmployerController@update')->name('employers.update');
//Route::resource('employers', 'EmployerController');
//Job
//Route::resource('jobs', 'JobController'); //nak show apply kene uncommnt ni /nk tngok application kene comment ni//nk edit kene uncomment ni// nk tngok myjobs also comment
//Route::get('/', 'JobController@index'); //nak ke page depan kena cooment ni

Route::get('/jobs', 'JobController@index')->name('jobs.index');
Route::get('jobs/alljobs', 'JobController@alljobs')->name('alljobs');
Route::get('jobs/studView', 'JobController@studView')->name('studView');
Route::get('jobs/create', 'JobController@create')->name('jobs.create');
Route::post('jobs/store', 'JobController@store')->name('jobs.store');
Route::get('jobs/destroy', 'JobController@destroy')->name('jobs.destroy');
Route::get('jobs/{job}/show', 'JobController@show')->name('jobs.show'); // nk tngok yg ad button apply kene comment ni//nk show detail kena comment ni
//Route::get('jobs/{id}/{job}', 'JobController@view')->name('jobs.view');  //nak hntr noti kene comment
Route::get('jobs/{job}/edit', 'JobController@edit')->name('jobs.edit');
Route::put('jobs/{job}', 'JobController@update')->name('jobs.update');
Route::get('jobs/myjobs', 'JobController@myjobs')->name('jobs.myjobs');
Route::post('jobs/apply/{id}', 'JobController@apply')->name('jobs.apply');
Route::get('jobs/applicant', 'JobController@applicant')->name('jobs.applicant');
Route::get('jobs/{job}', 'JobController@showCerti')->name('jobs.showCerti');
Route::post('/applications/{id}', 'JobController@apply')->name('apply');
Route::put('jobs/{id}/approve', 'JobController@approval')->name('jobs.approve');
//Route::resource('jobs', 'JobController');

//Email
Route::get('jobs/emailView/{id}', 'JobController@emailView')->name('jobs.emailView');
Route::post('/jobs/send/{id}', 'JobController@send')->name('jobs.send');



//Search job with vuejs
Route::get('jobs/search', 'JobController@searchJob');

//Admin
Route::resource('admins', 'AdminController');
Route::get('/admins', 'AdminController@index')->name('admins.index');
Route::view('admins','auth.admin-register')->name('admins.registration');
Route::post('admins/store', 'AdminController@store')->name('admins.store');
Route::get('admins/create', 'AdminController@create')->name('admins.create');

//Certificate
//Route::resource('certificates', 'CertificateController');
Route::get('/certificates', 'CertificateController@index')->name('certificates.index');
Route::get('certificates/create','CertificateController@create')->name('certificates.create');
Route::post('certificates/store','CertificateController@store')->name('certificates.store');
Route::delete('certificates/{certificate}', 'CertificateController@destroy')->name('certificates.destroy');
Route::get('certificates/show', 'CertificateController@show')->name('certificates.show');
Route::get('certificates/edit', 'CertificateController@edit')->name('certificates.edit');
Route::put('certificates/update', 'CertificateController@update')->name('certificates.update');
Route::get('certificates/mycertificate', 'CertificateController@mycertificate')->name('certificates.mycertificate');
Route::get('certificates/{certificate}/edit', 'CertificateController@edit')->name('certificates.edit');
Route::put('certificates/{certificate}', 'CertificateController@update')->name('certificates.update');
Route::get('certificates/download {file} ', 'CertificateController@download')->name('certificates.download');
Route::get('certificates/view/{id}', 'CertificateController@view')->name('studdents.viewCerti');
Route::get('certificates/showCerti/{id}', 'CertificateController@showCerti')->name('jobs.studCerti');


//others
//Route::get('/applications', 'ApplyJobController@index')->name('applications.index');
Route::resource('customsearch', 'CustomSearchController');
Route::get('/typeahead_autocomplete', [TypeaheadAutocompleteController::class, 'index']);
Route::get('/typeahead_autocomplete/action', [TypeaheadAutocompleteController::class, 'action'])->name('typeahead_autocomplete.action');
