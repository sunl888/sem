<ul>
    @forelse($posts as $post)
        <div class="other_list_item col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <a href="{!! $post->getPresenter()->url() !!}">
                <div class="line"></div>
                @isset($post->cover)
                    <img src="{!! image_url($post->cover, ['w'=>255, 'h'=>110]) !!}" alt="">
                @endisset
                <h3 class="title">{!! $post->title !!}</h3>
                <p class="content">{!! $post->excerpt !!}</p>
            </a>
        </div>
    @empty
        <div class="no_data">
            <div class="line"></div>
            <img src="{!! cdn('sem/images/no_data.png') !!}" alt="">
        </div>
    @endforelse
</ul>