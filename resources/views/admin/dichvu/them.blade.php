@extends('admin.layout.index')
@section('content')
<div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
   <div class="col-sm-6"> 
        <h2>Dich Vụ</h2>
        <p>Thêm Dịch Vụ</p>
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
        <form action="admin/dichvu/them" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for="usr">Tên dịch vụ</label>
            <input type="text" class="form-control" id="usr" name="Ten">
          </div>
          <button type="submit" class="btn btn-primary">Thêm Dịch Vụ</button>
           <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
</div>
@endsection