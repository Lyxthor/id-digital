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
        Schema::create('document_requests', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['edit', 'create', 'delete']);
            $table->text('detail');
            $table->unsignedBigInteger('citizen_id');
            $table->enum('rt_approval_status', ['pending', 'accepted'])->default('pending');
            $table->enum('rw_approval_status', ['pending', 'accepted'])->default('pending');
            $table->enum('kelurahan_approval_status', ['pending', 'accepted'])->default('pending');

            $table->foreign('citizen_id')
            ->references('id')
            ->on('citizens')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_requests');
    }
};
