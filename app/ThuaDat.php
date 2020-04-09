<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThuaDat extends Model
{
	protected $table='thuadat';
	
	public function NguoiDung()
	{
		return $this->belongsTo('App\NguoiDung', 'nguoidung_id');
	}
	
	public function KeHoachSanXuat_ThuaDat()
	{
		return $this->hasMany('App\KeHoachSanXuat_ThuaDat');
	}
}