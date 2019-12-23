<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GoiDichVu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
      public function up()
    {
        Schema::create('goidichvu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('TenKhongDau');
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
         Schema::drop('goidichvu');
    }
}
