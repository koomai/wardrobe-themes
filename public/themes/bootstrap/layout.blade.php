<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="http://wardrobecms.com/themes/wardrobe/images/favicon.png">

        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        @if(Config::get('wardrobe-themes::theme') == 'bootstrap')
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        @else
            <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/{{ Config::get('wardrobe-themes::theme') }}/bootstrap.min.css" rel="stylesheet">
        @endif
        <!-- Font Awesome CSS -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
        <!-- Font Themes --> 
        @if(Config::get('wardrobe-themes::fonts'))
            <link href="{{ asset(theme_path('css/fonts/' . Config::get('wardrobe-themes::fonts') . '.css')) }}" 
                rel="stylesheet">
        @endif
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="{{ wardrobe_url('/') }}" title="Home">{{ site_title() }}</a></h1>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="{{ wardrobe_url('/') }}">Home</a></li> -->
                        <li><a href="{{ wardrobe_url('about') }}">About</a></li>
                        <li><a href="{{ wardrobe_url('work') }}">Work</a></li>
                        <li><a href="{{ wardrobe_url('archive') }}">Archives</a></li>
                    </ul>
                </div> <!--/.nav-collapse -->
            </div>
        </div>  <!-- .navbar --> 

        <div class="container">
            <div class="row">
                <section class="col-md-8">
                    @yield('content')
                </section>
                <aside class="col-md-4 visible-lg visible-md">
                    @include(theme_view('inc.aside'))
                </aside>
            </div>
            <!-- Credits (Small Screens only) --> 
            <footer class="visible-xs visible-sm">
                <hr>
                <p class="pull-center">
                    Powered by <a href="http://wardrobecms.com" target="_blank">Wardrobe</a>
                </small>     
            </footer>
        </div><!-- /.container -->
        
        <!-- JavaScript-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="{{ asset(theme_path('js/scripts.js')) }}"></script>
    </body>
</html>