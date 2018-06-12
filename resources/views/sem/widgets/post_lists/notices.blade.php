<a class="more_link" {!! $category->getPresenter()->linkAttribute() !!}>更多</a>
<ul>
    @forelse($posts as $post)
        <li>
            <a href="{!! $post->getPresenter()->url() !!}">
                <div class="time">
                    <p>{!! $post->published_at->format('m-d') !!}</p>
                    <p class="year">{!! $post->published_at->format('Y') !!}</p>
                </div>
                <div class="info">
                    <h3 class="title">{!! $post->title !!}</h3>
                    <p class="content">{!! $post->excerpt !!}</p>
                </div>
            </a>
        </li>
    @empty
        <div class="no_data">
            <img src="{!! cdn('sem/images/no_data.png') !!}" alt="">
        </div>
    @endforelse
</ul>