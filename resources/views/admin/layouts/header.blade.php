  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      @php 
        $getUnreadNotification = App\Models\NotificationModel::getUnreadNotification();
      @endphp

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{ $getUnreadNotification->count() }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">{{ $getUnreadNotification->count() }} Notifications</span>
          @foreach($getUnreadNotification as $notification)
          <div class="dropdown-divider"></div>
          <a href="{{ $notification->url }}?notification_id={{ $notification->id }}" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 
            {{ $notification->message }}
            <div class="text-muted text-sm">{{ date('d-m-Y h:i A', strtotime($notification->created_at)) }}</div>
          </a>
          @endforeach
          <div class="dropdown-divider"></div>
          <a href="{{ url('admin/notification') }}" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div href="#" class="brand-link" style="text-align:center;">
      <span class="brand-text font-weight-light">Welcome, <strong>{{ Auth::user()->name }}</strong></span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{ url('admin/dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/admin/list') }}" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
                    <i class="nav-icon fas fa-user"></i>
                  <p>
                    Admin
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/customer/list') }}" class="nav-link @if(Request::segment(2) == 'customer') active @endif">
                    <i class="nav-icon fas fa-user"></i>
                  <p>
                    Customers
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/order/list') }}" class="nav-link @if(Request::segment(2) == 'order') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Orders
                  </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ url('admin/category/list') }}" class="nav-link @if(Request::segment(2) == 'category') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Category
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/sub_category/list') }}" class="nav-link @if(Request::segment(2) == 'sub_category') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Sub Category
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/brand/list') }}" class="nav-link @if(Request::segment(2) == 'brand') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Brand
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/color/list') }}" class="nav-link @if(Request::segment(2) == 'color') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Color
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/product/list') }}" class="nav-link @if(Request::segment(2) == 'product') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Products
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/discount_code/list') }}" class="nav-link @if(Request::segment(2) == 'discount_code') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Discount Code
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/shipping_charge/list') }}" class="nav-link @if(Request::segment(2) == 'shipping_charge') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Shipping Charge
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/contactus') }}" class="nav-link @if(Request::segment(2) == 'contactus') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Messages
                  </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ url('admin/slider/list') }}" class="nav-link @if(Request::segment(2) == 'slider') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Slider
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/partner/list') }}" class="nav-link @if(Request::segment(2) == 'partner') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Partner Logos
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/blogcategory/list') }}" class="nav-link @if(Request::segment(2) == 'blogcategory') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Blog Categories
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/blog/list') }}" class="nav-link @if(Request::segment(2) == 'blog') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Blogs
                  </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ url('admin/page/list') }}" class="nav-link @if(Request::segment(2) == 'page') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    Web App SEO
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/smtp-setting') }}" class="nav-link @if(Request::segment(2) == 'smtp-setting') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    SMTP Settings
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('admin/system-setting') }}" class="nav-link @if(Request::segment(2) == 'system-setting') active @endif">
                    <i class="nav-icon fas fa-list-alt"></i>
                  <p>
                    System Settings
                  </p>
                </a>
              </li>
          <li class="nav-item">
            <a href="{{ url('admin/logout') }}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
