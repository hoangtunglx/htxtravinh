<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThuaDatTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thuadat', function (Blueprint $table) {
			$table->id();
			$table->foreignId('nguoidung_id')->constrained()->on('nguoidung');
			$table->string('tenthuadat', 191);
			$table->string('tobando', 50)->nullable();
			$table->text('vitri')->nullable();
			$table->float('dientich')->nullable();
			$table->string('dacdiemthonhuong', 191)->nullable();
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
		Schema::dropIfExists('thuadat');
	}
}