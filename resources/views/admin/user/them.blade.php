@extends('admin.layout.index')
@section('content')
<div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">

        <h2>Khách Hàng</h2>
        <p>Thêm Khách Hàng</p>
        <br>
    <div class="row">     
        <div class="col-sm-5">
        @if(count($errors)>0) 
          <!--kiểm tra điều kiện errors lưu các điều kiện từ validate -->
          <div class="alert alert-danger">
              @foreach($errors->all() as $err)
                  {{$err}} <br>
              @endforeach
          </div>
        @endif 
        @if(session('thongbao'))
            <div class="alert alert-success">
            {{session('thongbao')}}
            </div> 
        @endif
        <form action="admin/user/them" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
         
              <div>
                <label>Tên</label>
                <br>
                <input type="text"  class="form-control"  name="Ten" placeholder="Địa chỉ">
              </div>
              <div>
                <label>Tải ảnh lên</label>
                <br>
                <input type="file" name="Hinh">
              </div>
              <br>
              <div>
                <label>Email</label>
                <br>
                <input type="text"  class="form-control"  name="Email" placeholder="">
              </div>
			  <br>
			  <div>
                <label style="padding-right: 10px;">Quyền:</label>
                <label style="padding-right: 10px;" class="radio-inline">
					<input type="radio"  value="0" checked=""  name="Quyen" placeholder="">THƯỜNG
				</label>
				<label class="radio-inline">
					<input type="radio"  value="1"  name="Quyen" placeholder="">ADMIN
				</label>
              </div>
              <br>
			  <div>
                <label>Password</label>
                <br>
                <input type="password" name="password" placeholder="Nhập mật khẩu">
              </div>
              <br>
			  <div>
                <label>Nhập lại Password</label>
                <br>
                <input type="password" name="passwordAgain" placeholder="NHập lại mật khẩu">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Thêm Admin</button>
              <button type="reset" class="btn btn-primary">Reset</button> 
        </form>
      </div>
    </div>

</div>
@endsection