@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;">
          <h2>Lịch sử</h2>
          <p>Bán hàng</p>     
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
                                <th class="column-title">Tổng tiền</th>
                                <th class="column-title">Ngày giờ</th>
              
                            </tr>
                            </thead>
                            <tbody>
                              @foreach($listsanpham as $value)
                                    <tr class="even pointer">
                                        <td align="left" class=" ">{{$value->id}}</td>
                                        <td align="left" class=" ">{{$value->Ten}}</td>
                                        <td align="left" class=" ">{{$value->TongTien}}</td>
                                        <td align="left" class=" ">{{$value->created_at}}</td>
                                    </tr> 
                              @endforeach                               
                            </tbody>
                  </table>
           </div>  
      </div>
</div>
@endsection