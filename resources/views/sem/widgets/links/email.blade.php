<div class="email col-md-2 col-lg-2">
    @foreach($links as $link)
        <a href="{!! $link->url !!}" target="_blank">{!! $link->name !!}</a>
    @endforeach
</div>