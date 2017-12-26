<ul class="img_link">
    @foreach($links as $link)
        <li>
            <a href="{!! $link->url !!}">
                <img src="{!! image_url($link->logo, ['w' => 148, 'h' => 100]) !!}">
                <div class="info">
                    <p>{!! $link->name !!}</p>
                    <div class="mask"></div>
                </div>
            </a>
        </li>
    @endforeach
</ul>