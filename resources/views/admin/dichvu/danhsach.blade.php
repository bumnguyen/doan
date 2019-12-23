
 

@extends('admin.layout.index')



@section('content')
 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px; padding-right: 40px;">
 	<div class="col-sm-8"> 
				  <h2>Dịch Vụ</h2>
				  <p>Danh Sách</p>     
				  <br>     
				  @if(session('thongbao'))
		     	  <div class="alert alert-success">
		          {{session('thongbao')}}
		          </div>
		          @endif  
				  <table class="table table-striped jambo_table bulk_action" >
				    <thead>
				      <tr>
				        <th>Id</th>
				        <th>Ten</th>
				        <th>Delete</th>
				        <th>Edit</th>
				      </tr>
				    </thead>
				    <tbody>
				    @foreach($dichvu as $value)
				      <tr>
				      	<td align="left">{{$value->id}}</td>	
				        <td align="left">{{$value->Ten}}</td>
				        <td align="left"><button type="button" class="btn btn-success"><a style="color: #ffffff" href="admin/dichvu/xoa/{{$value->id}}"> Delete</a></button></td>
				        <td align="left"><button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/dichvu/sua/{{$value->id}}">Edit</a></button></td>
				      </tr>
				     @endforeach
				    </tbody>
				  </table>
	</div>
</div>
@endsection 