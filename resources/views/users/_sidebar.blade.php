<aside class="col-md-4 col-lg-3">
    <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
        <li class="nav-item">
            <a href="{{ url('users/dashboard') }}"  class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">Dashboard</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('users/order') }}" class="nav-link @if(Request::segment(2) == 'order') active @endif">My Orders</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('users/edit-profile') }}" class="nav-link @if(Request::segment(2) == 'edit-profile') active @endif">Edit Profile</a>
        </li>
        <li class="nav-item">
        @php 
        $getUnreadNotificationCount = App\Models\NotificationModel::getUnreadNotificationCount(Auth::user()->id);
      @endphp
            <a href="{{ url('users/notifications') }}" class="nav-link @if(Request::segment(2) == 'notifications') active @endif">Notifications ({{ $getUnreadNotificationCount }})</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('users/change-password') }}" class="nav-link @if(Request::segment(2) == 'change-password') active @endif">Update password</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/logout') }}">Sign Out</a>
        </li>
    </ul>
</aside><!-- End .col-lg-3 -->
