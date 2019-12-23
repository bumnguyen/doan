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
        <form action="admin/sanpham/them" method="post" enctype="multipart/form-data">
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
                <label>Số Lượng</label>
                <br>
                <input type="text"  class="form-control"  name="SoLuong" placeholder="Điện thoại">
              </div>
              <br>
              <div>
                <label>Gia</label>
                <br>
                <input type="text"  class="form-control"  name="Gia" placeholder="Điện thoại">
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Thêm Dịch Vụ</button>
              <button type="reset" class="btn btn-primary">Reset</button> 
              <button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/sanpham/danhsach">Trở lại</a></button>
        </form>
      </div>
    </div>

</div>
@endsection