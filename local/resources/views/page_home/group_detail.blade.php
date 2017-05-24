@extends('page_home.base.base')
@section('content')
<div id="page">
    <div class="home-posts-wrap">
        <div class="home-posts home-left ">
            <h2 class="home-title">New Videos</h2>
            @foreach($new_videos as $video)
            <article class="latestPost excerpt" id="post-{{ $video->id }}">
                <header>
                    <div class="home-thumb">
                        <a href="{{ $video->alias }}.html" title="{{ $video->title }}" class="featured-thumbnail">
                            <img  width="200" height="137" src="https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg" class="attachment-video-featured size-video-featured wp-post-image" alt="" title="" srcset="https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg 200w, https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg 105w" sizes="(max-width: 200px) 100vw, 200px" />
                            <span class="watchlater watchlater-27" data-postid="27">Xem ngay</span>   
                            <span class="duration">{{ $video->time_video }}</span>   
                        </a>
                    </div>
                    <h2 class="home-post-title"><a href="{{ $video->alias }}.html">{{ $video->title }}</a></h2>
                    
                </header>
                <div class="home-content">
                    <?php
                        $string = strip_tags($video->description);
                        if (strlen($string) > 100) {
                            $stringCut = substr($string, 0, 100);
                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . ' ...';
                        }
                    ?>
                    {!! $string !!}
                    <div class="views"></div>
                    
                </div>

            </article>
            @endforeach
            
            <!--Start Pagination-->

            <nav class="navigation pagination" role="navigation">
                <h2 class="screen-reader-text">Posts navigation</h2>
                <div class="nav-links"><span class='page-numbers current'>1</span>
                    <a class='page-numbers' href='https://demo.mythemeshop.com/video/page/2/'>2</a>
                    <a class='page-numbers' href='https://demo.mythemeshop.com/video/page/3/'>3</a>
                    <a class='page-numbers' href='https://demo.mythemeshop.com/video/page/4/'>4</a>
                    <a class="next page-numbers" href="https://demo.mythemeshop.com/video/page/2/"><i class="fa fa-angle-right"></i></a></div>
            </nav>            <!--End Pagination-->
        </div><!--.home-posts-left-->

        <div class="home-posts home-right">
            <h2 class="home-title">Most Popular</h2>
            @foreach($most_popular as $video)
                <article class="latestPost excerpt" id="post-{{ $video->id }}">
                <header>
                    <div class="home-thumb">
                        <a href="{{ $video->alias }}.html" title="{{ $video->title }}" class="featured-thumbnail">
                            <img  width="200" height="137" src="https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg" class="attachment-video-featured size-video-featured wp-post-image" alt="" title="" srcset="https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg 200w, https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg 105w" sizes="(max-width: 200px) 100vw, 200px" />
                            <span class="watchlater watchlater-27" data-postid="27">Xem ngay</span>   
                            <span class="duration">{{ $video->time_video }}</span>   
                            <span class="viewCount"><i class="fa fa-eye"></i> {{ number_format($video->viewCount, 0, '.', '.') }}</span>             
                        </a>
                    </div>
                    <h2 class="home-post-title"><a href="{{ $video->alias }}.html">{{ $video->title }}</a></h2>
                    
                </header>
                <div class="home-content">
                    <?php
                        $string = strip_tags($video->description);
                        if (strlen($string) > 100) {
                            $stringCut = substr($string, 0, 100);
                            $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . ' ...';
                        }
                    ?>
                    {!! $string !!}
                    <div class="views"></div>
                    
                </div>

            </article>
            @endforeach
        </div><!--.home-posts-right-->
    </div><!--.home-posts-wrap-->
 </div><!--#page-->
@endsection