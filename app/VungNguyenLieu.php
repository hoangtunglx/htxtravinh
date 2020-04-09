<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class VungNguyenLieu extends Model
{
	protected $table='vungnguyenlieu';
	
	public function NongSan()
	{
		return $this->belongsTo('App\NongSan','nongsan_id');
	}
	
	public function HopTacXa()
	{
		return $this->belongsTo('App\HopTacXa','hoptacxa_id');
	}
	
		public function ThuaDat()
	{
		return $this->hasMany('App\ThuaDat');
	}
}