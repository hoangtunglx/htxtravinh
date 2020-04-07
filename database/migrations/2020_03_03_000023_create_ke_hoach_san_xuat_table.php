<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeHoachSanXuatTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kehoachsanxuat', function (Blueprint $table) {
			$table->id();
			$table->foreignId('muavu_id')->constrained()->on('muavu');
			$table->foreignId('vungnguyenlieu_id')->constrained()->on('vungnguyenlieu');
			$table->date('thoigianbatdau');
			$table->date('thoigianketthuc');
			$table->integer('tongdientichsx')->nullable();
			$table->integer('nangsuatdukien')->nullable();
			$table->integer('tongsanluongdukien')->nullable();
			$table->integer('tongsohothamgia')->nullable();
			$table->text('thongtinkhac')->nullable();
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
		Schema::dropIfExists('kehoachsanxuat');
	}
}