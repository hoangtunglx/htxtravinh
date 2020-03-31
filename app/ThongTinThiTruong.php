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
      return $this->belongsTo(NongSan::class,'nongsan_id','id');
   	}
<<<<<<< HEAD
   	
=======
>>>>>>> 6745f17d48ab84ebf1090075ffe3951422a1daf0
}