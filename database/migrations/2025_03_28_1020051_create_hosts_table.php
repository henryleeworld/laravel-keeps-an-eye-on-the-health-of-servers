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
        Schema::create('hosts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ssh_user')->nullable();
            $table->integer('port')->nullable();
            $table->string('ip')->nullable();
            $table->json('custom_properties')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('hosts');
    }
};
