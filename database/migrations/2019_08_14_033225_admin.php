<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_admin',50);
            $table->string('password',50);
            $table->string('email',50)->unique();
            $table->string('dia_chi',100);
            $table->integer('sdt');
            $table->binary('gioi_tinh');
            $table->date('ngay_sinh');
            $table->binary('ma_quyen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Admin');
    }
}
