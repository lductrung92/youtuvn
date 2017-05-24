@extends('page_home.base.base')

@section('content')
<div id="page">
	<div class="featured-posts">
        <div class="featured-small">
            @foreach($sl_video_left as $video) 
            <div class="featured-post featured-post-2">
                <a href="{{ $video->alias }}.html" title="{{ $video->title }}" class="featured-thumbnail">
                    <img width="300" height="165" src="https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg" class="attachment-video-slider-small size-video-slider-small wp-post-image" alt="" title="" />
                    <span class="watchlater watchlater-28" data-postid="28">Xem ngay</span>                                        
                    <span class="play-btn">
                        <i class="fa fa-play"></i>
                    </span>
                    <header>
                        <div class="header-featured">
                            <h2 class="title">
                                {{ $video->title }}                                           
                            </h2>
                            <span class="duration">{{ $video->count_Video }} video</span>
                        </div>
                    </header><!--.header-->
                </a>
            </div>
            @endforeach
        </div><!--.featured-small-->

        <div class="featured-small">
            @foreach($sl_video_right as $video) 
            <div class="featured-post featured-post-2">
                <a href="{{ $video->alias }}.html" title="{{ $video->title }}" class="featured-thumbnail">
                    <img width="300" height="165" src="https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg" class="attachment-video-slider-small size-video-slider-small wp-post-image" alt="" title="" />
                    <span class="watchlater watchlater-28" data-postid="28">Xem ngay</span>                                        
                    <span class="play-btn">
                        <i class="fa fa-play"></i>
                    </span>
                    <header>
                        <div class="header-featured">
                            <h2 class="title">
                                {{ $video->title }}                                           
                            </h2>
                            <span class="duration">{{ $video->count_Video }} video</span>
                        </div>
                    </header><!--.header-->
                </a>
            </div>
            @endforeach
        </div><!--.featured-small-->
    </div><!-- .featured-posts -->
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
            
            <!--Start Pagination-->
            {{ $new_videos->links() }}

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