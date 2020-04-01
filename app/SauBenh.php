<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class SauBenh extends Model
{
	protected $table = 'saubenh';


/*public function DuBaoSauBenh()
	{
		return $this->hasMany('App\DuBaoSauBenh','saubenh_id','id');
	}*/
}