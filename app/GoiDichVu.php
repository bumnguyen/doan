<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoiDichVu extends Model
{
    protected $table = "GoiDichVu";
    public function khachhang(){
    	return $this->hasMany('App\KhachHang', 'idGoiDichVu', 'id');
	}
	public function listlichsugiaodich(){
    	return $this->hasMany('App\KhachHang', 'idGoiDichVu', 'id');
	}
}
