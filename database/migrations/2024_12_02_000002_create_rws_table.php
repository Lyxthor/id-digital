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
        Schema::create('rws', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('kelurahan_id');
            $table->foreign('kelurahan_id')
            ->references('id')
            ->on('kelurahans')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->unique(['name', 'kelurahan_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rws');
    }
};
