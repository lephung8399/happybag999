<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cmt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmt', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ngay_cmt');
            $table->string('noi_dung',200);
            $table->integer('danh_gia');
            $table->integer('id_user')->unsigned();
            $table->integer('id_san_pham')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
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
       Schema::dropIfExists('cmt');
    }
}
