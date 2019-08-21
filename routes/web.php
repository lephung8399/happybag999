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

// Route::group(['prefix'=>'happybag','namespace'=> 'Admin'],function(){
// 	Route::get("admin", "HomeController@index")->name("admin.index");
// 	Route::get("admin/loai", "loaiController@view_all")->name("admin.loai");
// });


Route::get('/', 'Controller@getLogin')->name('view_login');
Route::post('/', 'Controller@postLogin')->name('postLogin');
// Route::get('logout', 'Controller@logout')->name('logout');
Route::get('logout','HomeController@getLogout');

Route::group(['prefix'=>'admin','namespace'=> 'Admin'],function(){
	Route::get("/", "HomeController@index")->name("admin.index");

	Route::get("loai", "loaiController@view_all")->name("admin.loai");
	Route::post("loai/process_insert_loai", "loaiController@process_insert_loai")->name("admin.loai.process_insert_loai");
	Route::post("loai/process_update_loai/{id}", "loaiController@process_update_loai")->name("admin.loai.process_update_loai");

	// Route::post("process_update_loai/{ma}","loaiController@process_update")->name('process_update_loai');
	Route::get("sanpham", "san_phamController@view_all")->name("admin.sanpham");
	Route::get("sanpham/insert_sanpham", "san_phamController@view_insert")->name("admin.insert_sanpham");
	Route::post("sanpham/process_insert","san_phamController@process_insert")->name("admin.process_insert");
	Route::get("sanpham/delete/{id}","san_phamController@delete")
	->name("admin.delete_sanpham");
	Route::get("sanpham/upload_image/{id}", "san_phamController@upload_image")->name("admin.upload_image");

	Route::post("sanpham/process_upload_image", "san_phamController@process_upload_image")->name("admin.process_upload_image");

	



	Route::get("sanpham/view_update/{id}","san_phamController@view_update")
	->name("admin.view_update");
	Route::post("sanpham/PROCESS_update","san_phamController@PROCESS_update")
	->name("admin.PROCESS_update");


	Route::get("khach_hang", "KhachHangController@view_all")->name("admin.khachhang");


});
Auth::routes();


Route::group(['prefix'=>'homepage','namespace'=> 'HomePage'],function(){
	Route::get("/", "homepageController@index")->name("index");
	Route::get("giohang", "giohangController@index")->name("giohang");
	Route::get("product_detail/{id}", "product_detailController@index")->name("product_detail");
});



