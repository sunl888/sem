<!-- 导航栏 -->
<div class="nav">
    <div class="container">
        <ul class="nav_list" id="nav">
            <li>
                <a {!! is_null($navigation->getActiveTopNav())?' class="active"':'' !!} href="{!! route('frontend.web.index')!!}">学院首页
                    <p>Home</p></a>
            </li>
            @foreach($allNav as $category)
                <li>
                    <a title="{!! $category->cate_name !!}" {!! $category->is($navigation->getActiveTopNav())?' class="active"':'' !!} {!! $category->getPresenter()->linkAttribute() !!}>{!! $category->cate_name !!}
                        @isset($category->description)
                            <p>
                                {{$category->description}}
                            </p>
                        @endisset
                    </a>
                    @if($category->hasChildren())
                        <ul class="sub-nav">
                            @foreach($category->children()->ordered()->get() as $children)
                                <li>
                                    <a {!! $children->getPresenter()->linkAttribute() !!}>{!! $children->cate_name !!}
                                        @isset($children->description)
                                            <p>
                                                {{$children->description}}
                                            </p>
                                        @endisset
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>
@push('js')
    <script type="text/javascript">
        $(function () {
            $('#nav>li').hover(function () {
                var $list = $(this).find('.sub-nav');
                $list.css('display', 'block');
                $list.stop().animate({
                    'opacity': 1,
                    'top': '50px'
                }, 200)
            }, function () {
                var $list = $(this).find('.sub-nav');
                $list.stop().animate({
                    'opacity': 0,
                    'top': '80px'
                }, 100, function () {
                    if ($list.css('top') == '80px') {
                        $list.css('display', 'none');
                    }
                })
            });
            // 导航栏
            var $banner = $("#banner");
            var $nav = $('.nav');
            $(window).scroll(function () {
                if ($(window).scrollTop() >= 130) {
                    $nav.css({
                        'position': 'fixed',
                    });
                    $banner.css('marginTop', '65px');
                } else {
                    $nav.css({
                        'position': 'static',
                    });
                    $banner.css('marginTop', '0');
                }
            })
        })
    </script>
@endpush
