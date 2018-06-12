<div class="title">
    <h2>教学管理<span>{!! $category->description !!}</span></h2>
    <a {!! $category->getPresenter()->linkAttribute() !!}>更多</a>
</div>
<ul class="content_list">
    @forelse($posts as $post)
        <li>
            <a href="{!! $post->getPresenter()->url() !!}">{!! $post->title !!}</a>
            <span>{!! time_tran($post->published_at) !!}{{--3个小时前--}}</span>
        </li>
    @empty
        <div class="no_data">
            <img src="{!! cdn('sem/images/no_data.png') !!}" alt="">
        </div>
    @endforelse
</ul>