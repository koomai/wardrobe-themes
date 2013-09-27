<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Tags</h3>
    </div>
    <div class="panel-body">
        <ul class="tags">
            @foreach (Wardrobe::tags() as $item)
              @if ($item['tag'] != "")
                <li><a class="label label-default" href="{{ url('/tag/'.$item['tag']) }}">{{ $item['tag'] }}</a></li>
              @endif
            @endforeach
        </ul>
    </div>
</div>