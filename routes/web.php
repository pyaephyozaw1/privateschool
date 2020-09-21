<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/', 'PageController@indexfun')->name('mainpage');

Route::resource('student','StudentController');

Route::get('contacts', 'PageController@contactfun')->name('contactpage');

Route::get('logins', 'PageController@loginfun')->name('loginpage');
Route::get('abouts', 'PageController@aboutfun')->name('aboutpage');



Route::middleware('role:Student')->group(function(){

Route::get('studentpasswords', 'StudentpageController@studentpasswordfun')->name('studentpasswordpage');
Route::post('studentpasschange', 'StudentpageController@studentpasschange')->name('studentpasschange');
Route::get('studentroletimetable/{class_id}/{academic_id}/{student_id}', 'StudentpageController@studentroletimetablefun')->name('studentroletimetablepage');
});





Route::middleware('role:Admin')->group(function(){

Route::resource('teacher','TeacherController');
Route::resource('subject','SubjectController');
Route::resource('class','ClassesController');
Route::resource('timetable','TimetableController');
Route::resource('grade','GradeController');
Route::resource('academic','AcademicController');

Route::resource('payment','PaymentController');
Route::resource('result','ResultController');



Route::resource('examination','ExaminationController');
 Route::resource('backends', 'BackendController');


Route::resource('payment','PaymentController');

/*Route::get('backends', 'backenddController@backenddfun');
*/
Route::post('studentgrade','StudentController@studentgrade')->name('studentgrade');
Route::post('teachersubject','TimetableController@teachersubject')->name('teachersubject');
Route::post('timetableclass','TimetableController@timetableclass')->name('timetableclass');
Route::post('paymentgrade','PaymentController@paymentgrade')->name('paymentgrade');

Route::post('delete_teacher/{id}','TeacherController@delete_teacher')->name('delete_teacher');

});

Route::middleware('role:Teacher')->group(function(){

Route::get('teacherhomes', 'TeacherPageController@teacherhomefun')->name('teacherhomepage');
Route::get('teacherdetails', 'TeacherPageController@teacherdetailfun')->name('teacherdetailpage');
Route::post('teacherphotos/{id}', 'TeacherPageController@teacherphotofun')->name('teacherphotopage');
Route::post('teacherfirsticons/{id}', 'TeacherPageController@teacherfirsticonfun')->name('teacherfirsticonpage');
Route::post('teachersecondicons/{id}', 'TeacherPageController@teachersecondiconfun')->name('teachersecondiconpage');
Route::get('studenthomes', 'TeacherPageController@studenthomefun')->name('studenthomepage');
Route::get('studentdetails/{id}', 'TeacherPageController@studentdetailfun')->name('studentdetailpage');


});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


