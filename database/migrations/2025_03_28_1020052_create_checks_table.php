<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('host_id')->constrained()->onDelete('cascade');
            $table->string('type');
            $table->string('status')->nullable();
            $table->boolean('enabled')->default(true);
            $table->text('last_run_message')->nullable();
            $table->json('last_run_output')->nullable();
            $table->timestamp('last_ran_at')->nullable();
            $table->integer('next_run_in_minutes')->nullable();
            $table->timestamp('started_throttling_failing_notifications_at')->nullable();
            $table->json('custom_properties')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('checks');
    }
};
