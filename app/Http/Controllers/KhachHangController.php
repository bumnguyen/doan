<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
use App\DichVu;
use App\GoiDichVu;
use App\ListLichSuGiaoDich;
use Illuminate\Support\Facades\DB;
class KhachHangController extends Controller
{
    public function getDanhSach(){
        $data = KhachHang::orderBy('Ten', 'asc')->paginate(5); //lấy tất cả dữ liệu 
        return view('admin.khachhang.danhsach',['khachhang' => $data]);
    }
    public function getSua($id){
    	$dichvu = DichVu::all();
    	$goidichvu = GoiDichVu::all();
        $khachhang = KhachHang::find($id);
        return view('admin.khachhang.sua', ['khachhang'=>$khachhang,  'dichvu'=>$dichvu, 'goidichvu'=>$goidichvu]);
    }
     public function postSua(Request $request, $id){
        $khachhang = KhachHang::find($id);	

        $this->validate($request,
          [
              'Ten' =>'required:KhachHang,Ten|min:3|max:100',
              'DienThoai'=>'required|unique:KhachHang'
          ],
          [
              'Ten.required'=>'Bạn nhập ngu vl chưa nhập tên dich vu',
              'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'DienThoai.unique'=>'Đã bị trùng'
          ]);
        $khachhang->Ten = $request->Ten;
        $khachhang->TenKhongDau = str_slug($request->Ten);
        $khachhang->idDichVu = $request->DichVu;
        $khachhang->idGoiDichVu = $request->GoiDichVu;
        $khachhang->Thu = $request->Thu;
        $khachhang->DienThoai = $request->DienThoai;
        $khachhang->password = bcrypt($request->password);
        $khachhang->NgaySinh = $request->NgaySinh;
        $khachhang->NgayDangKy = $request->NgayDangKy;
        $khachhang->DiaChi = $request->DiaChi;
        $khachhang->BatDau = $request->BatDau;
        $khachhang->KetThuc = $request->KetThuc;
        $khachhang->ConLai = $request->ConLai;
        $khachhang->save(); 

      return redirect('admin/khachhang/sua/'.$id)->with('thongbao', 'Sửa thành công');
    }
    public function getThanhToan($id){
      $dichvu = DichVu::all();
      $goidichvu = GoiDichVu::all();
        $khachhang = KhachHang::find($id);
        return view('admin.khachhang.thanhtoan', ['khachhang'=>$khachhang,  'dichvu'=>$dichvu, 'goidichvu'=>$goidichvu]);
    }
     public function postThanhToan(Request $request, $id){
        $khachhang = KhachHang::find($id);  
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
      return redirect('admin/khachhang/thanhtoan/'.$id)->with('thongbao', 'Sửa thành công');
    }




    public function getThem(){
    	$dichvu = DichVu::all();
    	$goidichvu = GoiDichVu::all();
      return view('admin.khachhang.them', ['dichvu'=>$dichvu], ['goidichvu'=>$goidichvu]);
    }

    public function postThem(Request $request){
      	$khachhang = new KhachHang;
        $ListLichSuGiaoDich = new ListLichSuGiaoDich;
    

       //kiểm tra điều kiện 
      	$this->validate($request,
          [
              'Ten' =>'required:KhachHang,Ten|min:3|max:100',
              'Hinh'=>'required:KhachHang,Ten|min:3|max:100',
              'DienThoai'=>'required|unique:KhachHang,Ten|min:3|max:100'
          ],
          [
              'Ten.required'=>'Bạn nhập ngu vl chưa nhập tên dich vu',
              'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha ',
              'DienThoai.unique'=>'Đã bị trùng',
              'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha ',
              'Hinh.required'=>'Chưa chọn ảnh',
          ]);
        $file = $request->file('Hinh'); //lấy file ảnh đó về
        $duoi = $file->getClientOriginalExtension('Hinh');//lấy 
        $ten = str_slug($request->Ten).$request->NgaySinh.'.'.$duoi; 
        $file->move('upload/khachhang',  $ten );

        ////truyền dữ liệu vô cột và lưu vào data 
        //khach hang
        $khachhang->Ten = $request->Ten;
        $khachhang->TenKhongDau = str_slug($request->Ten);
        $khachhang->idDichVu = $request->DichVu;
        $khachhang->idGoiDichVu = $request->GoiDichVu;
        $khachhang->Thu = $request->Thu;
        $khachhang->DienThoai = $request->DienThoai;
        $khachhang->NgaySinh = $request->NgaySinh;
        $khachhang->Hinh= $ten ;
        $khachhang->password = bcrypt($request->password);
        $khachhang->NgayDangKy = $request->NgayDangKy;
        $khachhang->DiaChi = $request->DiaChi;
        $khachhang->BatDau = $request->BatDau;
        $khachhang->KetThuc = $request->KetThuc;
        $khachhang->ConLai = $request->ConLai;
        //list lich su
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
        //lưu vào data
        $khachhang->save(); 
        $ListLichSuGiaoDich->save(); 
        return redirect('admin/khachhang/them')->with('thongbao', 'Them thành công');

    }


      public function getXoa($id){
          $khachhang =  KhachHang::find($id);
          $khachhang->delete();
       return redirect('admin/khachhang/danhsach')->with('thongbao', 'Xóa thành công');  
    }
    public function getXoaDsHetHan($id){
          $khachhang =  KhachHang::find($id);
          $khachhang->delete();
       return redirect('admin/khachhang/hethan')->with('thongbao2', 'Xóa thành công');  
    }

    public function getHetHan(){

      $hethan = DB::table('khachhang')->where('ConLai','<=',3)->select(['id','Ten','ConLai'])->get();
          return view('admin.khachhang.hethan', ['hethan'=>$hethan]);
      }
    public function getDanhSachTinhBuoi()
    {
      $khachhang = KhachHang::paginate(5);
      return view('admin.khachhang.danhsachtinhbuoi', ['khachhang'=>$khachhang]);
    } 
    public function getTinhBuoi($id)
    {
      $tinhbuoi1 = KhachHang::find($id);
      $tinhbuoi = DB::table('khachhang')->where('id','=',$id)->select(['id','ConLai'])->get();

      foreach ($tinhbuoi as $row) {
        foreach ($row as $value) {
            $tinhbuoi1->ConLai = ($value)-1;

        }
      }
            $tinhbuoi1->save();
      return redirect('admin/khachhang/danhsachtinhbuoi')->with('thongbao', 'Điểm danh thành công');

    } 

    public function postTimKiem(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $khachhang = KhachHang::where('Ten', 'like', "%$tukhoa%")->orwhere('TenKhongDau', 'like', "%tukhoa%")->take(30)->paginate(5);
        return view('admin.khachhang.danhsach', ['khachhang'=>$khachhang, 'tukhoa'=>$tukhoa]); 
    }  
    //tìm kiếm điểm danh
    public function postTimKiem2(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $khachhang = KhachHang::where('Ten', 'like', "%$tukhoa%")->orwhere('TenKhongDau', 'like', "%tukhoa%")->take(30)->paginate(5);
        return view('admin.khachhang.danhsachtinhbuoi', ['khachhang'=>$khachhang, 'tukhoa'=>$tukhoa]); 
    }  
    public function postTimKiem3(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $data = ListLichSuGiaoDich::where('Ten', 'like', "%$tukhoa%")->orwhere('TenKhongDau', 'like', "%tukhoa%")->take(30)->paginate(5);
        return view('admin.khachhang.listlichsugiaodich', ['data'=>$data, 'tukhoa'=>$tukhoa]); 
    }  
    public function getlistlichsugiaodich()   
    {
        $data = ListLichSuGiaoDich::paginate(5);
        return view('admin.khachhang.listlichsugiaodich',['data'=>$data]);
    }  
}
