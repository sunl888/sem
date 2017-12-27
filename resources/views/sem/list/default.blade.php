@extends(THEME_NP.'layouts.default')

@section('keywords'){!! $category->getKeywords() !!}@endsection

@section('description'){!! $category->getDescription() !!}@endsection

@section('title'){{ Breadcrumbs::pageTitle(' - ', 'category', $category) }}@endsection

@section('content')
    <!-- 顶部导航栏 -->
    @widget('navigation_bar', ['view' => 'navigation_bars.head'])
    <!-- 导航条 -->
    @widget('navigation_bar', ['view' => 'navigation_bars.nav'])
    <!-- 题图 -->
    @include(THEME_NP.'layouts.particals.curtain')
    <!-- content -->
    <div class="list_content">
        <div class="container">
            <!-- 侧边导航栏 -->
            @widget('navigation_bar', ['view' => 'navigation_bars.side_nav'])
            <div class="main_page col-lg-9 col-md-9">
                <div class="header">
                    <!-- 面包屑导航 -->
                    {{ Breadcrumbs::render('category', $category) }}
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
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
