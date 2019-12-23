<?php

use Illuminate\Support\Facades\Schema;  
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('listsanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('TongTien');
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
        Schema::drop('listsanpham');
    }
}
