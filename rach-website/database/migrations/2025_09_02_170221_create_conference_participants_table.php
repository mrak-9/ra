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
        Schema::create('conference_participants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conference_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('event_date');
            $table->enum('format', ['online', 'offline', 'hybrid']);
            $table->boolean('has_membership')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->unique(['conference_id', 'user_id', 'event_date', 'format'], 'conf_participants_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_participants');
    }
};
