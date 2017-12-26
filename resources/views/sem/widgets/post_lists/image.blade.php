<div class="main_news col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <a href="{!! $post->getPresenter()->url() !!}">
        <img class="news_pic" src="{!! image_url($post->cover, ['w'=>210, 'h'=>190]) !!}" alt="">
        <h3 class="title">{!! $post->title !!}</h3>
        <p class="content">{!! $post->excerpt !!}</p>
    </a>
</div>