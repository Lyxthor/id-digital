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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('doc_path');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('citizen_id');
            $table->foreign('type_id')
            ->references('id')
            ->on('document_types')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('citizen_id')
            ->references('id')
            ->on('citizens')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unique(['citizen_id', 'type_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
