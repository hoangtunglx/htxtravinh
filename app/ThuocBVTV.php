<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThuocBVTV extends Model
{
	protected $table = 'thuocbvtv';

	public function loaithuocbvtv()
	{
		return $this->belongsTo('App\LoaiThuocBVTV', 'loaithuocbvtv_id');
	}
}