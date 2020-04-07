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

Route::get('/v', function() {
	$laravel = app();
	return "Version: Laravel " . $laravel::VERSION;
});

Route::get('/clear/cache', function() {
	Artisan::call('cache:clear');
	return "Cache is cleared.";
});

Route::get('/clear/view', function() {
	Artisan::call('view:clear');
	return "Views are cleared.";
});

// Xác thực
Auth::routes();

// Trang tin tức
Route::get('/', 'HomeController@index')->name('home');

// Farmer - Nông dân
Route::prefix('farmer')->name('farmer.')->group(function() {
	Route::get('', function() { return view('farmer.dashboard'); })->name('dashboard');
	
	Route::prefix('loai-giong')->name('loaigiong.')->group(function() {
		Route::get('', 'LoaiGiongController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('giong')->name('giong.')->group(function() {
		Route::get('', 'GiongController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function() {
		Route::get('', 'LoaiThuocBVTVController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function() {
		Route::get('', 'ThuocBVTVController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function() {
		Route::get('', 'LoaiPhanBonController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('phan-bon')->name('phanbon.')->group(function() {
		Route::get('', 'PhanBonController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function() {
		Route::get('', 'LoaiVatTuController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function() {
		Route::get('', 'LoaiTieuChuanSXController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function() {
		Route::get('', 'TieuChuanSXController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('nhat-ky')->name('nhatky.')->group(function() {
		Route::get('', 'ServiceNhatKyCanhTacController@getMuaVu')->name('muavu');
		Route::get('mua-vu/{id}', 'ServiceNhatKyCanhTacController@getThuaDat')->name('muavu.thuadat');
		Route::get('mua-vu/thua-dat/{muavuid}/{thuadatid}/{kehoachsanxuatid}', 'ServiceNhatKyCanhTacController@getQuyTrinh')->name('muavu.thuadat.quytrinh');
	});
	
	Route::prefix('loai-nong-san')->name('loainongsan.')->group(function() {
		Route::get('', 'LoaiNongSanController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('nong-san')->name('nongsan.')->group(function() {
		Route::get('', 'NongSanController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('loai-phuong-tien')->name('loaiphuongtien.')->group(function() {
		Route::get('', 'LoaiPhuongTienController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('phuong-tien-sx')->name('phuongtiensx.')->group(function() {
		Route::get('', 'PhuongTienSXController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('cong-no')->name('congno.')->group(function() {
		Route::get('', 'CongNoController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('thong-tin-thi-truong')->name('thongtinthitruong.')->group(function() {
		Route::get('', 'ThongTinThiTruongController@getIndexFarmer')->name('index');
	});
	
	Route::prefix('chinh-sach-nong-nghiep')->name('chinhsachnongnghiep.')->group(function() {
		Route::get('', 'ChinhSachNongNghiepController@getIndexFarmer')->name('index');
	});
});

// Officer - Cán bộ hợp tác xã
Route::prefix('officer')->name('officer.')->group(function() {
	Route::get('', function() {
		return view('officer.dashboard');
	})->name('dashboard');

	/*Loai Giong*/ 
	Route::prefix('loai-giong')->name('loaigiong.')->group(function() {
		Route::get('', 'LoaiGiongController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiGiongController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiGiongController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiGiongController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiGiongController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiGiongController@postDeleteOfficer')->name('delete');
	});

	/*Giong*/ 
	Route::prefix('giong')->name('giong.')->group(function() {
		Route::get('', 'GiongController@getIndexOfficer')->name('index');
		Route::get('create', 'GiongController@getCreateOfficer')->name('create');
		Route::post('store', 'GiongController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'GiongController@getEditOfficer')->name('edit');
		Route::put('update', 'GiongController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'GiongController@postDeleteOfficer')->name('delete');
	});

	/*Loai Thuoc Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function() {
		Route::get('', 'LoaiThuocBVTVController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiThuocBVTVController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiThuocBVTVController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiThuocBVTVController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiThuocBVTVController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiThuocBVTVController@postDeleteOfficer')->name('delete');
	});

	/*Thuoc Bvtv*/ 
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function() {
		Route::get('', 'ThuocBVTVController@getIndexOfficer')->name('index');
		Route::get('create', 'ThuocBVTVController@getCreateOfficer')->name('create');
		Route::post('store', 'ThuocBVTVController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'ThuocBVTVController@getEditOfficer')->name('edit');
		Route::put('update', 'ThuocBVTVController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'ThuocBVTVController@postDeleteOfficer')->name('delete');
	});
 
 /* Loai Phan bon */
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function() {
		Route::get('', 'LoaiPhanBonController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiPhanBonController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiPhanBonController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiPhanBonController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiPhanBonController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiPhanBonController@postDeleteOfficer')->name('delete');
	});
 
	/* Phan Bon */
	Route::prefix('phan-bon')->name('phanbon.')->group(function() {
		Route::get('', 'PhanBonController@getIndexOfficer')->name('index');
		Route::get('create', 'PhanBonController@getCreateOfficer')->name('create');
		Route::post('store', 'PhanBonController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'PhanBonController@getEditOfficer')->name('edit');
		Route::put('update', 'PhanBonController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'PhanBonController@postDeleteOfficer')->name('delete');
	});

	/* Loai Vat Tu */
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function() {
		Route::get('', 'LoaiVatTuController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiVatTuController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiVatTuController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiVatTuController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiVatTuController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiVatTuController@postDeleteOfficer')->name('delete');
	});
 
 /* Loai Tieu Chuan SX */
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function() {
		Route::get('', 'LoaiTieuChuanSXController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiTieuChuanSXController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiTieuChuanSXController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiTieuChuanSXController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiTieuChuanSXController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiTieuChuanSXController@postDeleteOfficer')->name('delete');
	});
 
	/* Tieu Chuan SX */
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function() {
		Route::get('', 'TieuChuanSXController@getIndexOfficer')->name('index');
		Route::get('create', 'TieuChuanSXController@getCreateOfficer')->name('create');
		Route::post('store', 'TieuChuanSXController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'TieuChuanSXController@getEditOfficer')->name('edit');
		Route::put('update', 'TieuChuanSXController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'TieuChuanSXController@postDeleteOfficer')->name('delete');
	});

	// Loại Nông Sản
	Route::prefix('loai-nong-san')->name('loainongsan.')->group(function() {
		Route::get('', 'LoaiNongSanController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiNongSanController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiNongSanController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiNongSanController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiNongSanController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiNongSanController@postDeleteOfficer')->name('delete');
	});
	// Nông Sản
	Route::prefix('nong-san')->name('nongsan.')->group(function() {
		Route::get('', 'NongSanController@getIndexOfficer')->name('index');
		Route::get('create', 'NongSanController@getCreateOfficer')->name('create');
		Route::post('store', 'NongSanController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'NongSanController@getEditOfficer')->name('edit');
		Route::put('update', 'NongSanController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'NongSanController@postDeleteOfficer')->name('delete');
	});
	/* Loại Phương Tiện */
	Route::prefix('loai-phuong-tien')->name('loaiphuongtien.')->group(function() {
		Route::get('', 'LoaiPhuongTienController@getIndexOfficer')->name('index');
		Route::get('create', 'LoaiPhuongTienController@getCreateOfficer')->name('create');
		Route::post('store', 'LoaiPhuongTienController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'LoaiPhuongTienController@getEditOfficer')->name('edit');
		Route::put('update', 'LoaiPhuongTienController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'LoaiPhuongTienController@postDeleteOfficer')->name('delete');
	});
	/* Phương Tiện SX */
	Route::prefix('phuong-tien-sx')->name('phuongtiensx.')->group(function() {
		Route::get('', 'PhuongTienSXController@getIndexOfficer')->name('index');
		Route::get('create', 'PhuongTienSXController@getCreateOfficer')->name('create');
		Route::post('store', 'PhuongTienSXController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'PhuongTienSXController@getEditOfficer')->name('edit');
		Route::put('update', 'PhuongTienSXController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'PhuongTienSXController@postDeleteOfficer')->name('delete');
	});
	/* Công nợ */
	Route::prefix('cong-no')->name('congno.')->group(function() {
		Route::get('', 'CongNoController@getIndexOfficer')->name('index');
		Route::get('create', 'CongNoController@getCreateOfficer')->name('create');
		Route::post('store', 'CongNoController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'CongNoController@getEditOfficer')->name('edit');
		Route::put('update', 'CongNoController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'CongNoController@postDeleteOfficer')->name('delete');
	});
	/* Thông Tin Thị Trường */
	Route::prefix('thong-tin-thi-truong')->name('thongtinthitruong.')->group(function() {
		Route::get('', 'ThongTinThiTruongController@getIndexOfficer')->name('index');
		Route::get('create', 'ThongTinThiTruongController@getCreateOfficer')->name('create');
		Route::post('store', 'ThongTinThiTruongController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'ThongTinThiTruongController@getEditOfficer')->name('edit');
		Route::put('update', 'ThongTinThiTruongController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'ThongTinThiTruongController@postDeleteOfficer')->name('delete');
	});

	/* Chính sách nông nghiệp */
	Route::prefix('chinh-sach-nong-nghiep')->name('chinhsachnongnghiep.')->group(function() {
		Route::get('', 'ChinhSachNongNghiepController@getIndexOfficer')->name('index');
		Route::get('create', 'ChinhSachNongNghiepController@getCreateOfficer')->name('create');
		Route::post('store', 'ChinhSachNongNghiepController@postCreateOfficer')->name('store');
		Route::get('edit/{id}', 'ChinhSachNongNghiepController@getEditOfficer')->name('edit');
		Route::put('update', 'ChinhSachNongNghiepController@postEditOfficer')->name('update');
		Route::delete('delete/{id}', 'ChinhSachNongNghiepController@postDeleteOfficer')->name('delete');
	});

});

// Manager - Cán bộ quản lý hợp tác xã
Route::prefix('manager')->name('manager.')->group(function() {
	Route::get('', function() {
		return view('manager.dashboard');
	})->name('dashboard');

	Route::prefix('loai-giong')->name('loaigiong.')->group(function() {
		Route::get('', 'LoaiGiongController@getIndexManager')->name('index');
	});

	/*Giong*/ 
	Route::prefix('giong')->name('giong.')->group(function() {
		Route::get('', 'GiongController@getIndexManager')->name('index');
	});

	/*Loai Thuoc Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function() {
		Route::get('', 'LoaiThuocBVTVController@getIndexManager')->name('index');
	});

	/*Thuoc Bvtv*/ 
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function() {
		Route::get('', 'ThuocBVTVController@getIndexManager')->name('index');
	});
 
 /* Loai Phan bon */
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function() {
		Route::get('', 'LoaiPhanBonController@getIndexManager')->name('index');
	});
 
	/* Phan Bon */
	Route::prefix('phan-bon')->name('phanbon.')->group(function() {
		Route::get('', 'PhanBonController@getIndexManager')->name('index');
	});

	/* Loai Vat Tu */
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function() {
		Route::get('', 'LoaiVatTuController@getIndexManager')->name('index');
	});
 
 /* Loai Tieu Chuan SX */
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function() {
		Route::get('', 'LoaiTieuChuanSXController@getIndexManager')->name('index');
	});
 
	/* Tieu Chuan SX */
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function() {
		Route::get('', 'TieuChuanSXController@getIndexManager')->name('index');
	});

	// Loại nông sản
	Route::prefix('loai-nong-san')->name('loainongsan.')->group(function() {
		Route::get('', 'LoaiNongSanController@getIndexManager')->name('index');
	});
	// Nông sản
	Route::prefix('nong-san')->name('nongsan.')->group(function() {
		Route::get('', 'NongSanController@getIndexManager')->name('index');
	});
	/* Loại Phương Tiện SX */
	Route::prefix('loai-phuong-tien')->name('loaiphuongtien.')->group(function() {
		Route::get('', 'LoaiPhuongTienController@getIndexManager')->name('index');
	});
	/* Phương Tiện SX */	
	Route::prefix('phuong-tien-sx')->name('phuongtiensx.')->group(function() {
		Route::get('', 'PhuongTienSXController@getIndexManager')->name('index');
	});
	/* Phương Tiện SX */	
	Route::prefix('cong-no')->name('congno.')->group(function() {
		Route::get('', 'CongNoController@getIndexManager')->name('index');
	});
	/* Thông Tin Thị Trường */
	Route::prefix('thong-tin-thi-truong')->name('thongtinthitruong.')->group(function() {
		Route::get('', 'ThongTinThiTruongController@getIndexManager')->name('index');
	});
	/* Chính Sách Nông Nghiệp */
	Route::prefix('chinh-sach-nong-nghiep')->name('chinhsachnongnghiep.')->group(function() {
		Route::get('', 'ChinhSachNongNghiepController@getIndexManager')->name('index');
	});

});

// Admin - Quản trị viên
Route::prefix('admin')->name('admin.')->group(function() {
	Route::get('', function() {
		return view('admin.dashboard');
	})->name('dashboard');


	/*Loai Giong*/ 
	Route::prefix('loai-giong')->name('loaigiong.')->group(function() {
		Route::get('', 'LoaiGiongController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiGiongController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiGiongController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiGiongController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiGiongController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiGiongController@postDeleteAdmin')->name('delete');
	});

	/*Giong*/ 
	Route::prefix('giong')->name('giong.')->group(function() {
		Route::get('', 'GiongController@getIndexAdmin')->name('index');
		Route::get('create', 'GiongController@getCreateAdmin')->name('create');
		Route::post('store', 'GiongController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'GiongController@getEditAdmin')->name('edit');
		Route::put('update', 'GiongController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'GiongController@postDeleteAdmin')->name('delete');
	});

	/*Loai Thuoc Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function() {
		Route::get('', 'LoaiThuocBVTVController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiThuocBVTVController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiThuocBVTVController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiThuocBVTVController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiThuocBVTVController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiThuocBVTVController@postDeleteAdmin')->name('delete');
	});

	/*Thuoc Bvtv*/ 
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function() {
		Route::get('', 'ThuocBVTVController@getIndexAdmin')->name('index');
		Route::get('create', 'ThuocBVTVController@getCreateAdmin')->name('create');
		Route::post('store', 'ThuocBVTVController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'ThuocBVTVController@getEditAdmin')->name('edit');
		Route::put('update', 'ThuocBVTVController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'ThuocBVTVController@postDeleteAdmin')->name('delete');
	});
 
 /* Loai Phan bon */
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function() {
		Route::get('', 'LoaiPhanBonController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiPhanBonController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiPhanBonController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiPhanBonController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiPhanBonController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiPhanBonController@postDeleteAdmin')->name('delete');
	});
 
	/* Phan Bon */
	Route::prefix('phan-bon')->name('phanbon.')->group(function() {
		Route::get('', 'PhanBonController@getIndexAdmin')->name('index');
		Route::get('create', 'PhanBonController@getCreateAdmin')->name('create');
		Route::post('store', 'PhanBonController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'PhanBonController@getEditAdmin')->name('edit');
		Route::put('update', 'PhanBonController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'PhanBonController@postDeleteAdmin')->name('delete');
	});

	/* Loai Vat Tu */
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function() {
		Route::get('', 'LoaiVatTuController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiVatTuController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiVatTuController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiVatTuController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiVatTuController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiVatTuController@postDeleteAdmin')->name('delete');
	});
 
 /* Loai Tieu Chuan SX */
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function() {
		Route::get('', 'LoaiTieuChuanSXController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiTieuChuanSXController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiTieuChuanSXController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiTieuChuanSXController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiTieuChuanSXController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiTieuChuanSXController@postDeleteAdmin')->name('delete');
	});
 
	/* Tieu Chuan SX */
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function() {
		Route::get('', 'TieuChuanSXController@getIndexAdmin')->name('index');
		Route::get('create', 'TieuChuanSXController@getCreateAdmin')->name('create');
		Route::post('store', 'TieuChuanSXController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'TieuChuanSXController@getEditAdmin')->name('edit');
		Route::put('update', 'TieuChuanSXController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'TieuChuanSXController@postDeleteAdmin')->name('delete');
	});

	/* Loại Nông Sản */
	Route::prefix('loai-nong-san')->name('loainongsan.')->group(function() {
		Route::get('', 'LoaiNongSanController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiNongSanController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiNongSanController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiNongSanController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiNongSanController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiNongSanController@postDeleteAdmin')->name('delete');
	});
	/* Nông Sản */
	Route::prefix('nong-san')->name('nongsan.')->group(function() {
		Route::get('', 'NongSanController@getIndexAdmin')->name('index');
		Route::get('create', 'NongSanController@getCreateAdmin')->name('create');
		Route::post('store', 'NongSanController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'NongSanController@getEditAdmin')->name('edit');
		Route::put('update', 'NongSanController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'NongSanController@postDeleteAdmin')->name('delete');
	});
	/* Loại Phương Tiện */
	Route::prefix('loai-phuong-tien')->name('loaiphuongtien.')->group(function() {
		Route::get('', 'LoaiPhuongTienController@getIndexAdmin')->name('index');
		Route::get('create', 'LoaiPhuongTienController@getCreateAdmin')->name('create');
		Route::post('store', 'LoaiPhuongTienController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'LoaiPhuongTienController@getEditAdmin')->name('edit');
		Route::put('update', 'LoaiPhuongTienController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'LoaiPhuongTienController@postDeleteAdmin')->name('delete');
	});
	/* Phương Tiện SX */
	Route::prefix('phuong-tien-sx')->name('phuongtiensx.')->group(function() {
		Route::get('', 'PhuongTienSXController@getIndexAdmin')->name('index');
	//	Route::get('create', 'PhuongTienSXController@getCreateAdmin')->name('create');
	//	Route::post('store', 'PhuongTienSXController@postCreateAdmin')->name('store');
	//	Route::get('edit/{id}', 'PhuongTienSXController@getEditAdmin')->name('edit');
	//	Route::put('update', 'PhuongTienSXController@postEditAdmin')->name('update');
	//	Route::delete('delete/{id}', 'PhuongTienSXController@postDeleteAdmin')->name('delete');
	});
	/* Công nợ */
	Route::prefix('cong-no')->name('congno.')->group(function() {
		Route::get('', 'CongNoController@getIndexAdmin')->name('index');
	//	Route::get('create', 'PhuongTienSXController@getCreateAdmin')->name('create');
	//	Route::post('store', 'PhuongTienSXController@postCreateAdmin')->name('store');
	//	Route::get('edit/{id}', 'PhuongTienSXController@getEditAdmin')->name('edit');
	//	Route::put('update', 'PhuongTienSXController@postEditAdmin')->name('update');
	//	Route::delete('delete/{id}', 'PhuongTienSXController@postDeleteAdmin')->name('delete');
	});
	/* Thông Tin Thị Trường */
	Route::prefix('thong-tin-thi-truong')->name('thongtinthitruong.')->group(function() {
		Route::get('', 'ThongTinThiTruongController@getIndexAdmin')->name('index');
		Route::get('create', 'ThongTinThiTruongController@getCreateAdmin')->name('create');
		Route::post('store', 'ThongTinThiTruongController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'ThongTinThiTruongController@getEditAdmin')->name('edit');
		Route::put('update', 'ThongTinThiTruongController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'ThongTinThiTruongController@postDeleteAdmin')->name('delete');
	});

	/* Chính Sách Nông Nghiệp */
	Route::prefix('chinh-sach-nong-nghiep')->name('chinhsachnongnghiep.')->group(function() {
		Route::get('', 'ChinhSachNongNghiepController@getIndexAdmin')->name('index');
		Route::get('create', 'ChinhSachNongNghiepController@getCreateAdmin')->name('create');
		Route::post('store', 'ChinhSachNongNghiepController@postCreateAdmin')->name('store');
		Route::get('edit/{id}', 'ChinhSachNongNghiepController@getEditAdmin')->name('edit');
		Route::put('update', 'ChinhSachNongNghiepController@postEditAdmin')->name('update');
		Route::delete('delete/{id}', 'ChinhSachNongNghiepController@postDeleteAdmin')->name('delete');
		Route::get('download/{file}', 'ChinhSachNongNghiepController@download')->name('download');
		Route::get('xemFile/{file}', 'ChinhSachNongNghiepController@xemFile')->name('xemFile');
	});

});