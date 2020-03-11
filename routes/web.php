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
		Route::get('', 'LoaiGiongController@getIndex')->name('index');
		Route::get('create', 'LoaiGiongController@getCreate')->name('create');
		Route::post('store', 'LoaiGiongController@postCreate')->name('store');
		Route::get('edit/{id}', 'LoaiGiongController@getEdit')->name('edit');
		Route::put('update', 'LoaiGiongController@postEdit')->name('update');
		Route::delete('delete/{id}', 'LoaiGiongController@postDelete')->name('delete');
	});
});

// Officer - Cán bộ hợp tác xã
Route::prefix('officer')->name('officer.')->group(function () {
	Route::get('', function () {
		return view('officer.dashboard');
	})->name('dashboard');
});

// Manager - Cán bộ quản lý hợp tác xã
Route::prefix('manager')->name('manager.')->group(function () {
	Route::get('', function () {
		return view('manager.dashboard');
	})->name('dashboard');
});

// Admin - Quản trị viên
Route::prefix('admin')->name('admin.')->group(function () {
	Route::get('', function () {
		return view('admin.dashboard');
	})->name('dashboard');
});




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');