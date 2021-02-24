<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanPhamThongSoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham_thong_so', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sanpham_id')->unsigned()->index();
            $table->foreign('sanpham_id')->references('id')->on('san_pham')->onDelete('cascade');
            $table->unsignedBigInteger('thongso_id')->unsigned();
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
        Schema::dropIfExists('san_pham_thong_so');
    }
}
