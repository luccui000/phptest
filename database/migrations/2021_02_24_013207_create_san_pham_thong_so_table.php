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
            $table->integer('san_pham_id')->unsigned();
            $table->foreign('san_pham_id')->references('id')->on('san_pham');
            $table->integer('thong_so_id')->unsigned();
            $table->foreign('thong_so_id')->references('id')->on('thong_so'); 
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
