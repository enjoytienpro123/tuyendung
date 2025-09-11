<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('vieclams', function (Blueprint $table) {
        $table->id();
        $table->string('title');                    // Tiêu đề việc làm
        $table->string('company');                  // Tên công ty
        $table->string('logo')->nullable();         // Logo công ty (URL hoặc path)
        $table->text('description');                // Mô tả công việc
        $table->text('requirements');               // Yêu cầu ứng viên
        $table->text('benefits');                   // Quyền lợi
        $table->text('company_info');               // Thông tin công ty
        $table->string('location');                 // Địa điểm
        $table->decimal('salary_min', 10, 2);       // Lương tối thiểu
        $table->decimal('salary_max', 10, 2);       // Lương tối đa
        $table->string('type');                     // Full-time, Part-time, Remote...
        $table->date('deadline');                   // Hạn nộp hồ sơ
        $table->boolean('is_active')->default(true); // Trạng thái hiển thị
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vieclams');
    }
};
