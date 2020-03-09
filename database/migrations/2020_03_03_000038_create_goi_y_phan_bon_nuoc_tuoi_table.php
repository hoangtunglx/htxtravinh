<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoiYPhanBonNuocTuoiTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goiyphanbonnuoctuoi', function (Blueprint $table) {
			$table->id();
			$table->foreignId('thongtinmoitruong_id')->constrained()->on('thongtinmoitruong');
			$table->foreignId('thongtinthoitiet_id')->constrained()->on('thongtinthoitiet');
			$table->string('thongtingoiy', 191);
			$table->string('nguoigoiy', 50);
			$table->string('ghichu', 191)->nullable();
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
		Schema::dropIfExists('goi_y_phan_bon_nuoc_tuois');
	}
}