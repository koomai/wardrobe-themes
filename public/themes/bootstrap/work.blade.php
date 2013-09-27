@extends(theme_view('layout'))

@section('title')
  Work - {{ site_title() }}
@stop

@section('content')
    <section class="work">
        <h1>Work</h1>
        <hr>
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail">
                    <img src="//placehold.it/300&text=Image&text=Image" alt="">
                    <div class="caption">
                        <h3>Thumbnail Caption</h3>
                        <p>Something here</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail">
                    <img src="//placehold.it/300&text=Image" alt="">
                    <div class="caption">
                        <h3>Thumbnail Caption</h3>
                        <p>Something here</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail">
                    <img src="//placehold.it/300&text=Image" alt="">
                    <div class="caption">
                        <h3>Thumbnail Caption</h3>
                        <p>Something here</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail">
                    <img src="//placehold.it/300&text=Image" alt="">
                    <div class="caption">
                        <h3>Thumbnail Caption</h3>
                        <p>Something here</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail">
                    <img src="//placehold.it/300&text=Image" alt="">
                    <div class="caption">
                        <h3>Thumbnail Caption</h3>
                        <p>Something here</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <div class="thumbnail">
                    <img src="//placehold.it/300&text=Image" alt="">
                    <div class="caption">
                        <h3>Thumbnail Caption</h3>
                        <p>Something here</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="list-group">
                  <a href="#" class="list-group-item active">
                    <h4 class="list-group-item-heading">List group item heading</h4>
                    <p class="list-group-item-text">...</p>
                  </a>
                </div>
            </div>
        </div>
    </section>
@stop
