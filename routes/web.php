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
    return view('welcome');
});
Route::get('/', 'HomeController@render');

Route::get('/forget_password', function () {
    return view('forget_password');
});

// routes xử lý login
Route::get('/login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

//xử lý logout
Route::get('/logout','LoginController@logout');

// Xử lý register
Route::get('/register', 'UserController@create');
Route::post('/register', 'UserController@store');



	
Route::get('/admin', function(){
	return view('admin/dashboard');
})
	->middleware('is_admin');
// Xử lý các thao tác của admin với người dùng
Route::get('/admin/nguoidung', 'UserController@index_admin')
	->middleware('is_admin');
Route::get('/admin/nguoidung/{id}/show','UserController@show_admin')
	->middleware('is_admin');
Route::get('/admin/nguoidung/create','UserController@create_admin')
	->middleware('is_admin');
Route::post('/admin/nguoidung/create','UserController@store_admin')
	->middleware('is_admin');
Route::get('/admin/nguoidung/{id}/edit','UserController@edit_admin')
	->middleware('is_admin');
Route::post('/admin/nguoidung/{id}/edit','UserController@update')
	->middleware('is_admin');
Route::post('/admin/nguoidung/{id}/delete','UserController@destroy')
	->middleware('is_admin');

// Xử lý mặt hàng ở front page
Route::get('/mathang/{id}', 'MatHangController@show');
//Xử lý loại mặt hàng ở front page
Route::get('/loaimathang/{id}', 'LoaiMatHangController@show');
//Xử lý loại mặt hàng ở admin page
Route::get('/admin/mathang','MatHangController@index_admin')
	->middleware('is_admin');
Route::get('/admin/mathang/{id}/show','MatHangController@show')
->middleware('is_admin');
Route::get('/admin/mathang/create','MatHangController@create_admin')
	->middleware('is_admin');
Route::post('/admin/mathang/create','MatHangController@store_admin')
	->middleware('is_admin');
Route::get('/admin/mathang/{id}/edit','MatHangController@edit_admin')
	->middleware('is_admin');
Route::post('/admin/mathang/{id}/edit','MatHangController@update_admin')
	->middleware('is_admin');
Route::post('/admin/mathang/{id}/delete','MatHangController@destroy')
	->middleware('is_admin');
// Xử lý các thao tác của admin với loại mặt hàng
Route::get('/admin/loaimathang','LoaiMatHangController@index_admin')
	->middleware('is_admin');
Route::get('/admin/loaimathang/{id}/show','LoaiMatHangController@show_admin')
->middleware('is_admin');
Route::get('/admin/loaimathang/create','LoaiMatHangController@create_admin')
	->middleware('is_admin');
Route::post('/admin/loaimathang/create','LoaiMatHangController@store_admin')
	->middleware('is_admin');
Route::get('/admin/loaimathang/{id}/edit','LoaiMatHangController@edit_admin')
	->middleware('is_admin');
Route::post('/admin/loaimathang/{id}/edit','LoaiMatHangController@update_admin')
	->middleware('is_admin');
Route::post('/admin/loaimathang/{id}/delete','LoaiMatHangController@destroy')
	->middleware('is_admin');


//Xử lý giỏ hàng ở front page
Route::get('/giohang',function () {
    return view('cart');
});;