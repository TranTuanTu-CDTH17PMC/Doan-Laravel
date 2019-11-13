<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCauHoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hois', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cau_hoi');
            $table->string('dap_an_a');
            $table->string('dap_an_b');
            $table->string('dap_an_c');
            $table->string('dap_an_d');
            $table->string('dap_an_dung');
            $table->unsignedInteger('linh_vuc_id');
            $table->foreign('linh_vuc_id')->references('id')->on('linh_vucs');
            $table->SoftDeletes();

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
        Schema::dropIfExists('cau_hois');
    }
}
