@extends('page_home.base.base')

@section('slide')
	@include('page_home.base.slide_index')
@endsection

@section('content')
	<div class="col-sm-8 main-content">
        @foreach($left_videos as $left_video)
            @include('page_home.left_video', ['carousels' => $left_video])
        @endforeach

        <div class="row video-section meta-maxwidth-360">
            <div class="col-sm-12 section-header">
                <h3><i class="fa fa-play"></i> Sports Videos</h3>
            </div>
            <!-- 2 columns -->

            <div class="col-sm-6 item responsive-height">
                <div class="item-img">
                    <a href="http://videotube.marstheme.com/video/awesome-film-perfomance/"
                       title="Awesome Film Perfomance"><img width="360" height="240"
                                                            src="http://videotube.marstheme.com/wp-content/uploads/2014/09/ZLSw0SXxThSrkXRIiCdT_DSC_0345-360x240.jpg"
                                                            class="img-responsive wp-post-image" alt=""
                                                            srcset="http://videotube.marstheme.com/wp-content/uploads/2014/09/ZLSw0SXxThSrkXRIiCdT_DSC_0345-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/09/ZLSw0SXxThSrkXRIiCdT_DSC_0345-300x199.jpg 300w, http://videotube.marstheme.com/wp-content/uploads/2014/09/ZLSw0SXxThSrkXRIiCdT_DSC_0345.jpg 1024w, http://videotube.marstheme.com/wp-content/uploads/2014/09/ZLSw0SXxThSrkXRIiCdT_DSC_0345-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2014/09/ZLSw0SXxThSrkXRIiCdT_DSC_0345-750x498.jpg 750w"
                                                            sizes="(max-width: 360px) 100vw, 360px"/></a> <a
                        href="http://videotube.marstheme.com/video/awesome-film-perfomance/">
                    <div class="img-hover"></div>
                </a>
                </div>
                <h3><a href="http://videotube.marstheme.com/video/awesome-film-perfomance/">Awesome Film
                    Perfomance</a></h3>

                <div class="meta"><span class="date">3 years ago</span><span class="views"><i class="fa fa-eye"></i>12859</span><span
                        class="heart"><i class="fa fa-heart"></i>2304</span>
                    <span class="fcomments"><i class="fa fa-comments"></i>7</span>

                </div>
            </div>

            <div class="col-sm-6 item responsive-height">
                <div class="item-img">
                    <a href="http://videotube.marstheme.com/video/hd-music-nexus-playlist/"
                       title="HD Music Nexus Playlist"><img width="360" height="240"
                                                            src="http://videotube.marstheme.com/wp-content/uploads/2017/05/hd-music-nexus-playlist-360x240.jpg"
                                                            class="img-responsive wp-post-image" alt=""
                                                            srcset="http://videotube.marstheme.com/wp-content/uploads/2017/05/hd-music-nexus-playlist-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2017/05/hd-music-nexus-playlist-295x197.jpg 295w"
                                                            sizes="(max-width: 360px) 100vw, 360px"/></a> <a
                        href="http://videotube.marstheme.com/video/hd-music-nexus-playlist/">
                    <div class="img-hover"></div>
                </a>
                </div>
                <h3><a href="http://videotube.marstheme.com/video/hd-music-nexus-playlist/">HD Music Nexus
                    Playlist</a></h3>

                <div class="meta"><span class="date">3 years ago</span><span class="views"><i class="fa fa-eye"></i>12752</span><span
                        class="heart"><i class="fa fa-heart"></i>2496</span>
                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                </div>
            </div>

            <div class="col-sm-6 item responsive-height">
                <div class="item-img">
                    <a href="http://videotube.marstheme.com/video/wonderfull-chill-out-music-love/"
                       title="Wonderfull Chill Out Music Love"><img width="360" height="240"
                                                                    src="http://videotube.marstheme.com/wp-content/uploads/2014/04/wonderfull-chill-out-music-love-360x240.jpg"
                                                                    class="img-responsive wp-post-image" alt=""
                                                                    srcset="http://videotube.marstheme.com/wp-content/uploads/2014/04/wonderfull-chill-out-music-love-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/04/wonderfull-chill-out-music-love-295x197.jpg 295w"
                                                                    sizes="(max-width: 360px) 100vw, 360px"/></a> <a
                        href="http://videotube.marstheme.com/video/wonderfull-chill-out-music-love/">
                    <div class="img-hover"></div>
                </a>
                </div>
                <h3><a href="http://videotube.marstheme.com/video/wonderfull-chill-out-music-love/">Wonderfull Chill
                    Out Music Love</a></h3>

                <div class="meta"><span class="date">3 years ago</span><span class="views"><i class="fa fa-eye"></i>15147</span><span
                        class="heart"><i class="fa fa-heart"></i>808</span>
                    <span class="fcomments"><i class="fa fa-comments"></i>2</span>

                </div>
            </div>

            <div class="col-sm-6 item responsive-height">
                <div class="item-img">
                    <a href="http://videotube.marstheme.com/video/winter-olympics-2014/"
                       title="Winter Olympics 2014"><img width="360" height="240"
                                                         src="http://videotube.marstheme.com/wp-content/uploads/2014/03/sport2-360x240.jpg"
                                                         class="img-responsive wp-post-image" alt=""
                                                         srcset="http://videotube.marstheme.com/wp-content/uploads/2014/03/sport2-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/03/sport2-295x197.jpg 295w"
                                                         sizes="(max-width: 360px) 100vw, 360px"/></a> <a
                        href="http://videotube.marstheme.com/video/winter-olympics-2014/">
                    <div class="img-hover"></div>
                </a>
                </div>
                <h3><a href="http://videotube.marstheme.com/video/winter-olympics-2014/">Winter Olympics 2014</a>
                </h3>

                <div class="meta"><span class="date">3 years ago</span><span class="views"><i class="fa fa-eye"></i>5338</span><span
                        class="heart"><i class="fa fa-heart"></i>217</span>
                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                </div>
            </div>
        </div>
        <!-- /#carousel-->

        <div id="carousel-latest-mars-mainvideo-widgets-5"
             class="carousel carousel-mars-mainvideo-widgets-5 slide video-section video-sectionltr"
             data-ride="carousel">
            <div class="section-header">
                <h3><i class="fa fa-play"></i> Gaming Videos</h3>
                <ol class="carousel-indicators section-nav">
                    <li data-target="#carousel-latest-mars-mainvideo-widgets-5" data-slide-to="0"
                        class="bullet active"></li>
                    <li data-target="#carousel-latest-mars-mainvideo-widgets-5" data-slide-to="1"
                        class="bullet"></li>
                    <li data-target="#carousel-latest-mars-mainvideo-widgets-5" data-slide-to="2"
                        class="bullet"></li>
                </ol>
            </div>
            <!-- 2 columns -->
            <!-- 1 colum -->
            <div class="gaming-wrapper">
                <div class="carousel-inner carousel-mars-mainvideo-widgets-5">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/hd-music-nexus-playlist/"
                                       title="HD Music Nexus Playlist"><img width="295" height="197"
                                                                            src="http://videotube.marstheme.com/wp-content/uploads/2017/05/hd-music-nexus-playlist-295x197.jpg"
                                                                            class="img-responsive wp-post-image"
                                                                            alt=""
                                                                            srcset="http://videotube.marstheme.com/wp-content/uploads/2017/05/hd-music-nexus-playlist-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2017/05/hd-music-nexus-playlist-360x240.jpg 360w"
                                                                            sizes="(max-width: 295px) 100vw, 295px"/></a>
                                    <a href="http://videotube.marstheme.com/video/hd-music-nexus-playlist/">
                                        <div class="img-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-2132">
                                <h3><a title="HD Music Nexus Playlist"
                                       href="http://videotube.marstheme.com/video/hd-music-nexus-playlist/">HD Music
                                    Nexus Playlist</a></h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>12752</span><span class="heart"><i
                                        class="fa fa-heart"></i>2496</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Lorem ipsum dolor sit amet, erant complectitur ea nec, no sea vide nullam, ne
                                    appareat quaerendum vel. Cu meliore accusata vis, nam facer evertitur cu, id
                                    facilisi abhorreant per. Putant animal eu sea, ne quot nihil mediocritatem cum,
                                    cu ius torquatos dissentiet contentiones. Eos ex propriae invidunt accusamus, in
                                    vidit deterruisset eum, everti ponderum suavitate</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/hd-music-nexus-playlist/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/titanfall-launch-trailer/"
                                       title="Titanfall Launch Trailer"><img width="295" height="197"
                                                                             src="http://videotube.marstheme.com/wp-content/uploads/2017/05/titanfall-launch-trailer-295x197.jpg"
                                                                             class="img-responsive wp-post-image"
                                                                             alt=""
                                                                             srcset="http://videotube.marstheme.com/wp-content/uploads/2017/05/titanfall-launch-trailer-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2017/05/titanfall-launch-trailer-360x240.jpg 360w"
                                                                             sizes="(max-width: 295px) 100vw, 295px"/></a>
                                    <a href="http://videotube.marstheme.com/video/titanfall-launch-trailer/">
                                        <div class="img-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-1721">
                                <h3><a title="Titanfall Launch Trailer"
                                       href="http://videotube.marstheme.com/video/titanfall-launch-trailer/">Titanfall
                                    Launch Trailer</a></h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>10545</span><span class="heart"><i
                                        class="fa fa-heart"></i>1031</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Lorem ipsum dolor sit amet, erant complectitur ea nec, no sea vide nullam, ne
                                    appareat quaerendum vel. Cu meliore accusata vis, nam facer evertitur cu, id
                                    facilisi abhorreant per. Putant animal eu sea, ne quot nihil mediocritatem cum,
                                    cu ius torquatos dissentiet contentiones. Eos ex propriae invidunt accusamus, in
                                    vidit deterruisset eum, everti ponderum suavitate [&hellip;]</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/titanfall-launch-trailer/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/trials-frontier/"
                                       title="Trials Frontier Motorcycle Game"><img width="295" height="197"
                                                                                    src="http://videotube.marstheme.com/wp-content/uploads/2014/03/game3-295x197.jpg"
                                                                                    class="img-responsive wp-post-image"
                                                                                    alt=""
                                                                                    srcset="http://videotube.marstheme.com/wp-content/uploads/2014/03/game3-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game3-360x240.jpg 360w"
                                                                                    sizes="(max-width: 295px) 100vw, 295px"/></a>
                                    <a href="http://videotube.marstheme.com/video/trials-frontier/">
                                        <div class="img-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-199">
                                <h3><a title="Trials Frontier Motorcycle Game"
                                       href="http://videotube.marstheme.com/video/trials-frontier/">Trials Frontier
                                    Motorcycle Game</a></h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>5391</span><span class="heart"><i
                                        class="fa fa-heart"></i>117</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Aliquam erat volutpat. Maecenas convallis pharetra quam id hendrerit. Class
                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos. Fusce dapibus sapien sed tellus malesuada laoreet. Aliquam non magna
                                    vitae ante egestas faucibus sit amet et massa. Sed dictum eros vel faucibus
                                    condimentum. Vivamus rutrum tincidunt odio, sit amet volutpat urna lacinia</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/trials-frontier/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/skyrim/" title="Skyrim"><img
                                            width="295" height="197"
                                            src="http://videotube.marstheme.com/wp-content/uploads/2014/03/game2-295x197.jpg"
                                            class="img-responsive wp-post-image" alt=""
                                            srcset="http://videotube.marstheme.com/wp-content/uploads/2014/03/game2-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game2-300x200.jpg 300w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game2-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game2.jpg 610w"
                                            sizes="(max-width: 295px) 100vw, 295px"/></a> <a
                                        href="http://videotube.marstheme.com/video/skyrim/">
                                    <div class="img-hover"></div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-52">
                                <h3><a title="Skyrim" href="http://videotube.marstheme.com/video/skyrim/">Skyrim</a>
                                </h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>5021</span><span class="heart"><i
                                        class="fa fa-heart"></i>55</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Aenean feugiat in ante et blandit. Vestibulum posuere molestie risus, ac interdum
                                    magna porta non. Pellentesque rutrum fringilla elementum. Curabitur tincidunt
                                    porta lorem vitae accumsan. Pellentesque habitant morbi tristique senectus et
                                    netus et malesuada fames ac turpis egestas. Donec ac euismod turpis. Nullam
                                    tincidunt orci nec eros tincidunt ultricies. Phasellus congue ante mi, eu
                                    bibendum [&hellip;]</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/skyrim/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/wow-retrospective/"
                                       title="World of Warcraft Retrospective"><img width="295" height="197"
                                                                                    src="http://videotube.marstheme.com/wp-content/uploads/2014/03/game5-295x197.jpg"
                                                                                    class="img-responsive wp-post-image"
                                                                                    alt=""
                                                                                    srcset="http://videotube.marstheme.com/wp-content/uploads/2014/03/game5-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game5-300x199.jpg 300w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game5-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game5.jpg 700w"
                                                                                    sizes="(max-width: 295px) 100vw, 295px"/></a>
                                    <a href="http://videotube.marstheme.com/video/wow-retrospective/">
                                        <div class="img-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-48">
                                <h3><a title="World of Warcraft Retrospective"
                                       href="http://videotube.marstheme.com/video/wow-retrospective/">World of
                                    Warcraft Retrospective</a></h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>4122</span><span class="heart"><i
                                        class="fa fa-heart"></i>26</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend
                                    fermentum velit. Aliquam erat volutpat. Duis cursus enim ante, sed tristique
                                    orci luctus ac. Nulla euismod nisi sed aliquam fermentum. Donec tempus sem
                                    sollicitudin velit gravida pharetra. Integer id lacinia risus, a convallis
                                    lorem. Fusce quis elit blandit, luctus felis in, euismod arcu. Integer faucibus
                                    [&hellip;]</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/wow-retrospective/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/diablo3/"
                                       title="Diablo III: Reaper of Souls"><img width="295" height="197"
                                                                                src="http://videotube.marstheme.com/wp-content/uploads/2014/03/game6-295x197.jpg"
                                                                                class="img-responsive wp-post-image"
                                                                                alt=""
                                                                                srcset="http://videotube.marstheme.com/wp-content/uploads/2014/03/game6-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game6-300x199.jpg 300w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game6-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game6.jpg 700w"
                                                                                sizes="(max-width: 295px) 100vw, 295px"/></a>
                                    <a href="http://videotube.marstheme.com/video/diablo3/">
                                        <div class="img-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-46">
                                <h3><a title="Diablo III: Reaper of Souls"
                                       href="http://videotube.marstheme.com/video/diablo3/">Diablo III: Reaper of
                                    Souls</a></h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>4246</span><span class="heart"><i
                                        class="fa fa-heart"></i>13</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend
                                    fermentum velit. Aliquam erat volutpat. Duis cursus enim ante, sed tristique
                                    orci luctus ac. Nulla euismod nisi sed aliquam fermentum. Donec tempus sem
                                    sollicitudin velit gravida pharetra. Integer id lacinia risus, a convallis
                                    lorem. Fusce quis elit blandit, luctus felis in, euismod arcu. Integer faucibus
                                    [&hellip;]</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/diablo3/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/assassins-creed/"
                                       title="Assassin&#8217;s Creed 4"><img width="295" height="197"
                                                                             src="http://videotube.marstheme.com/wp-content/uploads/2014/03/game10-295x197.jpg"
                                                                             class="img-responsive wp-post-image"
                                                                             alt=""
                                                                             srcset="http://videotube.marstheme.com/wp-content/uploads/2014/03/game10-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game10-300x199.jpg 300w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game10-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game10.jpg 640w"
                                                                             sizes="(max-width: 295px) 100vw, 295px"/></a>
                                    <a href="http://videotube.marstheme.com/video/assassins-creed/">
                                        <div class="img-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-36">
                                <h3><a title="Assassin&#8217;s Creed 4"
                                       href="http://videotube.marstheme.com/video/assassins-creed/">Assassin&#8217;s
                                    Creed 4</a></h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>4604</span><span class="heart"><i
                                        class="fa fa-heart"></i>42</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend
                                    fermentum velit. Aliquam erat volutpat. Duis cursus enim ante, sed tristique
                                    orci luctus ac. Nulla euismod nisi sed aliquam fermentum. Donec tempus sem
                                    sollicitudin velit gravida pharetra. Integer id lacinia risus, a convallis
                                    lorem. Fusce quis elit blandit, luctus felis in, euismod arcu. Integer faucibus
                                    [&hellip;]</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/assassins-creed/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/destiny/"
                                       title="New Destiny Trailer"><img width="295" height="197"
                                                                        src="http://videotube.marstheme.com/wp-content/uploads/2014/03/game1-295x197.jpg"
                                                                        class="img-responsive wp-post-image" alt=""
                                                                        srcset="http://videotube.marstheme.com/wp-content/uploads/2014/03/game1-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game1-300x200.jpg 300w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game1-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game1.jpg 610w"
                                                                        sizes="(max-width: 295px) 100vw, 295px"/></a>
                                    <a href="http://videotube.marstheme.com/video/destiny/">
                                        <div class="img-hover"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-34">
                                <h3><a title="New Destiny Trailer"
                                       href="http://videotube.marstheme.com/video/destiny/">New Destiny Trailer</a>
                                </h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>9247</span><span class="heart"><i
                                        class="fa fa-heart"></i>212</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend
                                    fermentum velit. Aliquam erat volutpat. Duis cursus enim ante, sed tristique
                                    orci luctus ac. Nulla euismod nisi sed aliquam fermentum. Donec tempus sem
                                    sollicitudin velit gravida pharetra. Integer id lacinia risus, a convallis
                                    lorem. Fusce quis elit blandit, luctus felis in, euismod arcu. Integer faucibus
                                    [&hellip;]</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/destiny/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 item list">
                                <div class="item-img">
                                    <a href="http://videotube.marstheme.com/video/zelda/" title="Zelda"><img
                                            width="295" height="197"
                                            src="http://videotube.marstheme.com/wp-content/uploads/2014/03/game7-295x197.jpg"
                                            class="img-responsive wp-post-image" alt=""
                                            srcset="http://videotube.marstheme.com/wp-content/uploads/2014/03/game7-295x197.jpg 295w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game7-300x199.jpg 300w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game7-360x240.jpg 360w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game7-750x499.jpg 750w, http://videotube.marstheme.com/wp-content/uploads/2014/03/game7.jpg 800w"
                                            sizes="(max-width: 295px) 100vw, 295px"/></a> <a
                                        href="http://videotube.marstheme.com/video/zelda/">
                                    <div class="img-hover"></div>
                                </a>
                                </div>
                            </div>
                            <div class="col-sm-7 item list mars-mainvideo-widgets-5-26">
                                <h3><a title="Zelda" href="http://videotube.marstheme.com/video/zelda/">Zelda</a>
                                </h3>

                                <div class="meta"><span class="date">3 years ago</span><span class="views"><i
                                        class="fa fa-eye"></i>3562</span><span class="heart"><i
                                        class="fa fa-heart"></i>12</span>
                                    <span class="fcomments"><i class="fa fa-comments"></i>0</span>

                                </div>
                                <p>Lorem ipsum dolor sit amet, erant complectitur ea nec, no sea vide nullam, ne
                                    appareat quaerendum vel. Cu meliore accusata vis, nam facer evertitur cu, id
                                    facilisi abhorreant per. Putant animal eu sea, ne quot nihil mediocritatem cum,
                                    cu ius torquatos dissentiet contentiones. Eos ex propriae invidunt accusamus, in
                                    vidit deterruisset eum, everti ponderum suavitate [&hellip;]</p>

                                <p>
                                    <a href="http://videotube.marstheme.com/video/zelda/"><i
                                            class="fa fa-play-circle"></i>Watch Video</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end 1 colum -->
            <!-- 4/6 columns -->
        </div><!-- /#carousel-->

    </div><!-- /.video-section -->
@endsection