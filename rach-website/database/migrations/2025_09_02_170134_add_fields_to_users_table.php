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
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('workplace')->nullable();
            $table->string('position')->nullable();
            $table->string('academic_degree')->nullable();
            $table->enum('role', ['visitor', 'user', 'verified_user', 'admin'])->default('visitor');
            $table->timestamp('email_verified_at')->nullable()->change();
            $table->boolean('is_email_verified')->default(false);
            $table->timestamp('membership_expires_at')->nullable();
            $table->enum('membership_type', ['individual', 'organization'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone', 'city', 'workplace', 'position', 'academic_degree', 
                'role', 'is_email_verified', 'membership_expires_at', 'membership_type'
            ]);
        });
    }
};
