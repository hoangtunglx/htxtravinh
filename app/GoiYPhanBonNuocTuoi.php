<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoiYPhanBonNuocTuoi extends Model
{
	protected $table = 'goiyphanbonnuoctuoi';

public function ThongTinMoiTruong()
	{
		return $this->belongsTo('App\ThongTinMoiTruong');
	}
public function ThongTinThoiTiet()
	{
		return $this->belongsTo('App\ThongTinThoiTiet');
	}

	public function NguoiDung()
	{
		return $this->belongsTo('App\NguoiDung','nguoidung_id','id');
	}



}
