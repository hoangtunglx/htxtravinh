<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongTinMoiTruong extends Model
{
	protected $table = 'thongtinmoitruong';

	public function GoiYPhanBonNuocTuoi()
	{
		return $this->hasMany('App\GoiYPhanBonNuocTuoi');
	}

	public function NguoiDung()
	{
		return $this->belongsTo('App\NguoiDung','nguoidung_id','id');
	}

}
