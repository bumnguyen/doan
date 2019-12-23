@extends('admin.layout.index')
@section('content')
<div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
            <h2>Sửa Thông Tin</h2>
            <p>Sửa Gói :{{$khachhang->Ten}}</p>
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
         
            <form action="admin/khachhang/thanhtoan/{{$khachhang->id}}" method="post" enctype="multipart/form-data">
          		    <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="row">
                <div class="col-sm-5">
          		     <div class="form-group">  
                    <label for="usr">Tên Khách Hàng</label>
                    <input type="text" class="form-control" id="usr" name="Ten" value="{{$khachhang->Ten}}">
                  </div>
                  <div  class="form-group"> 
                    <label>Ngày Sinh</label>
                    <br>
                    <input type="text" class="form-control" name="NgaySinh" placeholder="00/00/0000" value="{{$khachhang->NgaySinh}}" >
                  </div>
                  <div>
                    <label>Địa chỉ</label>
                    <br>
                    <input type="text"  class="form-control"  name="DiaChi" placeholder="Địa chỉ" value="{{$khachhang->DiaChi}}">
                  </div>
                  <br>
                   <div>
                    <label>Điện thoại</label>
                    <br>
                    <input type="text"  class="form-control"  name="DienThoai" placeholder="Điện thoại" value="{{$khachhang->DienThoai}}">
                  </div>
                  <div>
                    <label>Tải ảnh lên</label>
                    <br>
                    <input type="file" name="Hinh" value="{{$khachhang->Hinh}}">
                  </div>
                  <div class="form-group">
                    <label>Dịch Vụ</label>
                    <br>
                    <select class="form-group" name="DichVu" style="width: 100%; height: 30px;">
                       @foreach($dichvu as $t1)
                            <option 
                            @if($khachhang->idDichVu == $t1->id)
                                {{"selected"}}
                            @endif
                            value="{{$t1->id}}">{{$t1->Ten}}</option>
                       @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label>Gói Dịch Vụ</label>
                    <br>
                    <select class="form-group" name="GoiDichVu" style="width: 100%; height: 30px;">
                       @foreach($goidichvu as $t1)
                            <option 
                            @if($khachhang->idDichVu == $t1->id)
                                {{"selected"}}
                            @endif
                            value="{{$t1->id}}">{{$t1->Ten}}</option>
                       @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Thu</label>
                    <br>
                    <input class="form-control"  type="" name="Thu" value="{{$khachhang->Thu}}">
                  </div>
                  <div class="form-group">
                    <label>Ngày Đăng Ký</label>
                    <br>
                    <input class="form-control"  type="text" name="NgayDangKy" placeholder="00/00/0000" value="{{$khachhang->NgayDangKy}}">
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
                  <br>
                  <div class="form-group">
                    <label>Còn lại</label>
                    <br>
                    <input class="form-control"  type="text" name="ConLai" placeholder="00/00/0000"  value="{{$khachhang->ConLai}}">
                  </div>
          		    <button type="submit" class="btn btn-primary">Thanh Toán</button>
          		    <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/khachhang/danhsach">Trở lại</a></button>
                </div>  
              </div>
            </form>
       
</div>
@endsection