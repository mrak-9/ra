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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('registration_opens_at');
            $table->date('starts_at');
            $table->date('ends_at');
            $table->string('location')->nullable();
            $table->string('conference_type');
            $table->longText('announcement');
            $table->longText('description');
            $table->longText('post_release')->nullable();
            $table->json('important_dates')->nullable();
            $table->json('event_days')->nullable();
            $table->json('materials')->nullable();
            $table->enum('status', ['draft', 'registration_open', 'registration_closed', 'completed'])->default('draft');
            $table->boolean('requires_membership')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences');
    }
};
