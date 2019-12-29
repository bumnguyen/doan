<?php

Route::get('/', function () {
    return view('welcome');
}); 



Route::get('admin/dangnhap', 'UserController@adminnhap');
Route::post('admin/dangnhap', 'UserController@postadminnhap');
Route::get('admin/dangxuat', 'UserController@admindangxuat');
//Trang thông tin
Route::get('admin/thongtin', 'ThongTinController@getThongTin');

//Phần route admin
Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'], function(){
	// admin/dichvu/danhsach
	Route::group(['prefix'=>'dichvu'], function(){
		Route::get('danhsach', 'DichVuController@getDanhSach');	

		Route::get('sua/{id}', 'DichVuController@getSua');
		Route::post('sua/{id}', 'DichVuController@postSua');

		Route::get('them', 'DichVuController@getThem');
		Route::post('them', 'DichVuController@postThem');
 
		Route::get('xoa/{id}', 'DichVuController@getXoa');

	});
	Route::group(['prefix'=>'goidichvu'], function(){
		Route::get('danhsach', 'GoiDichVuController@getDanhSach');

		Route::get('sua/{id}', 'GoiDichVuController@getSua');
		Route::post('sua/{id}', 'GoiDichVuController@postSua');

		Route::get('them', 'GoiDichVuController@getThem');
		Route::post('them', 'GoiDichVuController@postThem');

		Route::get('xoa/{id}', 'GoiDichVuController@getXoa');

	});
	Route::group(['prefix'=>'khachhang'], function(){
		Route::get('danhsach', 'KhachHangController@getDanhSach');
		Route::get('hethan', 'KhachHangController@getHetHan');
		Route::get('danhsachtinhbuoi', 'KhachHangController@getDanhSachTinhBuoi');
		Route::get('tinhbuoi/{id}', 'KhachHangController@getTinhBuoi');

		Route::get('sua/{id}', 'KhachHangController@getSua');
		Route::post('sua/{id}', 'KhachHangController@postSua');

		Route::get('them', 'KhachHangController@getThem');
		Route::post('them', 'KhachHangController@postThem');

		Route::get('xoa/{id}', 'KhachHangController@getXoa');
		Route::get('xoadshethan/{id}', 'KhachHangController@getXoaDsHetHan');

		Route::get('thanhtoan/{id}', 'KhachHangController@getThanhToan');
		Route::post('thanhtoan/{id}', 'KhachHangController@postThanhToan');
		
		Route::post('timkiem', 'KhachHangController@postTimKiem');
		Route::post('timkiem2', 'KhachHangController@postTimKiem2');
		Route::post('timkiem3', 'KhachHangController@postTimKiem3');
		Route::get('listlichsugiaodich', 'KhachHangController@getlistlichsugiaodich');
	});
	Route::group(['prefix'=>'sanpham'], function(){
		//bán hàng nhanh
		Route::get('add/{id}', 'SanPhamController@getAdd');	
		Route::get('show', 'SanPhamController@getShowCart');
		Route::get('delete/{id}', 'SanPhamController@getDelete');
		//
		Route::get('danhsach', 'SanPhamController@getDanhSach');
	
		Route::get('sua/{id}', 'SanPhamController@getSua');
		Route::post('sua/{id}', 'SanPhamController@postSua');

		Route::get('them', 'SanPhamController@getThem');
		Route::post('them', 'SanPhamController@postThem');
 
		Route::get('xoa/{id}', 'SanPhamController@getXoa');

		Route::post('listbanhang', 'SanPhamController@postListBanHang');

		Route::get('listbanhang' , 'SanPhamController@getListBanHang');
	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('danhsach', 'UserController@getDanhSach');	

		Route::get('sua/{id}', 'UserController@getSua');
		Route::post('sua/{id}', 'UserController@postSua');

		Route::get('them', 'UserController@getThem');
		Route::post('them', 'UserController@postThem');
 
		Route::get('xoa/{id}', 'UserController@getXoa');

	});
	Route::group(['prefix'=>'danhthu'], function(){
		Route::get('theongay', 'DanhThuController@getTheoNgay');	
		Route::post('theongay', 'DanhThuController@postTheoNgay');
		Route::get('theongay/{id}', 'DanhThuController@getDanhSach');
	});
}); 


Route::group(['prefix'=>'frontend'], function(){
	Route::get('index', 'DanhThuController@index');	
}); 