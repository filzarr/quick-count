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
        DB::statement("
        CREATE VIEW count_partai_base_caleg_view AS
        SELECT partais.id AS partai_id, partais.partai AS partai, COALESCE(SUM(count_calegs.suara), 0) AS suara 
        FROM partais 
        LEFT JOIN calegs ON partais.id = calegs.partai_id 
        LEFT JOIN count_calegs ON calegs.id = count_calegs.caleg_id 
        GROUP BY partais.id, partais.partai ORDER BY partais.id;
    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS count_partai_base_caleg_view");
    }
};
