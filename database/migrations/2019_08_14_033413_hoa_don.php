<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ngay_dat_hang');
            $table->binary('tinh_trang');
            $table->integer('tong_tien');
            $table->integer('id_gio_hang_chi_tiet')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_gio_hang_chi_tiet')->references('id')->on('gio_hang_chi_tiet');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('hoa_don');
    }
}
