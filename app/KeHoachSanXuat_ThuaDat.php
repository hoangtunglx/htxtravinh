<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeHoachSanXuat_ThuaDat extends Model
{
	protected $table='kehoachsanxuat_thuadat';
	
	public function ThuaDat()
	{
		return $this->belongsTo('App\ThuaDat','thuadat_id');
	}
	
	public function KeHoachSanXuat()
	{
		return $this->belongsTo('App\KeHoachSanXuat','kehoachsanxuat_id');
	}
}