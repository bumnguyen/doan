@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
 	<div class="col-sm-12"> 
				  <h2>Danh Thu</h2>
				  <p>Danh Sách</p>     
				  <br>     
				  @if(session('thongbao'))
		     	  <div class="alert alert-success">
		          {{session('thongbao')}}
		          </div>
		          @endif   
		<div class="row">
		    <div class="col-sm-5" style="background: #ffffff">
		    	<table class="table">
				    <tbody>
				      <tr>
				        <td>Số dịch vụ</td>
				        <td><strong>{{$dichvu}}</strong></td>
				        
				      </tr>
				      <tr>
				        <td>Tổng số dịch vụ</td>
				        <td><strong>{{$tongsodichvu}}</strong></td>
				       
				      </tr>
				      <tr>
				        <td>Doanh Thu</td>
				        <td><strong>{{$tongDanhThu}}.000 đ</strong></td>
				      
				      </tr>
				    </tbody>
				  </table>
		    </div>
		    <div class="col-sm-1"></div>
		    <div class="col-sm-5" style="background: #ffffff; float: left;" >
				  <table class="table table-striped jambo_table bulk_action">
				    <thead>
				      <tr>
				        <th>Gói</th>
				        <th>Tổng tiền</th>
				        <th>Số lượng gói</th>
				      </tr>
				    </thead>
				    <tbody>		   
				      <tr class="even pointer">	
				      	<td align="left" ><a href="admin/danhthu/theongay/1">Yoga</a></td>
				        <td align="left" >{{$yoga}}</td>
				        <td align="left"><strong>{{$sogoiyoga}}</strong></td>
				      </tr>
				      <tr class="even pointer">	
				      	<td align="left" ><a  href="admin/danhthu/theongay/2">Aerobic</a></td>
				        <td align="left" >{{$aerobic}}</td>
				        <td align="left"><strong>{{$sogoiaerobic}}</strong></td>
				      </tr>
				      <tr class="even pointer">	
				      	<td align="left" ><a  href="admin/danhthu/theongay/3">Boxing</a></td>
				        <td align="left" >{{$boxing}}</td>
				        <td align="left"><strong>{{$sogoiboxing}}</strong></td>
				      </tr>
				      <tr class="even pointer">	
				      	<td align="left" ><a  href="admin/danhthu/theongay/4">Zumba</a></td>
				        <td align="left" >{{$zumba}}</td>
				        <td align="left"><strong>{{$sogoizumba}}</strong></td>
				      </tr>
				    </tbody>
				  </table>
			</div>
		</div>	
		<div>
			<table class="table table-striped jambo_table bulk_action">
				    <thead>
				      <tr>
				        <th>Id</th>
				        <th>Tên</th>
				        <th>Ngày sinh</th>
				        <th>Địa chỉ</th>
				        <th>Dịch Vụ</th>
				        <th>Gói Dịch Vụ</th>
				        <th>Thu</th>
				        <th>Điện thoại</th>
				        <th> Buổi Còn lại</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($data as $value)
				      <tr class="even pointer">	
				      	<td align="left" >{{$value->id}}</td>
				        <td align="left" >{{$value->Ten}}</td>
				         <td align="left" >{{$value->NgaySinh}}</td>
				         <td align="left" >{{$value->DiaChi}}</td>
				         <td align="left" >{{$value->dichvu->Ten}}</td>
				         <td align="left" >{{$value->goidichvu->Ten}}</td>
				         <td align="left" >{{$value->Thu}}</td>
				         <td align="left" >{{$value->DienThoai}}</td>
				         <td align="left" >{{$value->ConLai}}</td>	
				      </tr>
				     @endforeach
				    </tbody>
			</table>
		</div>
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

