<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongTinThoiTiet extends Model
{
  protected $table = 'thongtinthoitiet';

  public function GoiYPhanBonNuocTuoi()
	{
		return $this->hasMany('App\GoiYPhanBonNuocTuoi');
	}

	public function NguoiDung()
	{
		return $this->belongsTo('App\NguoiDung','nguoidung_id','id');
	}

	public function VungNguyenLieu()
	{
		return $this->belongsTo('App\VungNguyenLieu','vungnguyenlieu_id','id');
	}
}
