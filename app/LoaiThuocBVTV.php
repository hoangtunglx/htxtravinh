<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiThuocBVTV extends Model
{
	protected $table = 'loaithuocbvtv';

	public function thuocbvtv()
	{
		return $this->hasMany('App\ThuocBVTV', 'thuocbvtv_id');
	}
}