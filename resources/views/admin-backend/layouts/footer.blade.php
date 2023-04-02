

        @if(request()->route()->action['as'] !== "admin.homepage.addSection" && request()->route()->action['as'] !== "admin.homepage.editSection")
            <div class="fixed-plugin">
            <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                Change Theme Style
            </a>
            <div class="card shadow-lg blur">
                <div class="card-header pb-0 pt-3  bg-transparent ">
                    <div class="float-start">
                        <h5 class="mt-3 mb-0">Investment Trading Group Configurator</h5>
                        <p>See our dashboard options.</p>
                    </div>
                    <div class="float-end mt-4">
                        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                            <i class="fa fa-close"></i>
                        </button>
                    </div>

                </div>
                <hr class="horizontal dark my-1">
                <div class="card-body pt-sm-3 pt-0">

                    <div>
                        <h6 class="mb-0">Sidebar Colors</h6>
                    </div>
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors my-2 text-start">
                            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                        </div>
                    </a>

                    <div class="mt-3">
                        <h6 class="mb-0">Sidenav Type</h6>
                        <p class="text-sm">Choose between 2 different sidenav types.</p>
                    </div>
                    <div class="d-flex">
                        <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                        <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                    </div>
                    <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

                    <div class="mt-3">
                        <h6 class="mb-0">Navbar Fixed</h6>
                    </div>
                    <div class="form-check form-switch ps-0">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                    <hr class="horizontal dark mb-1 d-xl-block d-none">
                    <div class="mt-2 d-xl-block d-none">
                        <h6 class="mb-0">Sidenav Mini</h6>
                    </div>
                    <div class="form-check form-switch ps-0 d-xl-block d-none">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
                    </div>
                    <hr class="horizontal dark mb-1 d-xl-block d-none">
                    <div class="mt-2 d-xl-block d-none">
                        <h6 class="mb-0">Light/Dark</h6>
                    </div>
                    <div class="form-check form-switch ps-0 d-xl-block d-none">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                    <hr class="horizontal dark my-sm-4">
                </div>
            </div>
        </div>
        @endif
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $("#logoutBtn").on("click", function () {
                $.ajax({
                    url: "{{ route('logout') }}",
                    type: "GET",
                    success: function(html){
                        window.location.href = "{{ route("login") }}"
                    }
                });
            });
        </script>

        @if(request()->route()->action['as'] === "admin.homepage.addSection" || request()->route()->action['as'] === "admin.homepage.editSection")
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"></script>
            <script src="{{ asset("assets/js/beautify-web/beautify-html.js") }}"></script>
            <script src="{{ asset("assets/js/beautify-web/beautify-css.js") }}"></script>
            <script src="{{ asset("assets/js/beautify-web/beautify.js") }}"></script>
            <script src="{{ asset("assets/js/ace/ace.js") }}" type="text/javascript" charset="utf-8"></script>
            <script src="{{ asset("assets/js/ace/ext-language_tools.js") }}" type="text/javascript" charset="utf-8"></script>
            <script src="https://togetherjs.com/togetherjs-min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
            <script src="{{ asset("assets/js/jstinker.js") }}"></script>
        @else
            <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
            <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/threejs.js') }}"></script>
            <script src="{{ asset('assets/js/plugins/orbit-controls.js') }}"></script>
            <script async defer src="{{ asset('buttons.github.io/buttons.js') }}"></script>
            <script src="{{ asset('assets/js/soft-ui-dashboard.min21cd.js?v=1.0.9') }}"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
        @endif
        <script src="{{ asset("assets/js/toastr.min.js") }}"></script>

    </body>
</html>
