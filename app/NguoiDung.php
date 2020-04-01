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
	
	protected $fillable = [
		'name', 'email', 'password',
	];
	protected $hidden = [
		'password', 'remember_token',
	];
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	protected $table = 'nguoidung';

	public function ThongTinMoiTruong()
	{
		return $this->hasMany('App\ThongTinMoiTruong','nguoidung_id','id');

	}
	public function ThongTinThoiTiet()
	{
		return $this->hasMany('App\ThongTinThoiTiet','nguoidung_id','id');
	}

	public function DuBaoSauBenh()
	{
		return $this->hasMany('App\DuBaoSauBenh','nguoidung_id','id');
	}
	public function GoiYPhanBonNuocTuoi()
	{
		return $this->hasMany('App\GoiYPhanBonNuocTuoi','nguoidung_id','id');
	}


}