<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinMoiTruongTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thongtinmoitruong', function (Blueprint $table) {
			$table->id();
			$table->foreignId('thuadat_id')->constrained()->on('thuadat');
			$table->foreignId('nguoidung_id')->constrained()->on('nguoidung');
			$table->float('nhietdo');
			$table->float('doamkhongkhi');
			$table->float('doamdat')->nullable();
			$table->float('doman')->nullable();
			$table->float('mucnuoc')->nullable();
			$table->float('doph')->nullable();
			$table->string('tinhtrang', 191)->nullable();
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
		Schema::dropIfExists('thongtinmoitruong');
	}
}