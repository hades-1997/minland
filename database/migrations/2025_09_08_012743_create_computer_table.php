<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('computer', function (Blueprint $table) {
            $table->id();
            $table->string('department', 100)->comment('部门 - Bộ phận');
            $table->string('fullname', 100)->comment('姓名 - Họ và Tên');
            $table->string('emp_code', 50)->comment('编号 - Mã số');
            $table->string('username', 50)->comment('用户名 - Tên người dùng');
            $table->string('device_model', 100)->comment('主机型号 - Cấu hình (máy)');
            $table->string('cpu', 100)->comment('CPU');
            $table->string('hard_disk', 100)->comment('硬盘 - Ổ cứng');
            $table->string('ram', 50)->comment('内存 - RAM');
            $table->string('monitor', 100)->comment('显示器 - Màn hình');
            $table->string('os', 100)->comment('操作系统 - Hệ điều hành');
            $table->string('office_version', 50)->comment('office版本 - Phiên bản Office');
            $table->string('mail_client', 50)->nullable()->comment('邮箱客户端 - Ứng dụng mail');
            $table->string('mac_address', 50)->comment('MAC标识 - Địa chỉ MAC');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computer');
    }
};
