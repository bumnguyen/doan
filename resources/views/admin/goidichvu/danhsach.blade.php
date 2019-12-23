@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
    <div class="col-sm-8"> 
				  <h2>Gói Dịch Vụ</h2>
				  <p>Danh Sách</p>     
				  <br>     
				  @if(session('thongbao'))
		     	  <div class="alert alert-success">
		          {{session('thongbao')}}
		          </div>
		          @endif  
		          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th class="column-title">Id</th>
                                <th class="column-title">Tên </th>
                                <th class="column-title">Tên Không Dấu</th>
                                <th class="column-title">Delete</th>
                                <th class="column-title">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($goidichvu as $value)
                                    <tr class="even pointer">
                                        <td align="left" class=" ">{{$value->id}}</td>
                                        <td align="left" class=" ">{{$value->Ten}}</td>
                                        <td align="left" class=" ">{{$value->TenKhongDau}}</td>
                                        <td align="left" class=" "><button type="button" class="btn btn-success"><a style="color: #ffffff"  href="admin/goidichvu/xoa/{{$value->id}}"> Delete</a></button></td>
                                        <td align="left" class=" "><button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/goidichvu/sua/{{$value->id}}">Edit</a></button></td>		
                                    </tr> 
                              @endforeach																
                            </tbody>
                  </table>
    </div>
</div>
@endsection