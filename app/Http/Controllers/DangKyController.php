<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use App\DichVu;
use App\GoiDichVu;
use App\ListLichSuGiaoDich;
use App\DangKy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class DangKyController extends Controller
{
     public function danhsach()
    {
      $data = DangKy::orderBy('Ten', 'asc')->paginate(5);;
      $dichvu = DichVu::all();
      $goidichvu = GoiDichVu::all();
      return view('admin.dangky.danhsach', ['data'=>$data, 'dichvu'=>$dichvu, 'goidichvu'=>$goidichvu]);
    }  
     public function getXoa($id){
          $dangky =  DangKy::find($id);
          $dangky->delete();
       return redirect('admin/dangky/danhsach')->with('thongbao', 'Xóa thành công');  
    }
    public function getSua($id){
    	$dichvu = DichVu::all();
    	$goidichvu = GoiDichVu::all();
        $dangky = DangKy::find($id);
        return view('admin.dangky.sua', ['dangky'=>$dangky,  'dichvu'=>$dichvu, 'goidichvu'=>$goidichvu]);
    }
    public function postSua(Request $request, $id){
    	$dangky =  DangKy::find($id);
        $dangky->delete();
        $khachhang =new KhachHang;  
        $ListLichSuGiaoDich = new  ListLichSuGiaoDich;
        $this->validate($request,
          [
              'Ten' =>'required:KhachHang,Ten|min:3|max:100'
          ],
          [
              'Ten.required'=>'Bạn nhập ngu vl chưa nhập tên dich vu',
              'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
          ]);
        $file = $request->file('Hinh'); //lấy file ảnh đó về
        $duoi = $file->getClientOriginalExtension('Hinh');//lấy 
        $ten = str_slug($request->Ten).$request->NgaySinh.'.'.$duoi; 
        $file->move('upload/khachhang',  $ten );
        $khachhang->Ten = $request->Ten;
        $khachhang->TenKhongDau = str_slug($request->Ten);
        $khachhang->idDichVu = $request->DichVu;
        $khachhang->idGoiDichVu = $request->GoiDichVu;
        $khachhang->Thu = $request->Thu;
        $khachhang->DienThoai = $request->DienThoai;
        $khachhang->Hinh= $ten ;
        $khachhang->NgaySinh = $request->NgaySinh;
        $khachhang->password = bcrypt($request->password);
        $khachhang->NgayDangKy = $request->NgayDangKy;
        $khachhang->DiaChi = $request->DiaChi;
        $khachhang->BatDau = $request->BatDau;
        $khachhang->KetThuc = $request->KetThuc;
        $khachhang->ConLai = $request->ConLai;
        //lisr lịch sử
        $ListLichSuGiaoDich->Ten = $request->Ten;
        $ListLichSuGiaoDich->TenKhongDau = str_slug($request->Ten);
        $ListLichSuGiaoDich->idDichVu = $request->DichVu;
        $ListLichSuGiaoDich->idGoiDichVu = $request->GoiDichVu;
        $ListLichSuGiaoDich->Thu = $request->Thu;
        $ListLichSuGiaoDich->DienThoai = $request->DienThoai;
        $ListLichSuGiaoDich->NgaySinh = $request->NgaySinh;
        $ListLichSuGiaoDich->Hinh= $ten ;
        $ListLichSuGiaoDich->NgayDangKy = $request->NgayDangKy;
        $ListLichSuGiaoDich->DiaChi = $request->DiaChi;
        $ListLichSuGiaoDich->BatDau = $request->BatDau;
        $ListLichSuGiaoDich->KetThuc = $request->KetThuc;
        $ListLichSuGiaoDich->ConLai = $request->ConLai;
        //lưu vào dâta
        $khachhang->save();   
        $ListLichSuGiaoDich->save(); 
      return redirect('admin/khachhang/danhsach')->with('thongbao', 'Thanh toán thành công');
    }
    public function postTimKiem(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $dangky = dangky::where('Ten', 'like', "%$tukhoa%")->take(30)->paginate(5);
        $dichvu = DichVu::all();
    	$goidichvu = GoiDichVu::all();
        return view('admin.dangky.danhsach', ['data'=>$dangky, 'tukhoa'=>$tukhoa,'dichvu'=>$dichvu, 'goidichvu'=>$goidichvu]); 
    }  
}
