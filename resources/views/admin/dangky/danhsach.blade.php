@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
 	<div class="col-sm-11"> 
				  <h2>Đăng Ký Trước</h2>
				  <p>Danh Sách</p>     
				  <br>     
				  @if(session('thongbao'))
		     	  <div class="alert alert-success">
		          {{session('thongbao')}}
		          </div>
		          @endif   
		    <div class="col-sm-4">
		        <form action="admin/dangky/timkiem" method="post">
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
				        <th>Ngày Sinh</th>
				        <th>idDichVu</th>
				        <th>idGoiDichVu</th>
				        <th>Xóa</th>
				        <th>Thanh toán</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($data as $value)
				      <tr class="even pointer">	
				      	<td align="left" >{{$value->id}}</td>
				        <td align="left" >{{$value->Ten}}</td>

				         <td align="left" >{{$value->NgaySinh}}</td>
				         @foreach($dichvu as $t1)
				         @if($value->idDichVu == $t1->id)       
				         <td align="left" >{{$t1->Ten}}</td>
                         @endif
                         @endforeach


				         @foreach($goidichvu as $t1)
				         @if($value->idGoiDichVu == $t1->id)       
				         <td align="left" >{{$t1->Ten}}</td>
                         @endif
                         @endforeach
                        <td align="left" ><button type="button" class="btn btn-success"><a style="color: #ffffff"  href="admin/dangky/xoa/{{$value->id}}"> Delete</a></button></td>
				        <td align="left" ><button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/dangky/sua/{{$value->id}}">Đăng Ký</a></button></td>
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

					  	{{$data->links()}}
					  </div>	
					 
				  </div>
				  
	</div>
</div>

@endsection

