<!-- 底部 -->
<div class="footer_nav">
    <div class="container">
        <ul class="footer_nav_list">
            @widget('footer_nav_bar', ['view' => 'navigation_bars.footer_nav', 'category' => '学院概况'])
            @widget('footer_nav_bar', ['view' => 'navigation_bars.footer_nav', 'category' => '中外合作'])
            @widget('footer_nav_bar', ['view' => 'navigation_bars.footer_nav', 'category' => '党建工作'])
            @widget('footer_nav_bar', ['view' => 'navigation_bars.footer_nav', 'category' => '教学管理'])
            @widget('footer_nav_bar', ['view' => 'navigation_bars.footer_nav', 'category' => '科学研究'])
            @widget('footer_nav_bar', ['view' => 'navigation_bars.footer_nav', 'category' => '学生工作'])
        </ul>
    </div>
</div>
<!-- 最底部 -->
<div class="footer_bottom">
    <p>{!! setting('copyright') !!}
        @widget('visitor',['view' => 'visitor.visitor'])
    </p>
</div>
