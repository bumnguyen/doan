<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('idDichVu')->unsigned();
            $table->foreign('idDichVu')->references('id')->on('DichVu');
            $table->integer('idGoiDichVu')->unsigned();
            $table->foreign('idGoiDichVu')->references('id')->on('GoiDichVu');
            $table->string('Ten');
            $table->string('Hinh');
            $table->string('TenKhongDau');
            $table->double('Thu');
            $table->string('DienThoai');
            $table->date('NgaySinh');
            $table->date('NgayDangKy');
            $table->string('DiaChi');
            $table->date('BatDau');
            $table->date('KetThuc');
            $table->integer('ConLai');
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     *ss
     * @return void
     */
    public function down()
    {
        Schema::drop('khachhang');
    }
}
