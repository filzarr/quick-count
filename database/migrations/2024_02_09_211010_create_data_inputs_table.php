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
        Schema::create('data_inputs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('noHp');
            $table->unsignedBigInteger('tps_id');
            $table->foreign('tps_id')->references('id')->on('tps')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_inputs');
    }
};
