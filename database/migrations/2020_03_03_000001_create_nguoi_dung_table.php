<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiDungTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nguoidung', function (Blueprint $table) {
			$table->id();
			$table->foreignId('hoptacxa_id')->nullable()->constrained()->on('hoptacxa');
			$table->string('name', 100);
			$table->string('tendangnhap', 191);
			$table->string('email', 191)->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password', 191);
			$table->string('quyenhan', 25)->default('nongdan'); // quantrivien, canboqlhtx, canbohtx, nongdan
			$table->string('hoten', 50)->nullable();
			$table->string('diachi', 191)->nullable();
			$table->string('sodienthoai', 191)->nullable();
			$table->tinyInteger('kichhoat')->default(1);
			$table->tinyInteger('khoa')->default(0);
			$table->rememberToken();
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
		Schema::dropIfExists('nguoi_dungs');
	}
}