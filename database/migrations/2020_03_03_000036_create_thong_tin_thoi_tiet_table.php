<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinThoiTietTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thongtinthoitiet', function (Blueprint $table) {
			$table->id();
			$table->foreignId('vungnguyenlieu_id')->constrained()->on('vungnguyenlieu');
			$table->foreignId('nguoidung_id')->constrained()->on('nguoidung');
			$table->float('luongmua');
			$table->float('sucgio');
			$table->string('huonggio', 191)->nullable();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('thong_tin_thoi_tiets');
	}
}