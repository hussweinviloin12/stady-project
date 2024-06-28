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
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->decimal('general_costs', 10, 2)->default(0); // التكاليف العامة
            $table->decimal('labor_costs', 10, 2)->default(0); // تكاليف العمالة
            $table->decimal('fixed_costs', 10, 2)->default(0); // تكاليف الثابتة
            $table->decimal('advertising_revenue', 10, 2)->default(0); // الإيرادات من بيع الإعلانات
            $table->date('project_start_date'); // تاريخ بداية المشروع
            $table->date('project_end_date')->nullable(); // تاريخ نهاية المشروع
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costs');
    }
};
