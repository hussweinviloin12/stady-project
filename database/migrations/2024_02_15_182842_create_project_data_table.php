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
        Schema::create('project_data', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->text('project_goal')->nullable();
            $table->text('project_features')->nullable();
            $table->text('performance_measure')->nullable();
            $table->integer('new_users_monthly')->nullable();
            $table->integer('tasks_added_monthly')->nullable();
            $table->integer('annual_users')->nullable();
            $table->integer('monthly_tasks')->nullable();
            $table->text('recommendations')->nullable();
            $table->text('risk_assessment')->nullable();
            $table->date('completion_date')->nullable();
            $table->text('supported_devices')->nullable();
            $table->enum('payment_status', ['paid', 'free'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_data');
    }
};
