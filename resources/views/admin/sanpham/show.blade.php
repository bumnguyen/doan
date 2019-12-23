@extends('admin.layout.index')
@section('content')

 <div class="content-wrapper" style="padding-left: 60px; padding-top: 20px;"> 
    <div  class="col-sm-11">
          <h2>Bán hàng nhanh</h2>
          <p>Danh Sách</p>       
          @if(count($errors)>0) 
                <!--kiểm tra điều kiện errors lưu các điều kiện từ validate -->
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
          @endif 
          @if(session('thongbao'))
           <div class="alert alert-success">
          {{session('thongbao')}}
          </div>
          @endif  
        <div class="row">           <!--  ///bảng trên trái -->
        <div  class="col-sm-4">
        <h3>Sản phẩm</h3>
          <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <!-- <th class="column-title">Id</th> -->
                            <th class="column-title">Tên </th>
                            <th class="column-title">Hình</th>
                            <th class="column-title">Giá </th>
                            <th class="column-title">Mua</th>
          
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($giohang as $value)
                                <tr class="even pointer">
                                    <!-- <td align="left" class=" ">{{$value->id}}</td> -->
                                    <td align="left" class=" ">{{$value->Ten}}</td>
                                    <td align="left" ><img style="width: 60px;, height: 60px;" src="upload/sanpham/{{$value->Hinh}}"></td>
                                    <!-- <td align="left" class=" ">{{$value->SoLuong}}</td> -->
                                    <td align="left" class=" ">{{$value->Gia}}</td>
                                    <td align="left" class=" "><button type="button" class="btn btn-success"><a style="color: #ffffff"  href="admin/sanpham/add/{{$value->id}}">Mua</a></button></td>
                                </tr> 
                          @endforeach                               
                        </tbody>
              </table>
  		</div>
        <div class="col-sm-8" style="padding-left: 130px;">
        <h3>Hóa đơn</h3>
        <form action="admin/sanpham/listbanhang" method="post"> 
          <input type="hidden" name="_token" value="{{csrf_token()}}">
                <h5>Tên khách hàng:<span class="total-price"><input  name="Ten"  style="border-radius:4px; margin-left: 10px; width: 220px"></span></h5>
                <br>
                <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">Tên </th>
                            <th class="column-title">Số lượng</th>
                            <th class="column-title">Giá</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($items as $value)
                                <tr class="even pointer">
                                    <td  align="left" class=" ">{{$value->name}}</td>
                                    <td align="left" class=" ">
                                        <div class="form-group">
                                          <input class="form-control" type="number" name="soluong" value="{{$value->qty}}" onchange="alert('oke')">
                                        </div>
                                    </td>
                                    <td align="left" class=" ">{{number_format($value->price*$value->qty,0,',','.')}}đ</td>
                                     <td><button type="button" class="btn btn-dark"><a style="color: #ffffff"  href="admin/sanpham/delete/{{$value->rowId}}">Delete</a ></button></td>
                                </tr> 
                          @endforeach                               
                        </tbody>
                </table>
        		<button type="reset" class="btn btn-primary"><a href="admin/sanpham/delete/all" style="color: #ffffff; "; >Xóa tất cả giỏ hàng</a></button>
            
            <h2>Tổng thanh toán:<span class="total-price"><input  name="TongTien"  style="color: red; border-radius:4px; margin-left: 10px; width: 220px"  value="{{$tinhtien}}"></span></h2>
            <button type="submit" class="btn btn-primary">Thanh Toán</button>   
        </form>
        </div>
        </div>  
    </div>
</div>
@endsection