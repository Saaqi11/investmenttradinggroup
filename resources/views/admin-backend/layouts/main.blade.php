@include('admin-backend.layouts.header')
@include('admin-backend.layouts.aside')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('admin-backend.layouts.top_nav')
        <div class="container-fluid py-4">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible text-white" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @yield('content')
        </div>
        <footer class="footer pt-3 mb-4">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
@include('admin-backend.layouts.footer')
@stack('additional-scripts')
