<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPham;
use App\ListSanPham;


use Cart;
class SanPhamController extends Controller
{
	public function getAdd($id)	
    {
    	$sanpham = SanPham::find($id);
    		Cart::add(['id' => $id, 'name' => $sanpham->Ten, 'qty' => 1, 'price' => $sanpham->Gia ]);
    	return redirect('admin/sanpham/show');
    }	
     public function getShowCart()
    {
    	$tinhtien = Cart::total();
    	$data = cart::content();
    	$giohang = SanPham::All();
    	return view('admin.sanpham.show',['giohang'=>$giohang, 'items'=>$data ,'tinhtien'=>$tinhtien]);
    }

    public function getDelete($id)
    {
    	if($id == 'all'){
    		Cart::destroy();	
    	}else
    	    Cart::remove($id);
    	return back(); //trở lại
    }	

    public function getDanhSach()
    {
        $danhsach = SanPham::All();
        return view('admin.sanpham.danhsach',['danhsach'=>$danhsach]);
    }    
    public function getSua($id)
    {
        $sua = SanPham::find($id);
        return view('admin.sanpham.sua',['sua'=>$sua]);
    }    
    public function postSua(Request $request, $id)
    {
        $sanpham = sanpham::find($id);  
        $this->validate($request,
          [
              'Ten' =>'required:SanPham,Ten|min:3|max:100'
          ],
          [
              'Ten.required'=>'Bạn nhập ngu vl chưa nhập tên dich vu',
              'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
          ]);
        $file = $request->file('Hinh'); //lấy file ảnh đó về
        $duoi = $file->getClientOriginalExtension('Hinh');//lấy 
        $ten = $request->Ten.$request->Gia.'.'.$duoi; 
        $file->move('upload/sanpham',  $ten );
        //
        $sanpham->Ten = $request->Ten;
        $sanpham->SoLuong = $request->SoLuong;
        $sanpham->Gia = $request->Gia;
        $sanpham->Hinh = $ten;
        $sanpham->save(); 

      return redirect('admin/sanpham/sua/'.$id)->with('thongbao', 'Sửa thành công');
    }
    public function getXoa($id)
    {
        $xoa = SanPham::find($id);
        $xoa->delete();
        return redirect('admin/sanpham/danhsach')->with('thongbao', 'Xóa thành công');
    }    

    public function getThem()
    {
        return view('admin.sanpham.them');
    }    

    public function postThem(Request $request)
    {
        $sanpham = new SanPham;
        
        $this->validate($request,
          [
              'Ten' =>'required|unique:SanPham,Ten|min:3|max:100'
          ],
          [
              'Ten.required'=>'chưa nhập tên ',
              'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'Ten.unique'=>'Trùng tên',
          ]);
        $file = $request->file('Hinh'); //lấy file ảnh đó về
        $duoi = $file->getClientOriginalExtension('Hinh');//lấy  đuôi ảnh
        $ten = $request->Ten.$request->Gia.'.'.$duoi; 
        $file->move('upload/sanpham',  $ten );
        ///
        $sanpham->Ten = $request->Ten;
        $sanpham->SoLuong = $request->SoLuong;
        $sanpham->Gia = $request->Gia;
        $sanpham->Hinh = $ten;
        $sanpham->save(); 
        return redirect('admin/sanpham/them')->with('thongbao', 'Thêm thành công');
    }       

    public function postListBanHang(Request $request)
    {
        $listsanpham =  new ListSanPham;
          $this->validate($request,
          [
              'Ten' =>'required:ListSanPham,Ten|min:3|max:100'
          ],
          [
              'Ten.required'=>'Chưa nhập tên ',
              'Ten.min'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              'Ten.max'=>'Tên phải dài từ 3 đến 100 kí tự nha mài',
              
          ]);

        $listsanpham->Ten = $request->Ten;
        $listsanpham->TongTien = $request->TongTien;
        $listsanpham->save(); 
        return redirect('admin/sanpham/show')->with('thongbao', 'Thanh toán thành công');
    }    
    public function getListBanHang()
    {
        $listsanpham = ListSanPham::All();
        return view('admin.sanpham.listsanpham',['listsanpham'=> $listsanpham]);
    }    
}
