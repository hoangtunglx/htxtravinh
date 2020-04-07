<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSauBenhTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saubenh', function (Blueprint $table) {
			$table->id();
			$table->string('tensaubenh', 191);
			$table->string('dacdiem', 191)->nullable();
			$table->string('caytrongtancong', 191)->nullable();
			$table->string('dauhieu', 191)->nullable();
			$table->string('bienphapphongtranh', 191)->nullable();
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
		Schema::dropIfExists('saubenh');
	}
}