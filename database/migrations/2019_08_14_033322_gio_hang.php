<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GioHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gio_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('so_luong');
            $table->integer('id_san_pham')->unsigned();
            $table->foreign('id_san_pham')->references('id')->on('san_pham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('gio_hang');
    }
}
