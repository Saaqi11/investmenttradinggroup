<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header"> <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="default.html" target="_blank"> <img src="{{ asset('assets/img/logo.jpeg') }}" class="navbar-brand-img h-100" alt="main_logo"> <span class="ms-1 font-weight-bold">Pinzzit</span> </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
{{--        <ul class="navbar-nav">--}}
{{--            <li class="nav-item">--}}
{{--                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->route()->uri == 'admin/dashboard' ? "active" : '' }}">--}}
{{--                    <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">--}}
{{--                        <i class="fal fa-tachometer-alt-fast"></i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Dashboards</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="{{ route('payments') }}" class="nav-link {{ request()->route()->uri == 'admin/payments' ? "active" : '' }}">--}}
{{--                    <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">--}}
{{--                        <i class="fal fa-money-check-alt"></i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Payments</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="{{ route('logs') }}" class="nav-link {{ request()->route()->uri == 'admin/logs' ? "active" : '' }}">--}}
{{--                    <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">--}}
{{--                        <i class="fal fa-clipboard-list"></i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Logs</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a href="{{ route('subscriptions.list') }}" class="nav-link {{ request()->route()->action['prefix'] == 'admin/subscriptions' ? "active" : '' }}">--}}
{{--                    <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">--}}
{{--                        <i class="fal fa-money-check-edit-alt"></i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Subscriptions</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->route()->action['prefix'] == 'admin/users' ? "active" : '' }}" href="#users-sub-menu" aria-controls="users-sub-menu" role="button" aria-expanded="false" data-bs-toggle="collapse">--}}
{{--                    <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">--}}
{{--                        <i class="fal fa-users"></i>--}}
{{--                    </div>--}}
{{--                    <span class="nav-link-text ms-1">Users</span>--}}
{{--                </a>--}}
{{--                <div class="collapse {{ request()->route()->action['prefix'] == 'admin/users' ? "show" : '' }} " id="users-sub-menu">--}}
{{--                    <ul class="nav ms-4 ps-3">--}}
{{--                        <li class="nav-item {{ request()->route()->action['as'] == 'users.list' ? "active" : '' }}">--}}
{{--                            <a class="nav-link active" href="{{ route('users.list') }}">--}}
{{--                                <span class="sidenav-normal"> List </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item {{ request()->route()->action['as'] == 'users.view' ? "active" : '' }}">--}}
{{--                            <a class="nav-link " href="{{ route('users.view') }}">--}}
{{--                                <span class="sidenav-mini-icon"> A </span>--}}
{{--                                <span class="sidenav-normal"> Automotive </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--        </ul>--}}
    </div>
</aside>
