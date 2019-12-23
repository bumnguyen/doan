@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
          <h2>Danh Sách Sản Phẩm</h2>
          <p>Danh Sách</p>     
          <br>     
     <div class="row">
        <div class="col-sm-11">
          @if(session('thongbao'))
            <div class="alert alert-success">
              {{session('thongbao')}}
              </div>
              @endif  
           <!--  ///bảng dưới -->

              <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th class="column-title">Id</th>
                                <th class="column-title">Tên </th>
                                <th class="column-title">Hình </th>
                                <th class="column-title">Số lượng</th>
                                <th class="column-title">Giá </th>
                                <th class="column-title">Delete</th>
              
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($danhsach as $value)
                                    <tr class="even pointer">
                                        <td align="left" class=" ">{{$value->id}}</td>
                                        <td align="left" class=" ">{{$value->Ten}}</td>
                                         <td align="left" ><img style="width: 60px;, height: 60px;" src="upload/sanpham/{{$value->Hinh}}"></td>
                                        <td align="left" class=" ">{{$value->SoLuong}}</td>
                                        <td align="left" class=" ">{{$value->Gia}}</td>
                                        <td align="left" ><button type="button" class="btn btn-success"><a style="color: #ffffff"  href="admin/sanpham/xoa/{{$value->id}}"> Delete</a></button></td>
                                        <td align="left" ><button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/sanpham/sua/{{$value->id}}">Edit</a></button></td>
                                    </tr> 
                              @endforeach                               
                            </tbody>
                  </table>
                  <button type="button" class="btn btn-success"><a style="color: #ffffff"  href="admin/sanpham/them"> Thêm Sản Phẩm</a></button>
           </div>  
      </div>
</div>
@endsection