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

//Xác thực đăng nhập
	
	// Route::get('/', function () {
 //    	return view('layout');
	// })->name('trang-chu');


Route::get('/','AdminController@getadmin')->name('getadmin');
Route::get('/dang-nhap','AdminController@DangNhap')->name('dang-nhap');
Route::post('/dang-nhap','AdminController@XuLyDangNhap')->name('xu-ly-dang-nhap');
Route::get('test','AdminController@LayId');
Route::get('dang-xuat','AdminController@DangXuat')->name('dang-xuat');

	//
Route::middleware('auth')->group(function(){
	Route::get('/', function () {
    	return view('layout');
	})->name('trang-chu');



// CONTROLLER LĨNH VỰC
Route::get('/linh-vuc','LinhVucController@index')->name('linh-vuc.ds-linh-vuc')->middleware('auth');


Route::get('/them-moi-linh-vuc','LinhVucController@create')->name('linh-vuc.xl-them-moi-linh-vuc');
Route::post('/them-moi-linh-vuc','LinhVucController@store')->name('linh-vuc.them-moi-linh-vuc');

Route::get('/linh-vuc/cap-nhat-linh-vuc/{id}','LinhVucController@edit')->name('linh-vuc.xl-cap-nhat-linh-vuc');
Route::post('/linh-vuc/cap-nhat-linh-vuc/{id}','LinhVucController@update')->name('linh-vuc.cap-nhat-linh-vuc');


Route::get('/linh-vuc/xoa-linh-vuc/{id}','LinhVucController@destroy')->name('linh-vuc.xoa-linh-vuc');


Route::get('/linh-vuc/thung-rac-linh-vuc','LinhVucController@thungrac')->name('linh-vuc.thung-rac');

Route::get('/linh-vuc/phuc-hoi-linh-vuc/{id}','LinhVucController@phuchoi')->name('linh-vuc.phuc-hoi-linh-vuc');



//CONTROLLER CÂU HỎIr
Route::get('/cau-hoi','CauHoiController@index')->name('cau-hoi.ds-cau-hoi');



Route::get('/cau-hoi/them-moi-cau-hoi','CauHoiController@create')->name('cau-hoi.xl-them-moi-cau-hoi');
Route::post('cau-hoi/them-moi-cau-hoi','CauHoiController@store')->name('cau-hoi.them-moi-cau-hoi');

Route::get('/cau-hoi/cap-nhat-cau-hoi/{id}','CauHoiController@edit')->name('cau-hoi.xl-cap-nhat-cau-hoi');
Route::post('/cau-hoi/cap-nhat-cau-hoi/{id}','CauHoiController@update')->name('cau-hoi.cap-nhat-cau-hoi');


Route::get('/cau-hoi/xoa-cau-hoi/{id}','CauHoiController@destroy')->name('cau-hoi.xoa-cau-hoi');


Route::get('/cau-hoi/thung-rac-cau-hoi','CauHoiController@thungrac')->name('cau-hoi.thung-rac');

Route::get('/cau-hoi/phuc-hoi-cau-hoi/{id}','CauHoiController@phuchoi')->name('cau-hoi.phuc-hoi-cau-hoi');

//CONTROLLER NGƯỜI CHƠI

Route::get('/nguoi-choi','NguoiChoiController@index') -> name('nguoi-choi.ds-nguoi-choi');

Route::get('/nguoi-choi/them-moi-nguoi-choi','NguoiChoiController@create')->name('nguoi-choi.xl-them-moi-nguoi-choi');
Route::post('/nguoi-choi/them-moi-nguoi-choi','NguoiChoiController@store')->name('nguoi-choi.them-moi-nguoi-choi');

Route::get('/nguoi-choi/cap-nhat-nguoi-choi/{id}','NguoiChoiController@edit')->name('nguoi-choi.xl-cap-nhat-nguoi-choi');
Route::post('/nguoi-choi/cap-nhat-nguoi-choi/{id}','NguoiChoiController@update')->name('nguoi-choi.cap-nhat-nguoi-choi');

Route::get('/nguoi-choi/xoa-nguoi-choi/{id}','NguoiChoiController@destroy')->name('nguoi-choi.xoa-nguoi-choi');

Route::get('/nguoi-choi/phuc-hoi-nguoi-choi/{id}','NguoiChoiController@phuchoi')->name('nguoi-choi.phuc-hoi-nguoi-choi');

Route::get('/nguoi-choi/thung-rac-nguoi-choi','NguoiChoiController@thungrac')->name('nguoi-choi.thung-rac-nguoi-choi');



//CONTROLLER GÓI CREDIT


Route::get('/goi-credit','GoiCreditController@index') -> name('goi-credit.ds-goi-credit');

Route::get('/goi-credit/them-moi-goi-credit','GoiCreditController@create')->name('goi-credit.xl-them-moi-goi-credit');
Route::post('/goi-credit/them-moi-goi-credit','GoiCreditController@store')->name('goi-credit.them-moi-goi-credit');

Route::get('/goi-credit/cap-nhat-goi-credit/{id}','GoiCreditController@edit')->name('goi-credit.xl-cap-nhat-goi-credit');
Route::post('/goi-credit/cap-nhat-goi-credit/{id}','GoiCreditController@update')->name('goi-credit.cap-nhat-goi-credit');

Route::get('/goi-credit/xoa-goi-credit/{id}','GoiCreditController@destroy')->name('goi-credit.xoa-goi-credit');

Route::get('/goi-credit/phuc-hoi-goi-credit/{id}','GoiCreditController@phuchoi')->name('goi-credit.phuc-hoi-goi-credit');

Route::get('/goi-credit/thung-rac-goi-credit','GoiCreditController@thungrac')->name('goi-credit.thung-rac-goi-credit');



});

