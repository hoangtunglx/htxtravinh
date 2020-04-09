<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class HopTacXa extends Model
{
	protected $table = 'hoptacxa';
	
	public function VungNguyenLieu()
	{
		return $this->hasMany('App\VungNguyenLieu');
	}
}