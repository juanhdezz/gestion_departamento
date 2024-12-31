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
        Schema::create('professors', function (Blueprint $table) {
            $table->id();
            $table->string('dni')->unique();
            $table->string('full_name')->unique();
            $table->string('short_name')->nullable();
            $table->string('email')->unique();
            $table->string('login')->unique();
            $table->string('password');
            $table->string('user_type')->default('Professor');
            $table->string('office')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('personal_phone')->nullable();
            $table->string('copier_uid')->nullable();
            $table->string('copier_password')->nullable();
            $table->boolean('teaches')->default(false);
            $table->boolean('is_current_member')->default(false);
            $table->boolean('is_council_member')->default(false);
            $table->boolean('is_total_member')->default(false);
            $table->timestamp('last_access')->default('2024-07-25 13:45:00');
            $table->string('group')->nullable();
            $table->string('category')->nullable();
            $table->string('website')->nullable();
            $table->integer('teaching_order')->nullable();
            $table->text('scholarship_history')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
