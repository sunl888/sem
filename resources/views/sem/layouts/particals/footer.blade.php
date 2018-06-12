<div class="footer_nav">
    <div class="container">
        <div class="contact_us col-md-5 col-lg-5">
            <h3 class="title">联系我们</h3>
            @widget('link', ['type' => 'contact_us','view' => 'links.link'])
        </div>
        <div class="contact_us col-md-5 col-lg-5">
            <h3 class="title">校内链接</h3>
            @widget('link', ['type' => 'friendship','view' => 'links.link'])
        </div>
        @widget('link', ['type' => 'contact_information', 'view' => 'links.email', 'limit' => 2])
    </div>
</div>
<div class="footer_bottom">
    <p>{{setting('copyright')}}</p>
</div>