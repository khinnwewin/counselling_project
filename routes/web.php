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
    return view('frontend.index');
});
Route::group(['namespace' => 'Frontend'], function () {

Route::get('question_category','AllController@question');
Route::get('{id}/counseller_list','AllController@counseller_list');
Route::get('{id}/counseller_detail','AllController@counseller_detail');
Route::get('{id}/appointment','AllController@appointment');
Route::post('appointment','AllController@store');

Route::get('appointment/index','AppointmentController@index')->name('appointment.index');
Route::get('appointment/{id}','AppointmentController@show')->name('appointment.show');
 Route::post('appointment/{id}','AppointmentController@update');

});



//Admin
Route::group(['prefix' => 'admin'], function () {
   Auth::routes(['verify' => true]);
});
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => 'auth', 'namespace' => 'Backend'], function () {   
    Route::resource('category', 'CategoryController');
    Route::resource('user','UserController');
   


});