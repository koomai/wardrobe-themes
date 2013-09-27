@extends(theme_view('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('content')

	@foreach ($posts as $post)
        @include(theme_view('inc.post'))
    @endforeach

    {{ $posts->links() }}
@stop
