<a class="more_link" {!! $category->getPresenter()->linkAttribute() !!}>更多</a>
<div class="main_news col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <a href="{!! $post->getPresenter()->url() !!}">
        <img class="news_pic" src="{!! image_url($post->cover, ['w'=>210, 'h'=>190]) !!}" alt="">
        <h3 class="title">{!! $post->title !!}</h3>
        <p class="content">{!! $post->excerpt !!}</p>
    </a>
</div>