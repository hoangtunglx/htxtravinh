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
      return $this->belongsTo('App\NguoiDung', 'nguoidung_id');
   	}
   	
   	public function MuaVu()
   	{
      return $this->belongsTo('App\MuaVu', 'muavu_id');
   	}

   	public function DonHang()
   	{
      return $this->hasMany('App\DonHang', 'donhang_id');
   	}

   	public function DonThue()
   	{
      return $this->hasMany('App\DonThue', 'donthue_id');
   	}
   	

}