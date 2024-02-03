<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW count_partai_view AS
            SELECT partais.id AS partai_id, partais.partai AS partai, COALESCE(SUM(count_partais.suara), 0) AS suara 
            FROM partais 
            LEFT JOIN count_partais ON partais.id = count_partais.partai_id 
            GROUP BY partais.id, partais.partai ORDER BY partais.id"
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS count_partai_view");
    }

};
