@extends(theme_view('layout'))

@section('title')
  Page Not Found - {{ site_title() }}
@stop

@section('content')
  <section>
    <h2 class="title"><span class="glyphicon glyphicon-exclamation-sign"></span> 404 Error</h2>
    <hr>
    <p>Sorry this page cannot be found.</p>
</section>
@stop

