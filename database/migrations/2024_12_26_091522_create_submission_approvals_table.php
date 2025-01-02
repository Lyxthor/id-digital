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
        Schema::create('submission_approvals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citizen_id');
            $table->unsignedBigInteger('submission_id');

            $table->foreign('citizen_id')
            ->references('id')
            ->on('citizens')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->foreign('submission_id')
            ->references('id')
            ->on('submissions')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->unique(['citizen_id', 'submission_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submission_approvals');
    }
};
