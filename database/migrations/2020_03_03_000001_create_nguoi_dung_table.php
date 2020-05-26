<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

use App\NguoiDung;
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
			$table->string('username', 191);
			$table->string('email', 191)->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password', 191);
			$table->string('quyenhan', 25)->default('farmer'); // admin, manager, officer, farmer
			$table->string('diachi', 191)->nullable();
			$table->string('sodienthoai', 191)->nullable();
			$table->tinyInteger('kichhoat')->default(1);
			$table->tinyInteger('khoa')->default(0);
			$table->rememberToken();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
		
		NguoiDung::create([
            'name' => 'Đoàn Thanh Nghị',
            'tendangnhap' => 'admin',
            'email' => 'dtnghi@agu.edu.vn',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
			'quyenhan' => 'admin',
        ]);
		
		NguoiDung::create([
            'name' => 'Nguyễn Hoàng Tùng',
            'tendangnhap' => 'manager',
            'email' => 'nhoangtung@agu.edu.vn',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
			'quyenhan' => 'manager',
        ]);
		
		NguoiDung::create([
            'name' => 'Lê Hoàng Anh',
            'tendangnhap' => 'officer',
            'email' => 'lhanh@agu.edu.vn',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
			'quyenhan' => 'officer',
        ]);
		
		NguoiDung::create([
            'name' => 'Nguyễn Minh Vi',
            'tendangnhap' => 'farmer',
            'email' => 'nmvi@agu.edu.vn',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
			'quyenhan' => 'farmer',
        ]);
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('nguoidung');
	}
}