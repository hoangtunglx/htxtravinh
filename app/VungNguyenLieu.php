<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class VungNguyenLieu extends Model
{
	protected $table = 'vungnguyenlieu';

	public function DuBaoSauBenh()
	{
		return $this->hasMany('App\DuBaoSauBenh','vungnguyenlieu_id','id');
	}
	public function ThongTinThoiTiet()
	{
		return $this->hasMany('App\ThongTinThoiTiet','vungnguyenlieu_id','id');
	}
}