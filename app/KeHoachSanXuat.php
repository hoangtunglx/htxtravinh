<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeHoachSanXuat extends Model
{
	protected $table = 'kehoachsanxuat';
	
	public function KeHoachSanXuatThuaDat()
	{
		return $this->hasMany('App\KeHoachSanXuatThuaDat');
	}
	
	public function ThuaDat()
	{
		return $this->hasMany('App\ThuaDat');
	}
	
	public function MuaVu()
	{
		return $this->belongsTo('App\MuaVu');
	}
}