@extends('admin.layout.index')
@section('content')
<div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
            <h2>Sửa Thông Tin</h2>
            <p>Sửa Gói :{{$sua->Ten}}</p>
            <br>
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
         
            <form action="admin/user/sua/{{$sua->id}}" method="post" enctype="multipart/form-data">
          		    <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="row">
                <div class="col-sm-5">
          		   <div>
                <label>Tên</label>
                <br>
                <input type="text"  class="form-control"  name="Ten" placeholder="Địa chỉ" value="{{$sua->name}}">
              </div>
              <div>
                <label>Tải ảnh lên</label>
                <br>
                <input type="file" name="Hinh" value="{{$sua->hinh}}">
              </div>
              <br>
              <div>
                <label>Email</label>
                <br>
                <input type="text"  class="form-control"  name="Email" placeholder="" readonly="" value="{{$sua->email}}">
              </div>
			  <br>
			  <div>
                <label style="padding-right: 10px;">Quyền:</label>
                <label style="padding-right: 10px;" class="radio-inline">
					<input type="radio"  value="0" 
					@if($sua->quyen == 0)
					{{"checked"}}
					@endif
					name="Quyen" placeholder="">THƯỜNG
				</label>
				<label class="radio-inline">
					<input type="radio"  value="1" 
					@if($sua->quyen == 1)
					{{"checked"}}
					@endif
					name="Quyen" placeholder="">ADMIN
				</label>
              </div>
              <br>
			  <div>
                <label>Password</label>
                <br>
                <input type="password" name="password" placeholder="Nhập mật khẩu" >
              </div>
              <br>
			  <div>
                <label>Nhập lại Password</label>
                <br>
                <input type="password" name="passwordAgain" placeholder="NHập lại mật khẩu" >
              </div>
              <br>
          		    <button type="submit" class="btn btn-primary">Sửa</button> 
          		    <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/user/danhsach">Trở lại</a></button>
                </div>  
              </div>
            </form>
            </form>
</div>
@endsection