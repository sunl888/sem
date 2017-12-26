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
                @widget('post_list', ['category' => $category->cate_name, 'view' => 'post_lists.lists', 'limit' => 6])
            </div>
        </div>
    </div>
@endsection
