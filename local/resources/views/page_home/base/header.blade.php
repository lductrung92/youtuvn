<header id="site-header">
        <div id="catcher" class="clear" style="height: 70px;"></div>
        <div id="header" class="sticky-navigation">
            <div class="container">
                <div class="logo-wrap">
                    <h1 id="logo" class="image-logo" itemprop="headline">
                        <a href="https://demo.mythemeshop.com/video">
                        <img src="http://democdn.mythemeshop.com/video/files/2014/12/logo1.png" alt="Video" width="100" height="42"></a>
                    </h1><!-- END #logo -->
                </div>

                <div id="secondary-navigation" role="navigation">
                    <a href="#" id="pull" class="toggle-mobile-menu">Menu</a>
                    <nav class="navigation clearfix mobile-menu-wrapper">
                        <ul id="menu-primary-menu" class="menu clearfix">
                            <li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-215">
                                <a href="http://demo.mythemeshop.com/video/"><i class="fa fa-bars"></i> Home</a>
                            </li>
                            @foreach($main_menu_items as $item)
                            <li id="menu-item-{{ $item->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-{{ $item->id }}">
                                <a href="{{ $item->alias }}.html">{{ $item->title }}</a>
                                <ul class="sub-menu">
                                    @if(count($item->childs))
                                        @include('page_home.base.child_menu.child_first', ['childs' => $item->childs])
                                    @endif
                                </ul>
                            </li>
                            @endforeach
                        </ul>																	
                    </nav>
                </div><!--#secondary-navigation-->


                <div class="video-header-url">
                    <div class="box">
                      <div class="container-4">
                        <input type="search" id="search" placeholder="Search..." />
                        <button class="icon"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                </div>
                <div class="header-signbtn">
                    <a href="https://www.facebook.com/MyThemeShop?ref=bookmarks" style="background: #3a5795;">
                        <i class="fa fa-facebook"></i>

                    </a>
                    <a href="https://twitter.com/MyThemeShopTeam" style="background: #55acee;">
                        <i class="fa fa-twitter"></i>

                    </a>
                    <a href="https://plus.google.com/+MyThemeShop" style="background: #dd4b39;">
                        <i class="fa fa-google-plus"></i>

                    </a>

                </div>
            </div><!--.container-->
        </div><!--#header-->
    </header>