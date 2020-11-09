<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTableVitamin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('vitamin', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('nama_vitamin');
           $table->integer('harga');
           $table->string('jenis');
           $table->string('fungsi');
           $table->string('ukuran');
           $table->date('tgl_exp');
           $table->timestamps();
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
