<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


// GET POST PUT DELETE
Route::get('/students', 'StudentController@getAllStudents')->name('all_students_route');

Route::post('/add_student', 'StudentController@add_student')->name('add_student_route');

Route::get('/getSubject','SubjectController@get_page')->name('get_subject');

Route::post('/add_subject', 'SubjectController@store_subject')->name('add_subject');

/*
Route::post('/add_subject, [
    'uses' => 'SubjectController@store_subject',
    'as' => 'add_subject'
]);
 * */

Route::group(['middleware' => ['web']], function (){
    Route::post('/signup',[
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
    ]);

    Route::post('/signin',[
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', [
        'uses' => 'UserController@getDashboard',
        'as' => 'dashboard'
    ]);
});

