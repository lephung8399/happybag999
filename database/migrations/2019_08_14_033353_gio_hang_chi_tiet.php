<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GioHangChiTiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gio_hang_chi_tiet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tong_tien')->nullable();
            $table->boolean('tinh_trang');
            $table->integer('so_san_pham');
            $table->integer('id_gio_hang')->unsigned();
            $table->foreign('id_gio_hang')->references('id')->on('gio_hang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('gio_hang_chi_tiet');
    }
}
