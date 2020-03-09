<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVatTuTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vattu', function (Blueprint $table) {
			$table->id();
			$table->foreignId('loaivattu_id')->constrained()->on('loaivattu');
			$table->foreignId('hoptacxa_id')->constrained()->on('hoptacxa');
			$table->string('solo', 50)->nullable();
			$table->string('tenvattu', 191);
			$table->tinyInteger('loai')->default(1);
			$table->string('donvitinh', 50);
			$table->date('ngaynhap');
			$table->integer('soluong');
			$table->float('dongianhap');
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
		Schema::dropIfExists('vat_tus');
	}
}