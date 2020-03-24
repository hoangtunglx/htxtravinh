<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class CongNo extends Model
{
	protected $table = 'congno';
	
	public function NguoiDung()
   	{
      return $this->belongsTo(NguoiDung::class,'nguoidung_id','id');
   	}
	public function DonHang()
	{
	     return $this->hasMany(DonHang::class,'donhang_id','id');
	}
	public function DonThue()
	{
	     return $this->hasMany(DonThue::class,'donthue_id','id');
	}
	public function MuaVu()
	{
	     return $this->belongsTo(MuaVu::class,'muavu_id','id');
	}
}