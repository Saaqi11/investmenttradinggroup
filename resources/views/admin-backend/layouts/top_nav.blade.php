<nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
    <div class="container-fluid py-1 px-3">
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
            <a href="javascript:;" class="nav-link text-body p-0">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                </div>
            </a>
        </div>
        @include('admin-backend.layouts.breadcrumbs')
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex align-items-center justify-content-center" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav  justify-content-end" id="top-nav-admin" style="list-style-type: none">

                @if(request()->route()->action['as'] === "admin.homepage.addSection" || request()->route()->action['as'] === "admin.homepage.editSection")
                    <li class="nav-item d-flex align-items-center " style="margin-left: 15px">
                        <i class="far fa-long-arrow-left"></i>
                        <a href="{{ route("admin.homepage.sections") }}">
                            <span class="d-sm-inline d-none"> Back to Website Sections</span>
                        </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @endif

                <li class="nav-item d-flex align-items-center">
                    <i class="fal fa-user me-sm-1"></i>
                    Hello! <a href="{{ route("admin.profile") }}"> &nbsp; &nbsp;  {{ \Illuminate\Support\Facades\Auth::user()->name }}</a>
                </li>

                <li class="nav-item d-flex align-items-center " style="margin-left: 15px">
                    <a id="logoutBtn" target="_blank">
                        <span class="d-sm-inline d-none"> Logout</span>
                    </a>
                </li>
                @if(request()->route()->action['as'] !== "admin.homepage.addSection" && request()->route()->action['as'] !== "admin.homepage.editSection")
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
