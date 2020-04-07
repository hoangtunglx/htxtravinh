<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeHoachSanXuatThuaDatTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kehoachsanxuat_thuadat', function (Blueprint $table) {
			$table->id();
			$table->foreignId('kehoachsanxuat_id')->constrained()->on('kehoachsanxuat');
			$table->foreignId('thuadat_id')->constrained()->on('thuadat');
			$table->float('dientich')->nullable();
			$table->tinyInteger('duyet')->default(0);
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
		Schema::dropIfExists('kehoachsanxuat_thuadat');
	}
}