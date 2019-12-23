@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
      <div class="col-sm-11">
                  <h2>Điểm Danh</h2>
                  <p>Danh Sách</p>     
                  <br>     
                  @if(session('thongbao'))
                  <div class="alert alert-success">
                  {{session('thongbao')}}
                  </div>
                  @endif  
                  <div class="col-lg-5">
                    
                  </div>
                  <div class="col-lg-4">
                    <form action="admin/khachhang/timkiem2" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="input-group">
                            <input  class="form-control" size="50" placeholder="Nhập tên" name="tukhoa" required="">
                          <div class="input-group-btn">
                             <button type="submit" class="btn btn-danger">Tìm kiếm</button>
                          </div>
                      </div>
                    </form>
                  </div>
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Tên</th>
                        <th>Còn Lại</th>
                        <th>Điểm Danh</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($khachhang as $value)
                      <tr>
                        <td align="left">{{$value->id}}</td>
                        <td align="left">{{$value->Ten}}</td>
                        <td align="left">{{$value->ConLai}}</td>
                        <td align="left"><button type="button" class="btn btn-outline-success"><a style="color: #000000"  href="admin/khachhang/tinhbuoi/{{$value->id}}">Có tập</a></button></td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
              <div class="row"> 
                  <div class="col-sm-5">
                  </div>
                   <div class="col-sm-5">
                  </div>
                  <div class="col-sm-2" style="padding-left: 3px;">
                  {{$khachhang->links()}}
                   </div>  
              </div>
      </div>
</div>
@endsection