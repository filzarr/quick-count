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
        Schema::create('data_pemilihs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tps_id');
            $table->foreign('tps_id')->references('id')->on('tps')->onDelete('cascade');
            $table->enum('kategori', ['pemilih', 'dpt', 'dptb', 'dpk', 'suara-sah', 'suara-tidak-sah']);
            $table->integer('suara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pemilihs');
    }
};
