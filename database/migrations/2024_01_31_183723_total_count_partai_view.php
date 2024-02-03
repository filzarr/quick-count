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
        DB::statement(
            "
            CREATE VIEW total_count_partai_view AS
            SELECT count_partai_view.partai_id, count_partai_view.partai, 
            count_partai_view.suara + count_partai_base_caleg_view.suara as TotalSuara 
            FROM count_partai_view 
            LEFT JOIN count_partai_base_caleg_view ON count_partai_view.partai_id = count_partai_base_caleg_view.partai_id 
            GROUP BY count_partai_view.partai_id;
            "
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS total_count_partai_view");
    }
};
