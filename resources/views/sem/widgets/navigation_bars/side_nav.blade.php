<div class="left_nav col-lg-3 col-md-3">
    <ul>
        <li @if($navigation->getActiveNav()->is($navigation->getActiveTopNav()))class="active"@endif>
            <span class="pendant"></span>
            <a {!! $navigation->getActiveTopNav()->getPresenter()->linkAttribute() !!}>{!! $navigation->getActiveTopNav()->cate_name !!}</a>
            <span class="arrow glyphicon glyphicon-chevron-right"></span>
        </li>
        @foreach($navigation->getActiveChildrenNav() as $childNav)
            <li @if($childNav->equals($navigation->getActiveNav()))class="active"@endif>
                <span class="pendant"></span>
                <a title="{!! $childNav->cate_name !!}" {!! $childNav->getPresenter()->linkAttribute() !!}>{!! $childNav->cate_name !!}</a>
                <span class="arrow glyphicon glyphicon-chevron-right"></span>
            </li>
        @endforeach
    </ul>
</div>