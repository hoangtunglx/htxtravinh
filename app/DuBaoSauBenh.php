<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class DuBaoSauBenh extends Model
{
	protected $table = 'dubaosaubenh';


public function SauBenh()
	{
		return $this->belongsTo('App\SauBenh','saubenh_id','id');
	}

	public function VungNguyenLieu()
	{
		return $this->belongsTo('App\VungNguyenLieu','vungnguyenlieu_id','id');
	}

	public function MuaVu()
	{
		return $this->belongsTo('App\MuaVu','muavu_id','id');
	}
	public function NguoiDung()
	{
		return $this->belongsTo('App\NguoiDung','nguoidung_id','id');
	}

}