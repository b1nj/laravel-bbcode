@if($player === 'embed')<embed src="{{$url}}" width="{{config('forum.preferences.bbcode.video_width')}}" height="{{config('forum.preferences.bbcode.video_height')}}" type="application/x-shockwave-flash"></embed>@else<iframe src="{{$url}}" width="{{config('forum.preferences.bbcode.video_width')}}" height="{{config('forum.preferences.bbcode.video_height')}}" frameborder="0"></iframe>@endif