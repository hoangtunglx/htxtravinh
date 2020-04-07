<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThuocBVTVTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thuocbvtv', function (Blueprint $table) {
			$table->id();
			$table->foreignId('loaithuocbvtv_id')->constrained()->on('loaithuocbvtv');
			$table->string('tenthuocbvtv', 191);
			$table->string('mucdich', 191)->nullable();
			$table->string('nguongoc', 191)->nullable();
			$table->string('thanhphanhamluong', 191)->nullable();
			$table->string('nhacungcap', 191)->nullable();
			$table->string('mota', 191)->nullable();
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
		Schema::dropIfExists('thuocbvtv');
	}
}