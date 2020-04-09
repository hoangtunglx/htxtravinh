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


// Farmer - Nông dân
Route::prefix('farmer')->name('farmer.')->group(function () {
	Route::get('', function () {
		return view('farmer.dashboard');
	})->name('dashboard');

	



	/*Doanh nghiệp */
	Route::prefix('doanh-nghiep')->name('doanhnghiep.')->group(function () {
		Route::get('', 'DoanhNghiepController@getIndexFarmer')->name('index');

	});
	
	/*Thửa đất */
	Route::prefix('thua-dat')->name('thuadat.')->group(function () {
		Route::get('', 'ThuaDatController@getIndexFarmer')->name('index');
		Route::get('edit/{id}', 'ThuaDatController@getEditFarmer')->name('edit');
		Route::put('update', 'ThuaDatController@postEditFarmer')->name('update');

	});
	
	/*Vùng nguyên liệu */
	Route::prefix('vung-nguyen-lieu')->name('vungnguyenlieu.')->group(function () {
		Route::get('', 'VungNguyenLieuController@getIndexFarmer')->name('index');

	});
	
	/*Kế hoạch sản xuất thửa đất */
	Route::prefix('ke-hoach-san-xuat-thua-dat')->name('kehoachsanxuat_thuadat.')->group(function () {
		Route::get('', 'KeHoachSanXuatThuaDatController@getIndexFarmer')->name('index');
		Route::get('edit/{id}', 'KeHoachSanXuatThuaDatController@getEditFarmer')->name('edit');
		Route::put('update', 'KeHoachSanXuatThuaDatController@postEditFarmer')->name('update');

	});

});

// Officer - Cán bộ hợp tác xã
Route::prefix('officer')->name('officer.')->group(function () {
	Route::get('', function () {
		return view('officer.dashboard');
	})->name('dashboard');


	/* Doanh Nghiệp */
	Route::prefix('doanh-nghiep')->name('doanhnghiep.')->group(function () {
		Route::get('', 'DoanhNghiepController@getIndexOfficer')->name('index');
		Route::get('create', 'DoanhNghiepController@getCreateOfficer')->name('create');
		Route::post('store', 'DoanhNghiepController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'DoanhNghiepController@getEditOfficer')->name('edit');
		Route::put('update', 'DoanhNghiepController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'DoanhNghiepController@postDeleteOfficer')->name('delete');
	});
	
	/* Thửa đất */
	Route::prefix('thua-dat')->name('thuadat.')->group(function () {
		Route::get('', 'ThuaDatController@getIndexOfficer')->name('index');
		Route::get('create', 'ThuaDatController@getCreateOfficer')->name('create');
		Route::post('store', 'ThuaDatController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'ThuaDatController@getEditOfficer')->name('edit');
		Route::put('update', 'ThuaDatController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'ThuaDatController@postDeleteOfficer')->name('delete');
	});
	
	/* Vùng nguyên liệu*/
	Route::prefix('vung-nguyen-lieu')->name('vungnguyenlieu.')->group(function () {
		Route::get('', 'VungNguyenLieuController@getIndexOfficer')->name('index');
		Route::get('create', 'VungNguyenLieuController@getCreateOfficer')->name('create');
		Route::post('store', 'VungNguyenLieuController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'VungNguyenLieuController@getEditOfficer')->name('edit');
		Route::put('update', 'VungNguyenLieuController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'VungNguyenLieuController@postDeleteOfficer')->name('delete');
	});
	
	/* Kế hoạch sản xuất thửa đât*/
	Route::prefix('ke-hoach-san-xuat-thua-dat')->name('kehoachsanxuat_thuadat.')->group(function () {
		Route::get('', 'KeHoachSanXuatThuaDatController@getIndexOfficer')->name('index');
		Route::get('create', 'KeHoachSanXuatThuaDatController@getCreateOfficer')->name('create');
		Route::post('store', 'KeHoachSanXuatThuaDatController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'KeHoachSanXuatThuaDatController@getEditOfficer')->name('edit');
		Route::put('update', 'KeHoachSanXuatThuaDatController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'KeHoachSanXuatThuaDatController@postDeleteOfficer')->name('delete');
	});

	
	

	

});

// Manager - Cán bộ quản lý hợp tác xã
Route::prefix('manager')->name('manager.')->group(function () {
	Route::get('', function () {
		return view('manager.dashboard');
	})->name('dashboard');

	

	/* Doanh Nghiệp */
	Route::prefix('doanh-nghiep')->name('doanhnghiep.')->group(function () {
		Route::get('', 'DoanhNghiepController@getIndexManager')->name('index');
	});
	
	/* Thửa đất */
	Route::prefix('thua-dat')->name('thuadat.')->group(function () {
		Route::get('', 'ThuaDatController@getIndexManager')->name('index');
	});
	
	/* Vùng nguyên liệu */
	Route::prefix('vung-nguyen-lieu')->name('vungnguyenlieu.')->group(function () {
		Route::get('', 'VungNGuyenLieuController@getIndexManager')->name('index');
	});
	
	/* Kế hoạch sản xuất thửa đất */
	Route::prefix('ke-hoach-san-xuat-thua-dat')->name('kehoachsanxuat_thuadat.')->group(function () {
		Route::get('', 'KeHoachSanXuatThuaDatController@getIndexManager')->name('index');
	});

	


});

// Admin - Quản trị viên
Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('', function () {
		return view('admin.dashboard');
	})->name('dashboard');


	
	
	/*Doanh nghiep*/
	Route::prefix('doanh-nghiep')->name('doanhnghiep.')->group(function () {
		Route::get('', 'DoanhNghiepController@getIndexAdmin')->name('index');
		Route::get('create', 'DoanhNghiepController@getCreateAdmin')->name('create');
		Route::post('store', 'DoanhNghiepController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'DoanhNghiepController@getEditAdmin')->name('edit');
		Route::put('update', 'DoanhNghiepController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'DoanhNghiepController@postDeleteAdmin')->name('delete');
	});
	
	/*thua dat*/
	Route::prefix('thua-dat')->name('thuadat.')->group(function () {
		Route::get('', 'ThuaDatController@getIndexAdmin')->name('index');
		Route::get('create', 'ThuaDatController@getCreateAdmin')->name('create');
		Route::post('store', 'ThuaDatController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'ThuaDatController@getEditAdmin')->name('edit');
		Route::put('update', 'ThuaDatController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'ThuaDatController@postDeleteAdmin')->name('delete');
	});
	
	/*vung nguyen lieu*/
	Route::prefix('vung-nguyen-lieu')->name('vungnguyenlieu.')->group(function () {
		Route::get('', 'VungNguyenLieuController@getIndexAdmin')->name('index');
		Route::get('create', 'VungNguyenLieuController@getCreateAdmin')->name('create');
		Route::post('store', 'VungNguyenLieuController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'VungNguyenLieuController@getEditAdmin')->name('edit');
		Route::put('update', 'VungNguyenLieuController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'VungNguyenLieuController@postDeleteAdmin')->name('delete');
	});
	
	/*ke hoach san xuat thua dat*/
	Route::prefix('ke-hoach-san-xuat-thua-dat')->name('kehoachsanxuat_thuadat.')->group(function () {
		Route::get('', 'KeHoachSanXuatThuaDatController@getIndexAdmin')->name('index');
	});

});




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
