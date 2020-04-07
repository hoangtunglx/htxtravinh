<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhatKyCanhTacChiTietTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nhatkycanhtac_chitiet', function (Blueprint $table) {
			$table->id();
			$table->foreignId('nhatkycanhtac_id')->constrained()->on('nhatkycanhtac');
			$table->foreignId('vattu_id')->nullable()->constrained()->on('vattu');
			$table->foreignId('phuongtiensx_id')->nullable()->constrained()->on('phuongtiensx');
			$table->text('tenvattuphuongtien')->nullable();
			$table->integer('dongia')->nullable();
			$table->integer('soluong')->nullable()->default(1);
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
		Schema::dropIfExists('nhatkycanhtac_chitiet');
	}
}