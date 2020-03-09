<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongNoTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('congno', function (Blueprint $table) {
			$table->id();
			$table->foreignId('nguoidung_id')->constrained()->on('nguoidung');
			$table->foreignId('donhang_id')->nullable()->constrained()->on('donhang');
			$table->foreignId('donthue_id')->nullable()->constrained()->on('donthue');
			$table->foreignId('muavu_id')->nullable()->constrained()->on('muavu');
			$table->float('sotienconno');
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
		Schema::dropIfExists('cong_nos');
	}
}