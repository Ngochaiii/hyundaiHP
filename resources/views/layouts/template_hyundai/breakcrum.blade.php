<div class="breadcrumbs" vocab="http://schema.org/">
    <div class="container">
        <p id="breadcrumbs">
            <i class="fa fa-home"></i>
            <span>
                <span>
                    <a href="{{ url('/') }}">Trang chủ</a> &raquo;
                    @if(isset($breadcrumbs))
                        @foreach($breadcrumbs as $breadcrumb)
                            @if(!$loop->last)
                                <span><a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a> &raquo;</span>
                            @else
                                <span class="breadcrumb_last" aria-current="page">{{ $breadcrumb['title'] }}</span>
                            @endif
                        @endforeach
                    @endif
                </span>
            </span>
        </p>
    </div>
</div>
