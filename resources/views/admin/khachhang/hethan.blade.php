@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
				  <h2>Khách hàng sắp hết hạn</h2>
				  <p>Danh Sách</p>     
				  <br>     
				  @if(session('thongbao2'))
		     	  <div class="alert alert-success">
		          {{session('thongbao2')}}
		          </div>
		          @endif  
		          <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th class="column-title">Id</th>
                                <th class="column-title">Tên </th>
                                <th class="column-title">Còn lại</th>
                                <th class="column-title">Delete</th>
                                <th class="column-title">Thanh toán lại</th>
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($hethan as $value)
                                    <tr class="even pointer">
                                        <td align="left" class=" ">{{$value->id}}</td>
                                        <td align="left" class=" ">{{$value->Ten}}</td>
                                        <td align="left" class=" ">{{$value->ConLai}}</td>
                                        <td align="left" class=" "><button type="button" class="btn btn-success"><a style="color: #ffffff"  href="admin/khachhang/xoadshethan/{{$value->id}}"> Delete</a></button></td>
                                        <td align="left" class=" "><button type="button"  class="btn btn-info"><a style="color: #000000" href="admin/khachhang/thanhtoan/{{$value->id}}">Thanh Toán</a></button></td>		
                                    </tr> 
                              @endforeach																
                            </tbody>
                  </table>
</div>
@endsection 