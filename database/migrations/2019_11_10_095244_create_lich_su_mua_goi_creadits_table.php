<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichSuMuaGoiCreaditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_su_mua_goi_creadits', function (Blueprint $table) {
         $table->increments('id');
         $table->unsignedInteger('nguoi_choi_id');
         $table->unsignedInteger('goi_creadit_id');
         $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_chois');
         $table->foreign('goi_creadit_id')->references('id')->on('goi_creadits');
         $table->Integer('create');
         $table->Integer('so_tien');
         $table->timestamps();
         $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_su_mua_goi_creadits');
    }
}
