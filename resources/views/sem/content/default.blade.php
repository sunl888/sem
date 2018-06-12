@extends(THEME_NP.'layouts.default')
@section('keywords'){!! $post->category->getKeywords() !!}@endsection

@section('description'){!! $post->category->getDescription() !!}@endsection

@section('title'){{ $post->title }}@endsection

@section('content')
    <!-- 顶部导航栏 -->
    @widget('navigation_bar', ['view' => 'navigation_bars.head'])
    <!-- 导航条 -->
    @widget('navigation_bar', ['view' => 'navigation_bars.nav'])
    <!-- content -->
    <div class="content_body">
        <div class="container content_page">
            <div class="header">
                <!-- 面包屑导航 -->
                {!! Breadcrumbs::render('post', $post) !!}
            </div>
            <div class="title_container">
                <h1>{!! $post->title !!}</h1>
                <div class="info">
                    <span>{!! $post->published_at->format('Y-m-d H:m:s')!!}</span>
                    <span>阅读量：{!! $post->views_count !!}</span>
                </div>
            </div>
            <div class="body">{!! $post->postContent->content !!}</div>
        </div>
    </div>
@endsection
