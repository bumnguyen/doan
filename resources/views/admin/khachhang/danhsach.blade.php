@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
 	<div class="col-sm-11"> 
				  <h2>Khách Hàng</h2>
				  <p>Danh Sách</p>     
				  <br>     
				  @if(session('thongbao'))
		     	  <div class="alert alert-success">
		          {{session('thongbao')}}
		          </div>
		          @endif   
		    <div class="col-sm-4">
		        <form action="admin/khachhang/timkiem" method="post">
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
				        <th>Ảnh</th>
				        <th>Ngày sinh</th>
				        <th>Địa chỉ</th>
				        <th>Dịch Vụ</th>
				        <th>Gói Dịch Vụ</th>
				        <th>Thu</th>
				        <th>Điện thoại</th>
				        <th>Ngày Đăng Ký</th>
				        <th>Ngày bắt đầu</th>
				        <th>Ngày kết thúc</th>
				        <th> Buổi Còn lại</th>
				        <th>Delete</th>
				        <th>Edit</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($khachhang as $value)
				      <tr class="even pointer">	
				      	<td align="left" >{{$value->id}}</td>
				        <td align="left" >{{$value->Ten}}</td>
				        <td align="left" ><img style="width: 60px;, height: 60px;" src="upload/khachhang/{{$value->Hinh}}"></td>
				         <td align="left" >{{$value->NgaySinh}}</td>
				         <td align="left" >{{$value->DiaChi}}</td>
				         <td align="left" >{{$value->dichvu->Ten}}</td>
				         <td align="left" >{{$value->goidichvu->Ten}}</td>
				         <td align="left" >{{$value->Thu}}</td>
				         <td align="left" >{{$value->DienThoai}}</td>
				         <td align="left" >{{$value->NgayDangKy}}</td>
				         <td align="left" >{{$value->BatDau}}</td>
				         <td align="left" >{{$value->KetThuc}}</td>
				         <td align="left" >{{$value->ConLai}}</td>	
                        <td align="left" ><button type="button" class="btn btn-success"><a style="color: #ffffff"  href="admin/khachhang/xoa/{{$value->id}}"> Delete</a></button></td>
				        <td align="left" ><button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/khachhang/sua/{{$value->id}}">Edit</a></button></td>
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

