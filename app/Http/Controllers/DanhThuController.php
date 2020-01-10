<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use App\DichVu;
use App\GoiDichVu;
use App\ListLichSuGiaoDich;
use Illuminate\Support\Facades\DB;
class DanhThuController extends Controller
{
     public function getTheoNgay(){
     	$data = ListLichSuGiaoDich::where('idDichVu','=',0)->paginate(5); //lấy tất cả dữ liệu 
     	$tongDanhThu =  DB::table('ListLichSuGiaoDich')->sum('Thu');
     	$tongSoDichVu =  DB::table('ListLichSuGiaoDich')->count();
     	$yoga  = DB::table('ListLichSuGiaoDich')
                ->where('idDichVu','=',1)
                ->sum('Thu');
        $aerobic  = DB::table('ListLichSuGiaoDich')
                ->where('idDichVu','=',2)
                ->sum('Thu');
        $boxing  = DB::table('ListLichSuGiaoDich')
                ->where('idDichVu','=',3)
                ->sum('Thu');
        $zumba  = DB::table('ListLichSuGiaoDich')
                ->where('idDichVu','=',4)
                ->sum('Thu');        
        $dichvu = DB::table('dichvu')->count();

        $sogoiyoga = DB::table('ListLichSuGiaoDich')->where('idDichVu','=',1)->count();
        $sogoiaerobic = DB::table('ListLichSuGiaoDich')->where('idDichVu','=',2)->count();
        $sogoizumba = DB::table('ListLichSuGiaoDich')->where('idDichVu','=',3)->count();
        $sogoiboxing = DB::table('ListLichSuGiaoDich')->where('idDichVu','=',4)->count();
        return view('admin.danhthu.danhthungay',
        	['data' => $data, 
        	'tongDanhThu'=>$tongDanhThu, 
        	'yoga'=> $yoga,
        	'sogoiyoga'=> $sogoiyoga, 
        	'aerobic'=> $aerobic,
        	'sogoiaerobic'=> $sogoiaerobic,
        	'boxing'=> $boxing,
        	'sogoiboxing'=> $sogoiboxing,
        	'zumba'=> $zumba,
        	'sogoizumba'=> $sogoizumba,
        	'dichvu'=> $dichvu, 
        	'tongsodichvu'=> $tongSoDichVu]);

    }
    public function postTheoNgay(Request $request){
     	$data = KhachHang::where('BatDau','=',$request->hinh)->paginate(5);
        return view('admin.danhthu.danhthungay',['khachhang'=>$data]);
    }
    public function getDanhSach($id){
     	$data = ListLichSuGiaoDich::where('idDichVu','=',$id)->paginate(5);
        $tongDanhThu =  DB::table('ListLichSuGiaoDich')->sum('Thu');
        $tongSoDichVu =  DB::table('ListLichSuGiaoDich')->count();
        $yoga  = DB::table('ListLichSuGiaoDich')
                ->where('idDichVu','=',1)
                ->sum('Thu');
        $aerobic  = DB::table('ListLichSuGiaoDich')
                ->where('idDichVu','=',2)
                ->sum('Thu');
        $boxing  = DB::table('ListLichSuGiaoDich')
                ->where('idDichVu','=',3)
                ->sum('Thu');
        $zumba  = DB::table('ListLichSuGiaoDich')
                ->where('idDichVu','=',4)
                ->sum('Thu');        
        $dichvu = DB::table('dichvu')->count();

        $sogoiyoga = DB::table('ListLichSuGiaoDich')->where('idDichVu','=',1)->count();
        $sogoiaerobic = DB::table('ListLichSuGiaoDich')->where('idDichVu','=',2)->count();
        $sogoizumba = DB::table('ListLichSuGiaoDich')->where('idDichVu','=',3)->count();
        $sogoiboxing = DB::table('ListLichSuGiaoDich')->where('idDichVu','=',4)->count();
        return view('admin.danhthu.danhthungay',
            ['data' => $data, 
            'tongDanhThu'=>$tongDanhThu, 
            'yoga'=> $yoga,
            'sogoiyoga'=> $sogoiyoga, 
            'aerobic'=> $aerobic,
            'sogoiaerobic'=> $sogoiaerobic,
            'boxing'=> $boxing,
            'sogoiboxing'=> $sogoiboxing,
            'zumba'=> $zumba,
            'sogoizumba'=> $sogoizumba,
            'dichvu'=> $dichvu, 
            'tongsodichvu'=> $tongSoDichVu]);
    }
  
}
