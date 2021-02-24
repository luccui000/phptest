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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chitiet_id')->index();
            $table->foreign('chitiet_id')->references('id')->on('chi_tiet')->onDelete('cascade');
            $table->unsignedBigInteger('thongso_id');
            $table->foreign('thongso_id')->references('id')->on('thong_so')->onDelete('cascade');
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
