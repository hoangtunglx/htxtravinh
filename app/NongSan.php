<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class NongSan extends Model
{
	protected $table = 'nongsan';
	
	
	public function LoaiNongSan()
   {
      return $this->belongsTo(LoaiNongSan::class,'loainongsan_id','id');
   }
<<<<<<< HEAD
   public function ThongTinThiTruong()
   {
      return $this->belongsTo(ThongTinThiTruong::class,'thongtinthitruong_id','id');
   }
   
=======
>>>>>>> 6745f17d48ab84ebf1090075ffe3951422a1daf0
  
}