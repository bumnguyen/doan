<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DangKy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dangky', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('DienThoai');
            $table->integer('idDichVu')->unsigned();
            $table->foreign('idDichVu')->references('id')->on('DichVu');
            $table->integer('idGoiDichVu')->unsigned();
            $table->foreign('idGoiDichVu')->references('id')->on('GoiDichVu');
            $table->date('NgaySinh');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        //
    }
}
