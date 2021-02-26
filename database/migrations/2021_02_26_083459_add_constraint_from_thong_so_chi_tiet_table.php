<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraintFromThongSoChiTietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_so_chi_tiet', function (Blueprint $table) {
            $table->integer('thong_so_id')->unsigned();
            $table->foreign('thong_so_id')->references('id')->on('thong_so');
            $table->integer('chi_tiet_id')->unsigned();
            $table->foreign('chi_tiet_id')->references('id')->on('chi_tiet'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thong_so_chi_tiet', function (Blueprint $table) {
            //
        });
    }
}
