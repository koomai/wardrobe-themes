@extends(theme_view('layout'))

@section('title')
  Archives - {{ site_title() }}
@stop

@section('content')
  <section>

    {{-- Archive Heading --}}
    {{-- Notice the triple brackets to escape any xss for tags and search term. --}}
    @if (isset($tag))
      <h2 class="title">Tag - {{{ ucfirst($tag) }}}</h2>
    @elseif ($search)
      <h2 class="title">Results for {{{ $search }}}</h2>
    @else
      <h2 class="title">Archives</h2>
    @endif
    <hr>
    @foreach ($posts as $post)
      @include(theme_view('inc.post'))
    @endforeach

    {{ $posts->links() }}

  </section>
@stop
