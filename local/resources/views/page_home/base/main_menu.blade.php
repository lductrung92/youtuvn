<div id="navigation-wrapper">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <!-- menu -->
            <ul id="menu-header-menu" class="nav navbar-nav list-inline menu">
                <li id="menu-item-01" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-01 depth">
                    <a href="{{ asset('') }}">Trang Chủ</a>
                </li>

                @foreach($main_menu_items as $item)
                    <li id="menu-item-0{{ $item->id }}" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-0{{ $item->id }} depth">
                        <a href="#">{{ $item->title }} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @if(count($item->childs))
                                @include('page_home.base.child_menu.child_first', ['childs' => $item->childs])
                            @endif
                        </ul>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>