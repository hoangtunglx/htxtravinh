<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class NguoiDung extends Authenticatable
{
	use Notifiable;
	protected $table = 'nguoidung';
	protected $fillable = [
		'hoptacxa_id',
		'name',
		'tendangnhap',
		'email',
		'password',
		'quyenhan',
		'diachi',
		'sodienthoai',
		'kichhoat',
		'khoa',
	];
	protected $hidden = [
		'password', 'remember_token',
	];
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
}