<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanBon extends Model
{
	protected $table = 'phanbon';

	public function loaiphanbon()
	{
		return $this->belongsTo('App\LoaiPhanBon', 'loaiphanbon_id');
	}
}