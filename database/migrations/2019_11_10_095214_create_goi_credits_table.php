<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoiCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goi_credits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_goi');
            $table->unsignedInteger('credit');
            $table->unsignedInteger('so_tien');
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
        Schema::dropIfExists('goi_credits');
    }
}
