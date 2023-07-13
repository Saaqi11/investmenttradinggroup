@include('public-layout.header')
    <div id="wrapper">
        @if(!auth()->user())
            @include("public-layout.top_bar")
        @endif
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
@include('public-layout.footer')
@stack('additional-scripts')
