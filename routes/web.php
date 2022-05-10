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

use App\barbers;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_dashboard', 'Admin\DashboardController@index')->middleware('role:admin');
Route::get('/barber_dashboard', 'barber\DashboardController@index')->middleware('role:barber');
Route::get('/customer_dashboard', 'customer\DashboardController@index')->middleware('role:customer');

Route::get('/', function () {

    return view('welcome');
});


Auth::routes();


Route::get('Book_appointment','HomeController@show')->name('Book_appointment');
Route::post('store','HomeController@store')->name('store');

Route::post('Find','HomeController@find')->name('Find');
Route::get('post','HomeController@post')->name('post');
Route::get('view_post','HomeController@view_post')->name('view_post');
//Route::post('store','customers@store')->name('store');

Route::get('/nearest_Barbers', function () {
    return view('nearest_Barbers', ['name' => 'nearest_Barbers']);
});
Route::post('/barber_Post', 'barber\DashboardController@show');
route::post('/create','barber@create')->name('create');
route::get('/edit_post_show/{id}','barber@edit_post_show')->name('edit_post_show');
route::POST('/edit_post_store/{id}','barber@edit_post_store')->name('edit_post_store');


Route::get('/view/{id}','HomeController@view')->name('view');

Route::get('/chat/{id}','HomeController@chat')->name('chat');
Route::get('/barber_msg_List','HomeController@barberchat')->name('barber_msg_List');
Route::get('/barberreply','HomeController@barberreply')->name('barberreply');


route::post('/msg/{id}','barber@msg')->name('msg');
route::post('/msgToBarber/{id}','HomeController@msg')->name('msgToBarber');
Route::get('/customer_msg','HomeController@customerchat')->name('customer_msg');
Route::get('/reply','HomeController@reply')->name('reply');
Route::POST('/barber_reply/{id}','HomeController@barber_replied')->name('barber.replied');
Route::get('/sendmailto_barber','HomeController@sendmail')->name('sendmailto_barber');
Route::get('/services','HomeController@viewServices')->name('services');


