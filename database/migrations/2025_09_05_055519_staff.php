<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('emp_code', 50)->comment('Số Thẻ');
            $table->string('fullname', 100)->comment('HỌ VÀ TÊN');
            $table->string('nickname', 50)->nullable()->comment('Tên Hoa');
            $table->string('department', 100)->nullable()->comment('Bộ Phận');
            $table->string('position', 100)->nullable()->comment('Chức Vụ');
            $table->integer('join_date')->nullable()->comment('Ngày Vào Xưởng');
            $table->integer('contract_date')->nullable()->comment('Ngày ký hợp đồng');
            $table->integer('status')->nullable()->comment('Trạng thái');
            $table->integer('resign_date')->nullable()->comment('Ngày nghỉ việc');
            $table->string('tax_code', 50)->nullable()->comment('Mã số thuế');
            $table->integer('tax_issued_date')->nullable()->comment('Ngày cấp mã số thuế');
            $table->string('tax_issued_place', 100)->nullable()->comment('Nơi cấp thuế');
            $table->string('social_id', 50)->nullable()->comment('Số BHXH');
            $table->integer('insurance_start')->nullable()->comment('Thời gian tham gia BHXH');
            $table->string('ethnicity', 50)->nullable()->comment('Dân tộc');
            $table->string('gender', 10)->nullable()->comment('Giới tính');
            $table->integer('birth_year')->nullable()->comment('Năm sinh');
            $table->string('id_number', 50)->nullable()->comment('Căn cước công dân , giới tính');
            $table->integer('id_issued_date')->nullable()->comment('Ngày cấp căn cước công dân');
            $table->string('id_issued_place', 250)->nullable()->comment('Nơi cấp căn cước công dân');
            $table->string('province_origin', 250)->nullable()->comment('Tỉnh thường trú');
            $table->string('education', 100)->nullable()->comment('Trình độ văn hóa');
            $table->string('address_perm', 255)->nullable()->comment('Địa chỉ thường trú');
            $table->string('address_temp', 255)->nullable()->comment('Địa chỉ tạm trú');
            $table->text('note')->nullable()->comment('Ghi chú');
            $table->string('bank', 100)->nullable()->comment('Ngân hàng');
            $table->string('phone', 20)->nullable()->comment('Điện thoại');
            $table->string('birth_place', 255)->nullable()->comment('Địa chỉ khai sinh');
            $table->string('household', 255)->nullable()->comment('Hộ khẩu thường trú');
            $table->integer('dependents')->nullable()->comment('Người phụ thuộc');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
