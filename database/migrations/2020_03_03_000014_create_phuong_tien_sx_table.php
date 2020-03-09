<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhuongTienSXTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phuongtiensx', function (Blueprint $table) {
			$table->id();
			$table->foreignId('hoptacxa_id')->constrained()->on('hoptacxa');
			$table->foreignId('loaiphuongtien_id')->constrained()->on('loaiphuongtien');
			$table->string('masophuongtien', 25);
			$table->string('tenphuongtien', 191);
			$table->date('ngaymua');
			$table->string('nhasanxuat', 191)->nullable();
			$table->year('namsanxuat')->nullable();
			$table->string('nuocsanxuat', 50)->nullable();
			$table->string('dientich', 50)->nullable();
			$table->string('vitri', 191)->nullable();
			$table->string('mota', 191)->nullable();
			$table->string('trangthai', 191)->nullable();
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
		Schema::dropIfExists('phuong_tien_s_x_e_s');
	}
}