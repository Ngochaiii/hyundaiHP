<div class="uix_panelMask"></div>
<div class="navbar navbar navbar-default fix-header-home" role="navigation" id="slide-nav">
    <div class="container menu-ipad">
        <div class="navbar-header">
            <button class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo">
                <a href="{{ route('home.index') }}" class="">
                    <img class="logo-mobile-left" src="{{asset('Fe_Hyundai/wp-content/uploads/2022/03/new-logo-01.png')}}"
                        alt="Hyundai Hải Phòng">
                    <img class="logo-mobile-right" src="{{asset('Fe_Hyundai/wp-content/uploads/2022/03/logo-HHP-03.png')}}"
                        alt="logo hyundai Hải Phòng">
                </a>
            </div>
        </div>
        {{-- @dd($menus) --}}
        <div id="slidemenu" class="row">
            <div class="navbar-collapse" id="menu">
                <div class="ui-menu-top">
                    <span>MENU</span>
                    <a class="close-menu" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>
                <div class="menu-menu-1-container">
                    <ul id="primary-menu" class="nav navbar-nav menu nav-menu">
                        @foreach($menus as $menu)
                            @php
                                $hasProductChildren = $menu->children->contains(function ($child) {
                                    return !empty($child->image);
                                });
                            @endphp
                            <li id="menu-item-{{ $menu->id }}"
                                class="menu-item menu-item-type-custom menu-item-object-custom
                                       {{ $menu->link == '/' ? 'current-menu-item current_page_item menu-item-home' : '' }}
                                       {{ $menu->children->isNotEmpty() ? 'menu-item-has-children' : '' }}
                                       {{ $hasProductChildren ? 'car-menu-home' : '' }}">
                                <a href="{{ $menu->link }}" {{ $menu->link == '/' ? 'aria-current="page"' : '' }}>{{ $menu->title }}</a>
                                @if($menu->children->isNotEmpty())
                                    <ul class="sub-menu">
                                        @foreach($menu->children as $child)
                                            @if(!empty($child->image))
                                                <li id="menu-item-{{ $child->id }}"
                                                    class="col-md-2 col-sm-2 col-xs-12 menu-item menu-item-type-post_type menu-item-object-san-pham">
                                                    <a href="{{ $child->link }}">
                                                        <img class="loading lazy" src="{{ $child->image }}" alt="{{ $child->title }}">
                                                        <span class="menu-prd-name">{{ $child->title }}</span>
                                                    </a>
                                                </li>
                                            @else
                                                <li id="menu-item-{{ $child->id }}"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page">
                                                    <a href="{{ $child->link }}">{{ $child->title }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                        @if($hasProductChildren)
                                            <div class="clearfix"></div>
                                        @endif
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
