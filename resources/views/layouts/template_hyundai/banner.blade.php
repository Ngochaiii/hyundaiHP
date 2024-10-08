<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- slider -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($slides as $key => $slide)
                    <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($slides as $key => $slide)
                    <div class="item {{ $key == 0 ? 'active' : '' }}">
                        <a href="{{ $slide->link ?? '#' }}">
                            <img class="loading lazy"
                                 data-src="{{ $slide->image }}"
                                 src="{{ asset('Fe_Hyundai/wp-content/themes/hyundaihaiphong/includes/img/pixel.gif') }}"
                                 alt="{{ $slide->title ?? 'Slide ' . ($key + 1) }}">
                        </a>
                        {{-- @if($slide->title || $slide->description)
                            <div class="carousel-caption">
                                <h3>{{ $slide->title }}</h3>
                                <p>{{ $slide->description }}</p>
                            </div>
                        @endif --}}
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- end slider -->

        <!-- end new promotion -->
</div><!-- end div container -->
