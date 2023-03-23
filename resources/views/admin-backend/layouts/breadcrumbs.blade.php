<nav aria-label="breadcrumb" style="margin-left: 35px">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        @if(!empty($breadcrumbs))
            @foreach($breadcrumbs as $key => $bread)
                @if($key == count($breadcrumbs) - 1)
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $bread }}</li>
                    @php //$pageName = $bread; @endphp
                @else
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;"> {{ $bread }}</a></li>
                @endif
            @endforeach
        @endif
    </ol>
    <h6 class="font-weight-bolder mb-0"></h6>
</nav>
