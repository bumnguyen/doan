<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\DichVu;
class DichVuController extends Controller
{

    public function getDanhSach(){
        $data = DichVu::All(); //lấy tất cả dữ liệu 
        return view('admin.dichvu.danhsach',['dichvu' => $data]);
    }
    public function getSua($id){
        $dichvu = DichVu::find($id);
        return view('admin.dichvu.sua', ['dichvu'=>$dichvu]);
    }
     public function postSua(Request $request, $id){
        $dichvu = DichVu::find($id);
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
        $dichvu->Ten = $request->Ten;
        $dichvu->TenKhongDau = str_slug($request->Ten);
        $dichvu->save();

      return redirect('admin/dichvu/sua/'.$id)->with('thongbao', 'Thêm thành công');
    }

    public function getThem(){
      return view('admin.dichvu.them');
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
      $dichvu = new DichVu;
      $dichvu->Ten = $request->Ten;
      $dichvu->TenKhongDau = str_slug($request->Ten);
      $dichvu->save();

      return redirect('admin/dichvu/danhsach')->with('thongbao', 'Thêm thành công');
    }


      public function getXoa($id){
          $dichvu = dichvu::find($id);
          $dichvu->delete();
       return redirect('admin/dichvu/danhsach')->with('thongbao', 'Xóa thành công');  
    }
}
 