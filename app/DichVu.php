<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table = "DichVu";

    public function khachhang(){
    	return $this->hasMany('App\KhachHang', 'idDichVu', 'id');
	}
    public function listlichsugiaodich(){
    	return $this->hasMany('App\KhachHang', 'idGoiDichVu', 'id');
	}
}
