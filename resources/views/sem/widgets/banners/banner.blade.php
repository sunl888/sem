@php
    $count = $banners->count();
@endphp
@if($count>0)
    <!-- 轮播图 -->
    <div class="banner" id="banner">
        @php
            // 当banner小于4个时前端轮播图会出现问题，因此在这里手动复制一个banner
            if($count < 4){
                for ($i = 1; $i <= 4-$count; $i++) {
                    $banners->push($banners[$i-1]);
                }
            }
        @endphp
        @foreach($banners as $banner)
            <div>
                <a{!! $banner->getPresenter()->linkAttribute() !!}>
                    <img src="{!! image_url($banner->image, ['w'=>1244, 'h'=>470]) !!}">
                </a>
            </div>
        @endforeach
    </div>

    @push('js')
        <script type="text/javascript">
            // 轮播图
            $(function () {
                var $banner = $("#banner");
                if ($banner.children().length == 0)
                    return;
                $banner.slick({
                    dots: true,
                    infinite: true,
                    centerMode: true,
                    variableWidth: true,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    arrows: false
                });
            })
        </script>
    @endpush
@endif