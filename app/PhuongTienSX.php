<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuongTienSX extends Model
{
	protected $table = 'phuongtiensx';

	public function LoaiPhuongTien()
   {
      return $this->belongsTo('App\LoaiPhuongTien', 'loaiphuongtien_id');
   }
   
  public function HopTacXa()
   {
      return $this->belongsTo('App\HopTacXa', 'hoptacxa_id');
   }
	
}