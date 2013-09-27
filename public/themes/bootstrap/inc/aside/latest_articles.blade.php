<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Latest Articles</h3>
    </div>
    <ul class="list-group">
        @foreach (Wardrobe::posts(array('limit' => 5)) as $item)
            <li class="list-group-item"> 
                <a href="{{ wardrobe_url('post/'.$item['slug']) }}">{{ $item['title'] }}</a>
            </li>
        @endforeach
    </ul>
</div>