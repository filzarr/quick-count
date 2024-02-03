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
        Schema::create('count_calegs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('caleg_id');
            $table->foreign('caleg_id')->references('id')->on('calegs')->onDelete('cascade');
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
        Schema::dropIfExists('count_calegs');
    }
};
