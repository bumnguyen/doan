<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\GoiDichVu;
class GoiDichVuController extends Controller
{
   	  public function getDanhSach(){
        $data = GoiDichVu::All(); //lấy tất cả dữ liệu 
        return view('admin.goidichvu.danhsach',['goidichvu' => $data]);
    }
    public function getSua($id){
        $goidichvu = GoiDichVu::find($id);
        return view('admin.goidichvu.sua', ['goidichvu'=>$goidichvu]);
    }
     public function postSua(Request $request, $id){
        $goidichvu = GoiDichVu::find($id);	
        $this->validate($request,
          [
              'Ten' =>'required|unique:DichVu,Ten|min:3|max:100'
          ],
          [
              'Ten.required'=>'Bạn nhập ngu vl chưa nhập tên dich vu',
              'Ten.unique'=>'Đã bị trùng',
              'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
          ]);
        $goidichvu->Ten = $request->Ten;
        $goidichvu->TenKhongDau = str_slug($request->Ten);
        $goidichvu->save();

      return redirect('admin/goidichvu/sua/'.$id)->with('thongbao', 'Thêm thành công');
    }




    public function getThem(){
      return view('admin.goidichvu.them');
    }

    public function postThem(Request $request){
      $this->validate($request, 
         [
            'Ten' => 'required|min:3|max:100' 
            // required là đk chưa điện thông tin
         ],[
            'Ten.required'=>'Bạn nhập ngu vl chưa nhập tên dich vu',
            'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
            'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
         ]);
      $goidichvu = new GoiDichVu;
      $goidichvu->Ten = $request->Ten;
      $goidichvu->TenKhongDau = str_slug($request->Ten);
      $goidichvu->save();

      return redirect('admin/goidichvu/danhsach')->with('thongbao', 'Thêm thành công');
    }


      public function getXoa($id){
          $goidichvu = GoiDichVu::find($id);
          $goidichvu->delete();
       return redirect('admin/goidichvu/danhsach')->with('thongbao', 'Xóa thành công');  
    }
}
