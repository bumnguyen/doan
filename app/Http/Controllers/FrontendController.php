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
class FrontendController extends Controller
{
      public function index(){
      	$dichvu = DichVu::all();
    	$goidichvu = GoiDichVu::all();
        return view('frontend.index', ['dichvu'=>$dichvu], ['goidichvu'=>$goidichvu]);
      }
      public function dangky(Request $request)
      {
      		$this->validate($request,
          [
              'Ten' =>'required|unique:DangKy,Ten|min:3|max:100',
              'Sdt' =>'required|unique:DangKy,Ten|min:3|max:100',
              'NgaySinh' =>'required|unique:DangKy,Ten|min:3|max:100'

          ],
          [
              'Ten.required'=>'Bạn chưa nhập tên dich vu',
              'Sdt.required'=>'Bạn chưa nhập Sdt',
              'NgaySinh.required'=>'Bạn chưa nhập Ngày Sinh',
              'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha mài'
          ]);
      		$data = new DangKy();
      		$data->Ten = $request->Ten;
      		$data->DienThoai = $request->Sdt;
      		$data->NgaySinh =$request->NgaySinh;
      		$data->idDichVu = $request->DichVu;
      		$data->idGoiDichVu = $request->GoiDichVu;
      		$data->save();

      		return redirect('frontend/index#contact-section')->with('thongbao', 'Đăng Ký Thành Công');

      }	
      public function dangnhap()
      {
      	return view('frontend.dangnhap');
      }	
      public function postdangnhap(Request $request)
      {
           $this->validate($request,
          [
              'email' =>'required|min:3|max:100',
              'password' => 'required|min:3|max:100'
          ],
          [
              'email.required'=>'Bạn chưa nhập email',  
              'password.required' => 'Bạn chưa nhập password',
              'password.min'=>'password phải dài từ 3 đến 100 kí tự nha mài',
              'password.max'=>'password phải dài từ 3 đến 100 kí tự nha mài',
              'email.min'=>'password phải dài từ 3 đến 100 kí tự nha mài',
              'email.max'=>'password phải dài từ 3 đến 100 kí tự nha mài'
          ]);
      if (Auth::attempt(['DienThoai' => $request->email, 'password' => $request->password]))  
      {
    // The user is active, not suspended, and exists.
        // return redirect('frontend/thongtin');
        echo "Đã oke";
    }
    else
    {

      return redirect('frontend/dangnhap')->with('thongbao', 'Đăng nhập không thành công');
    }
    }  
    public function thongtin()
    {
      return view('frontend.thongtin');
    } 
   
}
