<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ThongTinController extends Controller
{
    public function getThongTin(){
    	$thongtin = DB::table('khachhang')->count();
    	$thongtin2 = DB::table('dichvu')->count();
    	$thongtin3 = DB::table('goidichvu')->count();
    	$thongtin4 = DB::table('sanpham')->count();
    	return view('admin.thongtin', ['thongtin'=>$thongtin, 'thongtin2'=>$thongtin2, 'thongtin3'=>$thongtin3, 'thongtin4'=>$thongtin4]);
  	}
}
