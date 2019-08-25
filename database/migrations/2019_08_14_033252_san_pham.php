<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_san_pham');
            $table->integer('gia');
            $table->string('anh')->nullable();
            $table->integer('so_luong');
            $table->string('kieu_dang');
            $table->string('chat_lieu');
            $table->string('mau_sac');
            $table->string('size');
            $table->string('mo_ta');
            $table->string('tinh_trang');
            $table->integer('id_loai')->unsigned();
            $table->foreign('id_loai')->references('id')->on('loai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
}
