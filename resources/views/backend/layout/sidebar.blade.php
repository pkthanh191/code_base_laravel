<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('dist/assets/brand/coreui.svg#full')}}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('dist/assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        @if (auth('admin')->user()->can('admin-pms', 'admin.permission.getList'))
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-balance-scale') }}"></use>
                </svg> Phân Quyền</a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link @if (in_array(Route::currentRouteName(), ['admin.permission.getList'])) avtive @endif" href="{{ route('admin.permission.getList') }}">
                        <span class="nav-icon"></span>
                        Danh Sách
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.permission.getCreate') }}">
                        <span class="nav-icon"></span>
                        Thêm Mới
                    </a>
                </li>
            </ul>
        </li>
        @endif
        
        @if (auth('admin')->user()->can('admin-pms', 'admin.account.getList'))
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('dist/vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                </svg> Tài Khoản</a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link @if (in_array(Route::currentRouteName(), ['admin.account.getList'])) avtive @endif" href="{{ route('admin.account.getList') }}">
                        <span class="nav-icon"></span>
                        Danh Sách
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.account.getCreate') }}">
                        <span class="nav-icon"></span>
                        Thêm Mới
                    </a>
                </li>
            </ul>
        </li>
        @endif
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
