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


Route::get('/', 'PagesController@index');
Route::get('/addslot', 'PagesController@addslot');
Route::get('/airport', 'PagesController@airport');
Route::get('/atcairport', 'PagesController@atcairport');
Route::get('/flight', 'PagesController@flight');
Route::get('/addflight', 'PagesController@addflight');
Route::get('/iata', 'PagesController@iata');

Route::resource('messages','PostController');

Route::resource('flight1','ViewSlotsController');

Route::put('/slotupdate', 'ViewSlotsController@update');

Route::post('/slots','ViewSlotsController@index');

Route::post('/schedule','ViewSlotsController@viewflight');

// Route::post('/request', 'SendEmailController@index');
// Route::post('/request/send', 'SendEmailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home1', 'HomeController@home1')->name('home1');

Route::get('/home2', 'HomeController@home2')->name('home2');

Route::get('/home3', 'HomeController@home3')->name('home3');

// Route::group(['middleware' => ['auth','Admin']],function() {

// });
// Route::get('/admin', 'AdminDashboardController@index')->name('admin')->middleware('admin');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

Route::get('/admin/{id}', 'AdminController@edit')->name('admin')->middleware('admin');

Route::put('/update/{id}', 'AdminController@update')->name('admin')->middleware('admin');

Route::delete('/delete/{id}', 'AdminController@delete')->name('admin')->middleware('admin');

Route::get('/atc', 'AtcController@index')->name('atc')->middleware('atc');

Route::get('/profile/{user}', 'ProfileController@show')->name('profile');

Route::get('/edit/profile', 'ProfileController@edit')->name('edit');

Route::post('/update/profile', 'ProfileController@update')->name('update');

Route::get('/edit/password/profile', 'ProfileController@passwordEdit')->name('editpassword');

Route::post('/update/password/profile', 'ProfileController@passwordUpdate')->name('updatepassword');
