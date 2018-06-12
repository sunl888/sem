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
                <div class="news_main col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2 class="title">学院新闻<span>News</span></h2>
                    @widget('new_img_post', ['category' => '学院新闻', 'view' => 'post_lists.image', 'limit' => 1])
                    <div class="news_list col-lg-6 col-md-6 hidden-sm hidden-xs">
                        @widget('post_list', ['category' => '学院新闻', 'view' => 'post_lists.news', 'limit' => 5])
                    </div>
                </div>
                <div class="news_list col-lg-4 col-md-4 col-sm-6 hidden-xs">
                    <h2 class="title">通知公告<span>Notice</span></h2>
                    @widget('post_list', ['category' => '通知公告', 'view' => 'post_lists.notices', 'limit' => 4])
                </div>
            </div>
        </div>
    </div>
    <!-- 拆分条 -->
    @include('sem.layouts.particals.splitter')

    <!-- 其他列表 -->
    <div class="container text_content">
        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 content_list_box">
            <div class="content_box">
                {{--8个党建工作 => 组织建设 新闻--}}
                @widget('post_list', ['category' => '组织建设', 'view' => 'post_lists.party_building', 'limit' => 8])
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-6 hidden-xs content_list_box">
            <div class="content_box">
                {{--8个教学管理 => 教学动态 新闻--}}
                @widget('post_list', ['category' => '教学动态', 'view' => 'post_lists.teaching_management', 'limit' => 8])
            </div>
        </div>
        <div class="col-md-4 col-lg-4 hidden-sm hidden-xs content_list_box">
            <div class="content_box">
                {{--8个科学研究 => 科研动态 新闻--}}
                @widget('post_list', ['category' => '科研动态', 'view' => 'post_lists.scientific_research', 'limit' => 8])
            </div>
        </div>
    </div>
    <!-- 飘 -->
    @widget('banner', ['type' => 'piao','view' => 'banners.piao'])
@endsection