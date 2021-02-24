<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongSoChiTietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_so_chi_tiet', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('thonso_id')->index();
            $table->foreign('thonso_id')->references('id')->on('thong_so')->onDelete('cascade');
            $table->unsignedBigInteger('chitiet_id');
            $table->foreign('chitiet_id')->references('id')->on('chi_tiet')->onDelete('cascade'); 
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
        Schema::dropIfExists('thong_so_chi_tiet');
    }
}
