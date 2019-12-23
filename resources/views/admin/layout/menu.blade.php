 <!-- Tất cả các phần của menu trái -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="upload/tintuc/hoian.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
	  @if(Auth::check())
      <span class="brand-text font-weight-light">
		@if( Auth::user()->quyen == 0)
		{{"Nhân Viên"}}
		@else
		{{"Admin"}}
		@endif
	  </span>
	  @endif
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Phần trên menu trái-->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
		@if(Auth::check())
          <img src="upload/user/{{Auth::user()->hinh}}" class="img-circle elevation-2" alt="User Image">
		 @endif
        </div>
        <div class="info">
           @if(Auth::check())
           <a href="#" class="d-block">{{Auth::user()->name}}</a>
           @endif
        </div>
      </div>

      <!-- Menu trái -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin/thongtin" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thông Tin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Dịch Vụ
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin/dichvu/danhsach" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p >Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/dichvu/them" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p >Thêm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Gói Dịch Vụ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin/goidichvu/danhsach" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                   <p >Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/goidichvu/them"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Khách Hàng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="admin/khachhang/danhsach" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                   <p>Danh Sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/khachhang/them" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p >Thêm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/khachhang/hethan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p >Khách hàng sắp hết hạn</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/khachhang/danhsachtinhbuoi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p >Điểm Danh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/khachhang/listlichsugiaodich" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p >Lịch sử</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Bán hàng nhanh
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin/sanpham/show" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bán hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/sanpham/danhsach" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sản Phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/sanpham/listbanhang" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lịch Sử</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Table
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>