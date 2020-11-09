<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UbahTableVitamin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('vitamin', function (Blueprint $table) {
           $table->renameColumn('nama_vitamin', 'nama');
           $table->dropColumn('ukuran');
           $table->date('tgl_prod');
           $table->string('supplier');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
