@extends(THEME_NP.'layouts.default')

@section('keywords'){{ setting('default_keywords') }}@endsection

@section('description'){{ setting('default_description') }}@endsection

@section('title'){{ Breadcrumbs::pageTitle(' - ', 'search', $keywords) }}@endsection

@section('content')
    <!-- 顶部导航栏 -->
    @widget('navigation_bar', ['view' => 'navigation_bars.head'])
    <!-- 导航条 -->
    @widget('navigation_bar', ['view' => 'navigation_bars.nav'])
    <!-- 题图 -->
    @include(THEME_NP.'layouts.particals.curtain', ['cate_name'=>'搜索'])
    <!-- content -->
    <div class="list_content">
        <div class="container">
            <!-- 侧边导航栏 -->
            <div class="left_nav col-lg-3 col-md-3">
                <ul>
                    <li class="active">
                        <span class="pendant"></span>
                        <a>搜索结果</a>
                        <span class="arrow glyphicon glyphicon-chevron-right"></span>
                    </li>
                </ul>
            </div>
            <div class="main_page col-lg-9 col-md-9">
                <div class="header">
                    <!-- 面包屑导航 -->
                    {{ Breadcrumbs::view('sem.layouts.particals.search_breadcrumbs', 'search', $keywords) }}
                </div>
                <ul class="list">
                    @forelse($posts as $post)
                        <li {!! isset($post->cover) ? 'class="have_img"' : '' !!}>
                            <a href="{!! $post->getPresenter()->url() !!}">
                                <div class="time">
                                    <p class="day">{!! $post->published_at->format('d')!!}</p>
                                    <p>{!! $post->published_at->format('Y.m')!!}</p>
                                </div>
                                @isset($post->cover)
                                    <div class="list_item_img">
                                        <img src="{!! image_url($post->cover, ['w'=>255, 'h'=>110]) !!}" alt="">
                                    </div>
                                @endisset
                                <div class="info">
                                    <h2 class="title">{!! $post->isTop()? '<span class="top">置顶</span>':''!!}{!! $post->title !!}</h2>
                                    <p class="content">
                                        {!! $post->excerpt !!}
                                    </p>
                                </div>
                            </a>
                        </li>
                    @empty
                        <div class="no_data">
                            <div class="line"></div>
                            <img src="{!! cdn('sem/images/no_data.png') !!}" alt="">
                        </div>
                    @endforelse
                </ul>
                <!-- 分页 -->
                @if($posts->count() >0)
                    {!! $posts->links() !!}
                @endif
            </div>
        </div>
    </div>
@endsection
