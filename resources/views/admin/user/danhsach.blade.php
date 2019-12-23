@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px; padding-right: 40px;">
 	<div class="col-sm-8"> 
				  <h2>User</h2>
				  <p>Danh Sách</p>     
				  <br>     
				  @if(session('thongbao'))
		     	  <div class="alert alert-success">
		          {{session('thongbao')}}
		          </div>
		          @endif  
				  <table class="table table-striped jambo_table bulk_action" >
				    <thead>
				      <tr class="headings">
				        <th>Id</th>
						<th>Ten</th>
				        <th>Hinh</th>
						<th>Quyen</th>
						<th>Email</th>
						<th>Delete</th>
						<th>Edit</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($user as $value)
				      <tr class="even pointer">
				      	<td align="left">{{$value->id}}</td>	
				        <td align="left">{{$value->name}}</td>
						<td align="left" ><img style="width: 60px;, height: 60px;" src="upload/user/{{$value->hinh}}"></td>
						<td align="left">
							@if($value->quyen == 1 )
							{{"ADMIN"}}
							@else
							{{"THƯỜNG"}}
							@endif
						</td>
						<td align="left">{{$value->email}}</td>
				        <td align="left"><button type="button" class="btn btn-success"><a style="color: #ffffff" href="admin/user/xoa/{{$value->id}}"> Delete</a></button></td>
				        <td align="left"><button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/user/sua/{{$value->id}}">Edit</a></button></td>
				      </tr>
				     @endforeach
				    </tbody>
				  </table>
			<button type="button" class="btn btn-success"><a style="color: #ffffff"  href="admin/user/them"> Thêm Thành Viên</a></button>
	</div>
</div>
@endsection 