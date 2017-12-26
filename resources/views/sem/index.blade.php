@extends(THEME_NP.'layouts.default')

@section('keywords'){{ setting('default_keywords') }}@endsection

@section('description'){{ setting('default_description') }}@endsection

@section('title'){{ setting('site_name') }}@endsection

@section('content')
    <!-- 顶部导航栏 -->
    @widget('navigation_bar', ['view' => 'navigation_bars.head'])
    <!-- 导航条 -->
    @widget('navigation_bar', ['view' => 'navigation_bars.nav'])
    <!-- 轮播图 -->
    @widget('banner', ['type' => 'index_top','view' => 'banners.banner'])
    <!-- 列表 -->
    <div class="content_list">
        <div class="news_body">
            <div class="container">
                <h2 class="title">学院新闻</h2>
                <!-- 学院新闻 -->
                <div class="news_main">
                    @widget('new_img_post', ['category' => '学院新闻', 'view' => 'post_lists.image', 'limit' => 1])
                    <div class="news_list col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        @widget('post_list', ['category' => '学院新闻', 'view' => 'post_lists.news', 'limit' => 4, 'page'
                        =>1])
                    </div>
                    <div class="news_list col-lg-4 col-md-4 col-sm-6 col-xs-12 hidden-sm hidden-xs">
                        @widget('post_list', ['category' => '学院新闻', 'view' => 'post_lists.news', 'limit' => 4, 'page'
                        =>2])
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('sem.layouts.particals.splitter');

    <!-- 其他列表 -->
    <div class="other_list">
        <div class="container">
            <div class="first_list">
                <h2 class="title">教学管理</h2>
                @widget('post_list', ['category' => '教学管理', 'view' => 'post_lists.others', 'limit' => 4, 'page' =>1])
            </div>
            <div class="first_list">
                <h2 class="title">科学研究</h2>
                @widget('post_list', ['category' => '科学研究', 'view' => 'post_lists.others', 'limit' => 4, 'page' =>1])
            </div>
        </div>
    </div>

    <!-- 友情链接 -->
    <div class="friendship_link">
        <div class="container">
            <div class="left col-lg-5 col-md-5">
                <!-- 图片链接 -->
                @widget('link', ['type' => 'img_link','view' => 'links.img_link'])
            </div>
            <div class="right col-lg-6 col-md-6">
                <h3>常用链接</h3>
                @widget('link', ['type' => 'friendship_link','view' => 'links.friendship_link'])
            </div>
        </div>
    </div>
@endsection
