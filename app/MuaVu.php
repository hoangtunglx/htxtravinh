<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class MuaVu extends Model
{
	protected $table = 'muavu';

	public function DuBaoSauBenh()
	{
		return $this->hasMany('App\DuBaoSauBenh','muavu_id','id');
	}
}