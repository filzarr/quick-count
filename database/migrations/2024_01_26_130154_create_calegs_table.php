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
        Schema::create('calegs', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('namacaleg');
            $table->unsignedBigInteger('partai_id');
            $table->foreign('partai_id')->references('id')->on('partais')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calegs');
    }
};
