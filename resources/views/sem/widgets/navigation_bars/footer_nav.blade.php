<li class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
    <h3 class="title">{!! $category !!}</h3>
    <ul class="nav_item">
        @foreach($childNavs as $childNav)
            <li><a {!! $childNav->getPresenter()->linkAttribute() !!}>{!! $childNav->cate_name !!}</a></li>
        @endforeach
    </ul>
</li>