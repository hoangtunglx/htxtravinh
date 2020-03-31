<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giong extends Model
{
	protected $table = 'giong';

	public function loaigiong()
	{
		return $this->belongsTo('App\LoaiGiong', 'loaigiong_id');
	}
}