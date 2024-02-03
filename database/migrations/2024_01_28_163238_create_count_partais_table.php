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
        Schema::create('count_partais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partai_id');
            $table->foreign('partai_id')->references('id')->on('partais')->onDelete('cascade');
            $table->integer('suara');
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
        Schema::dropIfExists('count_partais');
    }
};
