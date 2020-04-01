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

	Route::prefix('loai-giong')->name('loaigiong.')->group(function () {
		Route::get('', 'LoaiGiongController@getIndexFarmer')->name('index');
	});

	/*Giong*/ 
	Route::prefix('giong')->name('giong.')->group(function () {
		Route::get('', 'GiongController@getIndexFarmer')->name('index');
	});

	/*Loai Thuoc  Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function () {
		Route::get('', 'LoaiThuocBVTVController@getIndexFarmer')->name('index');
	});

	/*Thuoc  Bvtv*/ 
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function () {
		Route::get('', 'ThuocBVTVController@getIndexFarmer')->name('index');
	});
  
  /* Loai Phan bon */
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function () {
		Route::get('', 'LoaiPhanBonController@getIndexFarmer')->name('index');
	});
  
	/* Phan Bon */
	Route::prefix('phan-bon')->name('phanbon.')->group(function () {
		Route::get('', 'PhanBonController@getIndexFarmer')->name('index');
	});

	/* Loai Vat Tu */
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function () {
		Route::get('', 'LoaiVatTuController@getIndexFarmer')->name('index');
	});
  
  /* Loai Tieu Chuan SX */
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function () {
		Route::get('', 'LoaiTieuChuanSXController@getIndexFarmer')->name('index');
	});
  
	/* Tieu Chuan SX */
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function () {
		Route::get('', 'TieuChuanSXController@getIndexFarmer')->name('index');
	});

	/* Nhật ký canh tác */
	Route::prefix('nhat-ky')->name('nhatky.')->group(function () {

		Route::get('', 'ServiceNhatKyCanhTacController@getMuaVu')->name('muavu');
		Route::get('mua-vu/{id}', 'ServiceNhatKyCanhTacController@getThuaDat')->name('muavu.thuadat');
		Route::get('mua-vu/thua-dat/{muavuid}/{thuadatid}/{kehoachsanxuatid}', 'ServiceNhatKyCanhTacController@getQuyTrinh')->name('muavu.thuadat.quytrinh');
	});
	
});

// Officer - Cán bộ hợp tác xã
Route::prefix('officer')->name('officer.')->group(function () {
	Route::get('', function () {
		return view('officer.dashboard');
	})->name('dashboard');

	/*Loai Giong*/ 
	Route::prefix('loai-giong')->name('loaigiong.')->group(function () {
		Route::get('', 'LoaiGiongController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiGiongController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiGiongController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiGiongController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiGiongController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiGiongController@postDeleteOfficer')->name('delete');
	});

	/*Giong*/ 
	Route::prefix('giong')->name('giong.')->group(function () {
		Route::get('', 'GiongController@getIndexOfficer')->name('index');
		Route::get('create', 'GiongController@getCreateOfficer')->name('create');
		Route::post('store', 'GiongController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'GiongController@getEditOfficer')->name('edit');
		Route::put('update', 'GiongController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'GiongController@postDeleteOfficer')->name('delete');
	});

	/*Loai Thuoc  Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function () {
		Route::get('', 'LoaiThuocBVTVController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiThuocBVTVController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiThuocBVTVController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiThuocBVTVController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiThuocBVTVController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiThuocBVTVController@postDeleteOfficer')->name('delete');
	});

	/*Thuoc  Bvtv*/ 
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function () {
		Route::get('', 'ThuocBVTVController@getIndexOfficer')->name('index');
		Route::get('create', 'ThuocBVTVController@getCreateOfficer')->name('create');
		Route::post('store', 'ThuocBVTVController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'ThuocBVTVController@getEditOfficer')->name('edit');
		Route::put('update', 'ThuocBVTVController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'ThuocBVTVController@postDeleteOfficer')->name('delete');
	});
  
  /* Loai Phan bon */
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function () {
		Route::get('', 'LoaiPhanBonController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiPhanBonController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiPhanBonController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiPhanBonController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiPhanBonController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiPhanBonController@postDeleteOfficer')->name('delete');
	});
  
	/* Phan Bon */
	Route::prefix('phan-bon')->name('phanbon.')->group(function () {
		Route::get('', 'PhanBonController@getIndexOfficer')->name('index');
		Route::get('create', 'PhanBonController@getCreateOfficer')->name('create');
		Route::post('store', 'PhanBonController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'PhanBonController@getEditOfficer')->name('edit');
		Route::put('update', 'PhanBonController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'PhanBonController@postDeleteOfficer')->name('delete');
	});

	/* Loai Vat Tu */
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function () {
		Route::get('', 'LoaiVatTuController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiVatTuController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiVatTuController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiVatTuController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiVatTuController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiVatTuController@postDeleteOfficer')->name('delete');
	});
  
  /* Loai Tieu Chuan SX */
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function () {
		Route::get('', 'LoaiTieuChuanSXController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiTieuChuanSXController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiTieuChuanSXController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiTieuChuanSXController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiTieuChuanSXController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiTieuChuanSXController@postDeleteOfficer')->name('delete');
	});
  
	/* Tieu Chuan SX */
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function () {
		Route::get('', 'TieuChuanSXController@getIndexOfficer')->name('index');
		Route::get('create', 'TieuChuanSXController@getCreateOfficer')->name('create');
		Route::post('store', 'TieuChuanSXController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'TieuChuanSXController@getEditOfficer')->name('edit');
		Route::put('update', 'TieuChuanSXController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'TieuChuanSXController@postDeleteOfficer')->name('delete');
	});

});

// Manager - Cán bộ quản lý hợp tác xã
Route::prefix('manager')->name('manager.')->group(function () {
	Route::get('', function () {
		return view('manager.dashboard');
	})->name('dashboard');

	Route::prefix('loai-giong')->name('loaigiong.')->group(function () {
		Route::get('', 'LoaiGiongController@getIndexManager')->name('index');
	});

	/*Giong*/ 
	Route::prefix('giong')->name('giong.')->group(function () {
		Route::get('', 'GiongController@getIndexManager')->name('index');
	});

	/*Loai Thuoc  Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function () {
		Route::get('', 'LoaiThuocBVTVController@getIndexManager')->name('index');
	});

	/*Thuoc  Bvtv*/ 
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function () {
		Route::get('', 'ThuocBVTVController@getIndexManager')->name('index');
	});
  
  /* Loai Phan bon */
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function () {
		Route::get('', 'LoaiPhanBonController@getIndexManager')->name('index');
	});
  
	/* Phan Bon */
	Route::prefix('phan-bon')->name('phanbon.')->group(function () {
		Route::get('', 'PhanBonController@getIndexManager')->name('index');
	});

	/* Loai Vat Tu */
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function () {
		Route::get('', 'LoaiVatTuController@getIndexManager')->name('index');
	});
  
  /* Loai Tieu Chuan SX */
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function () {
		Route::get('', 'LoaiTieuChuanSXController@getIndexManager')->name('index');
	});
  
	/* Tieu Chuan SX */
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function () {
		Route::get('', 'TieuChuanSXController@getIndexManager')->name('index');
	});

});

// Admin - Quản trị viên
Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('', function () {
		return view('admin.dashboard');
	})->name('dashboard');


	/*Loai Giong*/ 
	Route::prefix('loai-giong')->name('loaigiong.')->group(function () {
		Route::get('', 'LoaiGiongController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiGiongController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiGiongController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiGiongController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiGiongController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiGiongController@postDeleteAdmin')->name('delete');
	});

	/*Giong*/ 
	Route::prefix('giong')->name('giong.')->group(function () {
		Route::get('', 'GiongController@getIndexAdmin')->name('index');
		Route::get('create', 'GiongController@getCreateAdmin')->name('create');
		Route::post('store', 'GiongController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'GiongController@getEditAdmin')->name('edit');
		Route::put('update', 'GiongController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'GiongController@postDeleteAdmin')->name('delete');
	});

	/*Loai Thuoc  Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function () {
		Route::get('', 'LoaiThuocBVTVController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiThuocBVTVController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiThuocBVTVController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiThuocBVTVController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiThuocBVTVController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiThuocBVTVController@postDeleteAdmin')->name('delete');
	});

	/*Thuoc  Bvtv*/ 
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function () {
		Route::get('', 'ThuocBVTVController@getIndexAdmin')->name('index');
		Route::get('create', 'ThuocBVTVController@getCreateAdmin')->name('create');
		Route::post('store', 'ThuocBVTVController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'ThuocBVTVController@getEditAdmin')->name('edit');
		Route::put('update', 'ThuocBVTVController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'ThuocBVTVController@postDeleteAdmin')->name('delete');
	});
  
  /* Loai Phan bon */
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function () {
		Route::get('', 'LoaiPhanBonController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiPhanBonController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiPhanBonController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiPhanBonController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiPhanBonController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiPhanBonController@postDeleteAdmin')->name('delete');
	});
  
	/* Phan Bon */
	Route::prefix('phan-bon')->name('phanbon.')->group(function () {
		Route::get('', 'PhanBonController@getIndexAdmin')->name('index');
		Route::get('create', 'PhanBonController@getCreateAdmin')->name('create');
		Route::post('store', 'PhanBonController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'PhanBonController@getEditAdmin')->name('edit');
		Route::put('update', 'PhanBonController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'PhanBonController@postDeleteAdmin')->name('delete');
	});

	/* Loai Vat Tu */
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function () {
		Route::get('', 'LoaiVatTuController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiVatTuController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiVatTuController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiVatTuController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiVatTuController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiVatTuController@postDeleteAdmin')->name('delete');
	});
  
  /* Loai Tieu Chuan SX */
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function () {
		Route::get('', 'LoaiTieuChuanSXController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiTieuChuanSXController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiTieuChuanSXController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiTieuChuanSXController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiTieuChuanSXController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiTieuChuanSXController@postDeleteAdmin')->name('delete');
	});
  
	/* Tieu Chuan SX */
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function () {
		Route::get('', 'TieuChuanSXController@getIndexAdmin')->name('index');
		Route::get('create', 'TieuChuanSXController@getCreateAdmin')->name('create');
		Route::post('store', 'TieuChuanSXController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'TieuChuanSXController@getEditAdmin')->name('edit');
		Route::put('update', 'TieuChuanSXController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'TieuChuanSXController@postDeleteAdmin')->name('delete');
	});
	
	
/* dự báo sâu bệnh */

		Route::prefix('du-bao-sau-benh')->name('dubaosaubenh.')->group(function () {
		Route::get('', 'DuBaoSauBenhController@getIndexOfficer')->name('index');
		Route::get('create', 'DuBaoSauBenhController@getCreateOfficer')->name('create');
		Route::post('store', 'DuBaoSauBenhController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'DuBaoSauBenhController@getEditOfficer')->name('edit');
		Route::put('update', 'DuBaoSauBenhController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'DuBaoSauBenhController@postDeleteOfficer')->name('delete');

});
		/* Sau Benh */
		Route::prefix('sau-benh')->name('saubenh.')->group(function () {
		Route::get('', 'SauBenhController@getIndexAdmin')->name('index');
		Route::get('create', 'SauBenhController@getCreateAdmin')->name('create');
		Route::post('store', 'SauBenhController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'SauBenhController@getEditAdmin')->name('edit');
		Route::put('update', 'SauBenhController@postEditAdmin')->name('update');
		Route::get('delete/{id}', 'SauBenhController@postDeleteAdmin')->name('delete');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');