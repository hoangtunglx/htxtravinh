<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChinhSachNongNghiepTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chinhsachnongnghiep', function (Blueprint $table) {
			$table->id();
			$table->foreignId('hoptacxa_id')->constrained()->on('hoptacxa');
			$table->foreignId('nguoidung_id')->nullable()->constrained()->on('nguoidung');
			$table->string('tenchinhsach', 191);
			$table->string('sovanban', 50)->nullable();
			$table->text('tomtatnoidung')->nullable();
			$table->text('mota')->nullable();
			$table->string('taptin', 191)->nullable();
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
		Schema::dropIfExists('chinh_sach_nong_nghieps');
	}
}