@foreach ($post->tags as $item)
@if ($item->tag != "")
  <li><a class="label label-info" href="{{ wardrobe_url('/tag/'.$item->tag) }}"><i class="icon-tag"></i> {{ $item->tag }}</a></li>
@endif
@endforeach
