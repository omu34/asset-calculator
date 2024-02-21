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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->constrained();
            $table->string('business_name')->nullable();
            $table->string('business_number')->nullable();
            $table->string('business_account_number')->nullable();
            $table->string('employee_job_id')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('employer_phone_number')->nullable();
            $table->string('dealer_name')->nullable();
            $table->string('dealer_phone_number')->nullable();
            $table->string('dealer_location')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('agent_phone_number')->nullable();
            $table->string('agent_location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
