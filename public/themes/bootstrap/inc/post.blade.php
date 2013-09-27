<article>
    <h1><a href="{{ wardrobe_url('post/'.$post->slug) }}">{{ $post->title }}</a></h1>
    <ul class="tags">
        <li class="date">{{ date("d M, Y", strtotime($post->publish_date)) }}</li>
        @include(theme_view('inc.tags'))
    </ul>
    <div class="content clearfix">
        @if(Config::get('wardrobe-themes::excerpt'))
            {{ excerpt($post->parsed_content) }}
            <p class="btn-read-more pull-right">
                <a href="{{ wardrobe_url('post/'.$post->slug) }}"> 
                    Read More <i class="icon-chevron-sign-right"></i>
                </a>
            </p>
        @else
            {{ $post->parsed_content }}
        @endif
        
    </div>
    <hr>
</article>
