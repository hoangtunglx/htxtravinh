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
      return $this->belongsTo('App\LoaiNongSan', 'loainongsan_id');
   }
   public function ThongTinThiTruong()
   {
      return $this->belongsTo('App\ThongTinThiTruong', 'thongtinthitruong_id');
   }
   
}