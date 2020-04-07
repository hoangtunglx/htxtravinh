<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongTinThiTruong extends Model
{
	protected $table = 'thongtinthitruong';
	
   	public function NongSan()
   	{
      return $this->belongsTo('App\NongSan', 'nongsan_id');
   	}
}