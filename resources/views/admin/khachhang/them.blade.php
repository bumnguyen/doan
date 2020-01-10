@extends('admin.layout.index')
@section('content')
<div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
  <div >
        <h2>Khách Hàng</h2>
        <p>Thêm Khách Hàng</p>
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
        <form action="admin/khachhang/them" method="post" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="row">
                
            <div class="col-sm-5">
              <div class="form-group">  
                <label for="usr">Tên Khách Hàng</label>
                <input type="text" class="form-control" id="usr" name="Ten">
              </div>
              <div  class="form-group">
                <label>Ngày Sinh</label>
                <br>
                <input name="NgaySinh" type="date" id="ngaysinh-add" class="form-control" value="" required="required" title="">
              </div>
              <div>
                <label>Địa chỉ</label>
                <br>
                <input type="text"  class="form-control"  name="DiaChi" placeholder="Địa chỉ">
              </div>
              <br>
              <div>
                <label>Điện thoại</label>
                <br>
                <input type="text"  class="form-control"  name="DienThoai" placeholder="Điện thoại">
              </div>
              <br>
              <div>
                <label>PassWord</label>
                <br>
                <input type="text"  class="form-control"  name="password" placeholder="PassWord" value="12345">
              </div>
              <br>
              <div>
                <label>Tải ảnh lên</label>
                <br>
                <input type="file" name="Hinh">
              </div>
              <br>
              <div class="form-group">
                <label>Dịch Vụ</label>
                <br>
                <select class="form-group" name="DichVu" style="width: 100%; height: 30px;">
                    @foreach($dichvu as $value)
                    <option value="{{$value->id}}">{{$value->Ten}}</option>  
                    @endforeach
                </select>
              </div>
               <div class="form-group">
                <label>Gói Dịch Vụ</label>
                <br>
                <select class="form-group" name="GoiDichVu" style="width: 100%; height: 30px;">
                    @foreach($goidichvu as $value)
                    <option value="{{$value->id}}">{{$value->Ten}}</option>  
                    @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Thu</label>
                <br>
                <input class="form-control"  type="number" name="Thu">
              </div>
              <div class="form-group">
                <label>Ngày Đăng Ký</label>
                <br>
                <input name="NgayDangKy" type="date" id="ngaysinh-add" class="form-control" value="" required="required" title="">
              </div>
              <div class="form-group">
                <label>Bắt Đầu</label>
                <br>
                 <input name="BatDau" type="date" id="ngaysinh-add" class="form-control" value="" required="required" title="">
              </div>
              <div class="form-group">
                <label>Kết Thúc</label>
                <br>
                <input name="KetThuc" type="date" id="ngaysinh-add" class="form-control" value="" required="required" title="">
              </div>
              <div class="form-group">
                <label>Còn lại</label>
                <br>
                <input class="form-control"  type="number" name="ConLai" placeholder="">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Thêm Dịch Vụ</button>
              <button type="reset" class="btn btn-primary">Reset</button> 
              <button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/khachhang/danhsach">Trở lại</a></button>
            </div>
          </div>
        </form>
      </div>
</div>
@endsection