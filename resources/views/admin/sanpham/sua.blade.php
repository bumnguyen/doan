@extends('admin.layout.index')
@section('content')
<div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
            <h2>Sửa Thông Tin</h2>
            <p>Sửa Gói :{{$sua->Ten}}</p>
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
         
            <form action="admin/sanpham/sua/{{$sua->id}}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
              
                   <div class="form-group">  
                    <label for="usr">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="usr" name="Ten" value="{{$sua->Ten}}">
                  </div>  
                  <div>
                    <label>Tải ảnh lên</label>
                    <br>
                    <input type="file" name="Hinh" value="{{$sua->Hinh}}">
                  </div>
                  <div  class="form-group"> 
                    <label>Số Lượng</label>
                    <br>
                    <input type="text" class="form-control" name="SoLuong" placeholder="" value="{{$sua->SoLuong}}" >
                  </div>
                  <div>
                    <label>Giá</label>
                    <br>
                    <input type="text"  class="form-control"  name="Gia" placeholder="Địa chỉ" value="{{$sua->Gia}}">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-primary">Sửa</button>  
                  <button type="reset" class="btn btn-primary">Reset</button>
                  <button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/sanpham/danhsach">Trở lại</a></button>
                
            </form>
        </div>  
      </div>
</div>
@endsection