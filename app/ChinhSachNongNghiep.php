<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChinhSachNongNghiep extends Model
{
	protected $table = 'chinhsachnongnghiep';
	public function NguoiDung()
   	{
      return $this->belongsTo(NguoiDung::class,'nguoidung_id','id');
   	}
   	public function HopTacXa()
	{
	     return $this->belongsTo(HopTacXa::class,'hoptacxa_id','id');
	}
}