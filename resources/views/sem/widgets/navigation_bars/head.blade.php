<div class="head_nav">
    <div class="right"></div>
    <div class="container">
        <img class="logo" src="{!! cdn('sem/images/logo.png') !!}">
        <h2 class="nav_title">{!! setting('site_name') !!}</h2>
        <div class="search_box">
            <div class="input-group">
                {{--<form action="{{route('frontend.web.search')}}" method="GET">--}}
                <input type="text" name="keywords" class="form-control" placeholder="请输入搜索关键字">
                <div class="input-group-btn">
                    <button onclick="this.parentElement.submit()" type="button" class="btn btn-default"
                            aria-label="Help">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
                {{--</form>--}}
            </div>
        </div>
    </div>
</div>