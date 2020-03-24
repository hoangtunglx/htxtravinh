<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiPhuongTien extends Model
{
	protected $table = 'loaiphuongtien';

	public function PhuongTienSX()
	{
		return $this->hasMany('App\PhuongTienSX');
	}
}