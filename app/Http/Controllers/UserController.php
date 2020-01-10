<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
    public function adminnhap(){

    	return view('admin.dangnhap');
    	}
    public function postadminnhap(Request $request){
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
	    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) 	
	    {
    // The user is active, not suspended, and exists.
	    	return redirect('admin/dichvu/danhsach');
		}
		else
		{

			return redirect('admin/dangnhap')->with('thongbao', 'Đăng nhập không thành công');
		}
}
    public function admindangxuat()
    {
      Auth::logout();// đăng xuất và xóa dữ liệu đi
      return redirect('admin/dangnhap');
    }  
	public function getDanhSach()
	{
		$data = User::All();
		return view('admin.user.danhsach',['user'=>$data]);
	}
	public function getThem()
    {
        return view('admin.user.them');	
    }    
	public function postThem(Request $request)
	{
		
		 $this->validate($request,
          [
              'Ten' =>'required|min:3',
              'Email' => 'required|email|unique:users,email',
			  'password' =>'required|min:3|max:100',
			  'passwordAgain' =>'required|same:password'
          ],
          [
			 'Ten.required'=>'Bạn chưa nhập Ten',
			 'Ten.required'=>'Tên quá ngắn',
             'Email.required'=>'Bạn chưa nhập email',
			 'Email.email'=>'Bạn chưa nhập đúng định dạng email',
			 'Email.unique'=>'Email đã bị trùng',
			 'password.required'=>'Bạn chưa nhập pass',
			 'password.min'=>'Pass quá ngắn',
			 'passwordAgain.required'=>'Bạn chưa nhập lại pass',
			 'passwordAgain.same'=>'Mật khẩu chưa khớp',
          ]);
		 $user = new User;

		$file = $request->file('Hinh'); //lấy file ảnh đó về
        $duoi = $file->getClientOriginalExtension('Hinh');//lấy 
        $ten = str_slug($request->Ten).$request->Email.'.'.$duoi; 
        $file->move('upload/user',  $ten );

        $user->name = $request->Ten;
        $user->hinh = $ten;
        $user->quyen = $request->Quyen;
        $user->email = $request->Email;
        $user->password = bcrypt($request->password);
        $user->save(); 
		return redirect('admin/user/danhsach')->with('thongbao', 'Thêm thành công');
	}
	public function getSua($id)
    {
		$sua = User::find($id);
        return view('admin.user.sua', ['sua'=>$sua]);	
    } 
	public function postSua(Request $request ,$id)
    {
		 $this->validate($request,
          [
              'Ten' =>'required|min:3',
           
          ],
          [
			 'Ten.required'=>'Bạn chưa nhập Ten',
			 'Ten.required'=>'Tên quá ngắn',
      
          ]);
		 $user = User::find($id);

		$file = $request->file('Hinh'); //lấy file ảnh đó về
        $duoi = $file->getClientOriginalExtension('Hinh');//lấy 
        $ten = str_slug($request->Ten).$request->Email.'.'.$duoi; 
        $file->move('upload/user',  $ten );

        $user->name = $request->Ten;
        $user->hinh = $ten;
        $user->quyen = $request->Quyen;
        $user->password = bcrypt($request->password);
        $user->save(); 
		return redirect('admin/user/danhsach')->with('thongbao', 'Sửa thành công');
	}
	 public function getXoa($id){
          $user = User::find($id);
          $user->delete();
       return redirect('admin/user/danhsach')->with('thongbao', 'Xóa thành công');  
    }
}