<div class="head_nav">
    <div class="right"></div>
    <div class="container">
        <img class="logo" src="{!! cdn('sem/images/logo.png') !!}">
        <h2 class="nav_title">{!! setting('site_name') !!}</h2>
        <div class="search_box">
            <form action="{{route('frontend.web.search')}}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="请输入搜索关键字">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default" aria-label="Help">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>