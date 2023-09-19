@extends("public-layout.main")
<style>
    @foreach ($websiteSections as $section)
    {!! $section->css !!}
    @endforeach
</style>
@section("content")
    @foreach ($websiteSections as $section)
        <section>
            {!! $section->html !!}
        </section>
    @endforeach

@endsection
