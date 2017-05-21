@foreach($carousels as $carousel => $key)
    <div id="carousel-latest-mars-mainvideo{{ $carousel }}" class="carousel carousel-mars-mainvideo{{ $carousel }} slide video-section video-sectionltr" data-ride="carousel">
        <div class="section-header">
            <h3><i class="fa fa-play"></i> {{ $carousel }}</h3>
            <ol class="carousel-indicators section-nav">
                @for($i=0; $i<count($key); $i++)
                <li data-target="#carousel-latest-mars-mainvideo{{ $carousel }}" data-slide-to="{{ $i }}" class="bullet {{ $i==0 ? 'active' : '' }}"></li>
                @endfor
            </ol>
        </div>
                    <!-- 2 columns -->
        <div class="latest-wrapper">
            <div class="row">
                <div class="carousel-inner">
                    @for($i=0; $i<count($key); $i++)
                    <div class="item {{ $i==0 ? 'active' : '' }}">
                        @foreach($key[$i] as $video)
                        <div id="video-main-mars-mainvideo-{{ $carousel }}-{{ $video->id }}" class="col-sm-4 col-xs-6 item responsive-height video-{{ $video->id }}" style="height: 138px;">
                            <div class="item-img">
                                <a title="{{ $video->title }}" href="#">
                                    <img width="230" height="150" src="{{ $video->image }}" class="img-responsive wp-post-image" alt="" srcset="{{ $video->image }} 230w, {{ $video->image }} 165w" sizes="(max-width: 230px) 100vw, 230px">
                                </a> 
                                <a href="#">
                                    <div class="img-hover"></div>
                                </a>
                            </div>
                            <h3><a title="{{ $video->title }}" href="#">{{ $video->title }}</a></h3>

                            <div class="meta">
                                <span class="date">{{ number_format(((strtotime(date('Y-m-d')) - strtotime(date('Y-m-d', strtotime($video->created_at))) ) / (60 * 60 * 24))/30) }} tháng trước</span>
                                <span class="views"><i class="fa fa-eye"></i>{{ number_format($video->viewCount, 0, '.', '.') }}</span>
                                <span class="heart"><i class="fa fa-thumbs-up"></i>{{ number_format($video->likeCount, 0, '.', '.') }}</span>
                                <span class="fcomments"><i class="fa fa-comments"></i>7</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endforeach
