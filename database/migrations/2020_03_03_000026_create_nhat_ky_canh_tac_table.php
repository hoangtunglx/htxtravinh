<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhatKyCanhTacTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhatkycanhtac', function (Blueprint $table) {
			$table->id();
			$table->foreignId('socanhtac_id')->constrained()->on('socanhtac');
			$table->foreignId('giaidoanquytrinh_id')->constrained()->on('giaidoanquytrinh');
			$table->date('ngaythuchien');
			$table->string('nguoithuchien', 191)->nullable();
			$table->text('thongtin')->nullable();
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
		Schema::dropIfExists('nhat_ky_canh_tacs');
	}
}