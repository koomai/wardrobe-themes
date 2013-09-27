@extends(theme_view('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('content')
    <!-- About Me (for small screens) --> 
    <div class="hidden-md hidden-lg">
        @include(theme_view('inc.aside.about'))    
    </div>

	@foreach ($posts as $post)
        @include(theme_view('inc.post'))
    @endforeach

    {{ $posts->links() }}
@stop
