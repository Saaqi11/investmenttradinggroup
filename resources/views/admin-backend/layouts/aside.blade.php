
@if(request()->route()->action['as'] !== "admin.homepage.addSection" && request()->route()->action['as'] !== "admin.homepage.editSection")
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header"> <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="default.html" target="_blank">
                <span class="ms-1 font-weight-bold">Investment Trading Group</span> </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('admin.sales') }}" class="nav-link {{ request()->route()->uri == 'admin/sales' ? "active" : '' }}">
                        <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fal fa-tachometer-alt-fast"></i>
                        </div>
                        <span class="nav-link-text ms-1">Sales</span>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.coupons') }}" class="nav-link {{ request()->route()->uri == 'admin/coupons' ? "active" : '' }}">--}}
{{--                        <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">--}}
{{--                            <i class="fal fa-gift" aria-hidden="true"></i>--}}
{{--                        </div>--}}
{{--                        <span class="nav-link-text ms-1">Coupons</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{ route('admin.pricing') }}" class="nav-link {{ request()->route()->uri == 'admin/pricing' ? "active" : '' }}">
                        <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fal fa-money-check-alt"></i>
                        </div>
                        <span class="nav-link-text ms-1">Pricing</span>
                    </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.support') }}" class="nav-link {{ request()->route()->uri == 'admin/support' ? "active" : '' }}">--}}
{{--                        <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">--}}
{{--                            <i class="fal fa-info-circle"></i>--}}
{{--                        </div>--}}
{{--                        <span class="nav-link-text ms-1">Support</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a href="{{ route('admin.payments') }}" class="nav-link {{ request()->route()->uri == 'admin/payments' ? "active" : '' }}">
                        <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fal fa-money-check-alt"></i>
                        </div>
                        <span class="nav-link-text ms-1">Payments</span>
                    </a>
                </li>

                <li class="nav-item">
                    <hr class="horizontal dark" />
                    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Settings</h6>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.register') }}" class="nav-link {{ request()->route()->action['prefix'] == 'admin/register' ? "active" : '' }}">
                        <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fal fa-user-plus"></i>
                        </div>
                        <span class="nav-link-text ms-1">Register</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->action['prefix'] == 'admin/homepage' ? "active" : '' }}" href="#users-sub-menu" aria-controls="users-sub-menu" role="button" aria-expanded="false" data-bs-toggle="collapse">
                        <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fal fa-home-alt"></i>
                        </div>
                        <span class="nav-link-text ms-1">Homepage</span>
                    </a>
                    <div class="collapse {{ request()->route()->action['prefix'] == 'admin/homepage' ? "show" : '' }} " id="users-sub-menu">
                        <ul class="nav ms-4 ps-3">
                            <li class="nav-item {{ request()->route()->action['as'] == 'admin.homepage.sections' ? "active" : '' }}">
                                <a class="nav-link" href="{{ route('admin.homepage.sections') }}">
                                    <span class="sidenav-normal"> Sections </span>
                                </a>
                            </li>
                            <li class="nav-item {{ request()->route()->action['as'] == 'admin.homepage.addSection' ? "active" : '' }}">
                                <a class="nav-link " href="{{ route('admin.homepage.addSection') }}">
                                    <span class="sidenav-mini-icon"> A </span>
                                    <span class="sidenav-normal"> Add Homepage Section </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->route()->action['prefix'] == 'admin/email' ? "active" : '' }}" href="#email-sub-menu" aria-controls="email-sub-menu" role="button" aria-expanded="false" data-bs-toggle="collapse">
                        <div class="icon-sm icon shadow border-radius-md text-center d-flex align-items-center justify-content-center  me-2">
                            <i class="fal fa-mail-bulk"></i>
                        </div>
                        <span class="nav-link-text ms-1">Email</span>
                    </a>
                    <div class="collapse {{ request()->route()->action['prefix'] == 'admin/email' ? "show" : '' }} " id="email-sub-menu">
                        <ul class="nav ms-4 ps-3">
                            <li class="nav-item {{ request()->route()->action['as'] == 'admin.pages.email.listings' ? "active" : '' }}">
                                <a class="nav-link" href="{{ route('admin.email.emailListings') }}">
                                    <span class="sidenav-normal"> Email Listings </span>
                                </a>
                            </li>
                            <li class="nav-item {{ request()->route()->action['as'] == 'admin.pages.email.sendemail' ? "active" : '' }}">
                                <a class="nav-link " href="{{ route('admin.email.sendEmail') }}">
                                    <span class="sidenav-mini-icon"> A </span>
                                    <span class="sidenav-normal"> Send Emails </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
@endif
