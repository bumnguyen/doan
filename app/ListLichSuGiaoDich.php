<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListLichSuGiaoDich extends Model
{
	protected $table = "ListLichSuGiaoDich";
	 public function dichvu(){
    	return $this->belongsTo('App\DichVu', 'idDichVu', 'id');
    	}
     public function goidichvu(){
    	return $this->belongsTo('App\GoiDichVu', 'idGoiDichVu', 'id');
    	}
}
