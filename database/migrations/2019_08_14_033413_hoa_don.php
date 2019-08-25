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
            $table->boolean('tinh_trang');
            $table->integer('id_gio_hang_chi_tiet')->unsigned();
            $table->string('ho_ten');
            $table->integer('so_dien_thoai');
            $table->string('email');
            $table->string('dia_chi');
            $table->string('tinh_thanh');
            $table->string('ghi_chu');
            $table->foreign('id_gio_hang_chi_tiet')->references('id')->on('gio_hang_chi_tiet');
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
       Schema::dropIfExists('hoa_don');
    }
}
