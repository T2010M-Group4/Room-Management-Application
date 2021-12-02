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
//Fontend
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

Route::get('/rooms','App\Http\Controllers\HomeController@index2');

//Backend
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');

//Category Room
Route::get('/add-category', 'App\Http\Controllers\CategoryRoom@add_category');

Route::get('/edit-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@edit_category_room');
Route::get('/delete-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@delete_category_room');

Route::get('/all-category-room', 'App\Http\Controllers\CategoryRoom@all_category_room');

Route::get('/unactive-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@unactive_category_room');
Route::get('/active-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@active_category_room');

Route::post('/save-category-room', 'App\Http\Controllers\CategoryRoom@save_category_room');
Route::post('/update-category-room/{category_room_id}', 'App\Http\Controllers\CategoryRoom@update_category_room');

//District 
Route::get('/add-district', 'App\Http\Controllers\District@add_district');

Route::get('/edit-district/{district_id}', 'App\Http\Controllers\District@edit_district');
Route::get('/delete-district/{district_id}', 'App\Http\Controllers\District@delete_district');

Route::get('/all-district', 'App\Http\Controllers\District@all_district');

Route::get('/unactive-district/{district_id}', 'App\Http\ControllersDistrictm@unactive_district');
Route::get('/active-district/{district_id}', 'App\Http\Controllers\District@active_district');

Route::post('/save-district', 'App\Http\Controllers\District@save_district');
Route::post('/update-district/{district_id}', 'App\Http\Controllers\District@update_district');

//Room
Route::get('/add-room', 'App\Http\Controllers\RoomController@add_room');

Route::get('/edit-room/{room_id}', 'App\Http\Controllers\RoomController@edit_room');
Route::get('/delete-room/{room_id}', 'App\Http\Controllers\RoomController@delete_room');

Route::get('/all-room', 'App\Http\Controllers\RoomController@all_room');

Route::get('/unactive-room/{room_id}', 'App\Http\Controllers\RoomController@unactive_room');
Route::get('/active-room/{room_id}', 'App\Http\Controllers\RoomController@active_room');

Route::post('/save-room', 'App\Http\Controllers\RoomController@save_room');
Route::post('/update-room/{room_id}', 'App\Http\Controllers\RoomController@update_room');