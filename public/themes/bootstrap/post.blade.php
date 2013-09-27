@extends(theme_view('layout'))

@section('title')
  {{ $post->title }} - {{ site_title() }}
@stop

@section('content')
    <article class="post">
        <h1>{{ $post->title }}</h1>
        <ul class="tags">
            <li class="date">{{ date("d M, Y", strtotime($post->publish_date)) }}</li>
            @include(theme_view('inc.tags'))
        </ul>
        <div class="content">
            {{ $post->parsed_content }}
        </div>
    </article>
@stop

