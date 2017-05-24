@extends('page_home.base.base')

@section('content')
	<div id="page" class="single">
        <div class="article rclayout">
            <div id="content_box">
                <div id="post-27"
                     class="g post post-27 type-post status-publish format-video has-post-thumbnail hentry category-funny category-other tag-tag2 tag-tag4 post_format-post-format-video has_thumb">
                    <div id="myList"></div>
                    <header class="main-post-header">
                        <h1 class="title single-title entry-title"><span>{{ $video_detail->title }}</span></h1>
                    </header><!--.headline_area-->

                    <div class="main-article-container">
                        <article class="single_post">
                            <div class="post-single-content box mark-links entry-content">
                                <div class="post-top">
                                    <div class="publish-date">
                                        Xuất bản: {{ $video_detail->created_at }}
                                    </div>
                                    <div class="post-toggle"><i class="fa fa-angle-down"></i></div>
                                </div><!--.post-top-->
                                <div class="togglecontent">
                                    <div class="thecontent">
                                        
                                    </div>

                                    <div class="post-meta">
                                        <span class="post-cat">Thể loại: 
                                            <a href="{{ $tag->alias }}.html" rel="category tag">{{ $tag->title }}</a>, 
                                            <a href="{{ $tag->parent->alias }}.html" rel="category tag">{{ $tag->parent->title }}</a>
                                        </span>
                                        <span class="post-author">Kênh: {{ $video_detail->author }}</span>
                                    </div><!--.post-meta-->
                                </div><!--.togglecontent-->


                                <!-- You can start editing here. -->

                                <div id="comments" class="clearfix">
                                    <div class="cd-tabs">
                                        <nav>
                                            <ul class="cd-tabs-navigation">
                                                <li><a data-content="comments" class="selected" href="#0">4 Comments</a>
                                                </li>
                                                <li><a data-content="fbcomments" href="#0">Facebook Comments</a></li>
                                            </ul> <!-- cd-tabs-navigation -->
                                        </nav>

                                        <ul class="cd-tabs-content">
                                            <li data-content="comments" class="selected">
                                                <ol class="commentlist clearfix">
                                                    <div class="navigation">
                                                        <div class="alignleft"></div>
                                                        <div class="alignright"></div>
                                                    </div>
                                                    <li class="comment even thread-even depth-1" id="li-comment-103">
                                                        <div id="comment-103" itemscope
                                                             itemtype="http://schema.org/UserComments">
                                                            <div class="comment-author vcard">
                                                                <img alt=''
                                                                     src='https://secure.gravatar.com/avatar/e71486d6f8fe2954b12a9a26eaffad45?s=70&#038;d=mm&#038;r=g'
                                                                     srcset='https://secure.gravatar.com/avatar/e71486d6f8fe2954b12a9a26eaffad45?s=140&amp;d=mm&amp;r=g 2x'
                                                                     class='avatar avatar-70 photo' height='70'
                                                                     width='70'/> <span class="fn" itemprop="creator"
                                                                                        itemscope
                                                                                        itemtype="http://schema.org/Person"><span
                                                                    itemprop="name">Lloyd Budd</span></span> <span
                                                                    class="ago">March 26, 2014</span>
                                                                <span class="comment-meta">
                                                            </span>
                                                            </div>
                                                            <div class="commentmetadata">
                                                                <div class="commenttext" itemprop="commentText">
                                                                    <p>This book is a treatise on the theory of ethics,
                                                                        very popular during the Renaissance. The first
                                                                        line of Lorem Ipsum, &#8220;Lorem ipsum dolor
                                                                        sit amet..&#8221;, comes from a line in section
                                                                        1.10.32.</p>
                                                                </div>
                                                                <div class="reply">
                                                                    <a rel='nofollow' class='comment-reply-link'
                                                                       href='https://demo.mythemeshop.com/video/youtube-playlist-full-size-teaser-trailer-of-ant-man/?replytocom=103#respond'
                                                                       onclick='return addComment.moveForm( "comment-103", "103", "respond", "27" )'
                                                                       aria-label='Reply to Lloyd Budd'>Reply</a></div>
                                                            </div>
                                                        </div>
                                                        <!-- WP adds </li> -->
                                                        <ul class="children">
                                                            <li class="comment odd alt depth-2" id="li-comment-106">
                                                                <div id="comment-106" itemscope
                                                                     itemtype="http://schema.org/UserComments">
                                                                    <div class="comment-author vcard">
                                                                        <img alt=''
                                                                             src='https://secure.gravatar.com/avatar/948158aea016a938f8b7fe802d8b3a4b?s=70&#038;d=mm&#038;r=g'
                                                                             srcset='https://secure.gravatar.com/avatar/948158aea016a938f8b7fe802d8b3a4b?s=140&amp;d=mm&amp;r=g 2x'
                                                                             class='avatar avatar-70 photo' height='70'
                                                                             width='70'/> <span class="fn"
                                                                                                itemprop="creator"
                                                                                                itemscope
                                                                                                itemtype="http://schema.org/Person"><span
                                                                            itemprop="name">Suraj</span></span> <span
                                                                            class="ago">March 26, 2014</span>
                                                                        <span class="comment-meta">
                                                            </span>
                                                                    </div>
                                                                    <div class="commentmetadata">
                                                                        <div class="commenttext" itemprop="commentText">
                                                                            <p>The standard chunk of Lorem Ipsum used
                                                                                since the 1500s is reproduced below for
                                                                                those interested.</p>
                                                                        </div>
                                                                        <div class="reply">
                                                                            <a rel='nofollow' class='comment-reply-link'
                                                                               href='https://demo.mythemeshop.com/video/youtube-playlist-full-size-teaser-trailer-of-ant-man/?replytocom=106#respond'
                                                                               onclick='return addComment.moveForm( "comment-106", "106", "respond", "27" )'
                                                                               aria-label='Reply to Suraj'>Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- WP adds </li> -->
                                                            </li><!-- #comment-## -->
                                                        </ul><!-- .children -->
                                                    </li><!-- #comment-## -->
                                                    <li class="comment even thread-odd thread-alt depth-1"
                                                        id="li-comment-104">
                                                        <div id="comment-104" itemscope
                                                             itemtype="http://schema.org/UserComments">
                                                            <div class="comment-author vcard">
                                                                <img alt=''
                                                                     src='https://secure.gravatar.com/avatar/88de7e0be9f793ed162ffa78b9cd4a12?s=70&#038;d=mm&#038;r=g'
                                                                     srcset='https://secure.gravatar.com/avatar/88de7e0be9f793ed162ffa78b9cd4a12?s=140&amp;d=mm&amp;r=g 2x'
                                                                     class='avatar avatar-70 photo' height='70'
                                                                     width='70'/> <span class="fn" itemprop="creator"
                                                                                        itemscope
                                                                                        itemtype="http://schema.org/Person"><span
                                                                    itemprop="name">Alex Shiels</span></span> <span
                                                                    class="ago">March 26, 2014</span>
                                                                <span class="comment-meta">
                                                            </span>
                                                            </div>
                                                            <div class="commentmetadata">
                                                                <div class="commenttext" itemprop="commentText">
                                                                    <p>The standard chunk of Lorem Ipsum used since the
                                                                        1500s is reproduced below for those
                                                                        interested.</p>
                                                                </div>
                                                                <div class="reply">
                                                                    <a rel='nofollow' class='comment-reply-link'
                                                                       href='https://demo.mythemeshop.com/video/youtube-playlist-full-size-teaser-trailer-of-ant-man/?replytocom=104#respond'
                                                                       onclick='return addComment.moveForm( "comment-104", "104", "respond", "27" )'
                                                                       aria-label='Reply to Alex Shiels'>Reply</a></div>
                                                            </div>
                                                        </div>
                                                        <!-- WP adds </li> -->
                                                    </li><!-- #comment-## -->
                                                    <li class="comment odd alt thread-even depth-1" id="li-comment-105">
                                                        <div id="comment-105" itemscope
                                                             itemtype="http://schema.org/UserComments">
                                                            <div class="comment-author vcard">
                                                                <img alt=''
                                                                     src='https://secure.gravatar.com/avatar/407fb36bbf6a01e151680be9f408b5af?s=70&#038;d=mm&#038;r=g'
                                                                     srcset='https://secure.gravatar.com/avatar/407fb36bbf6a01e151680be9f408b5af?s=140&amp;d=mm&amp;r=g 2x'
                                                                     class='avatar avatar-70 photo' height='70'
                                                                     width='70'/> <span class="fn" itemprop="creator"
                                                                                        itemscope
                                                                                        itemtype="http://schema.org/Person"><span
                                                                    itemprop="name">Joseph Scott</span></span> <span
                                                                    class="ago">March 26, 2014</span>
                                                                <span class="comment-meta">
                                                            </span>
                                                            </div>
                                                            <div class="commentmetadata">
                                                                <div class="commenttext" itemprop="commentText">
                                                                    <p>Sections 1.10.32 and 1.10.33 from &#8220;de
                                                                        Finibus Bonorum et Malorum&#8221; by Cicero are
                                                                        also reproduced in their exact original form,
                                                                        accompanied by English versions from the 1914
                                                                        translation by H. Rackham.</p>
                                                                </div>
                                                                <div class="reply">
                                                                    <a rel='nofollow' class='comment-reply-link'
                                                                       href='https://demo.mythemeshop.com/video/youtube-playlist-full-size-teaser-trailer-of-ant-man/?replytocom=105#respond'
                                                                       onclick='return addComment.moveForm( "comment-105", "105", "respond", "27" )'
                                                                       aria-label='Reply to Joseph Scott'>Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- WP adds </li> -->
                                                    </li><!-- #comment-## -->
                                                    <div class="navigation">
                                                        <div class="alignleft"></div>
                                                        <div class="alignright"></div>
                                                    </div>
                                                </ol>

                                                <div id="commentsAdd" class="clearfix">
                                                    <div id="respond" class="box m-t-6">
                                                        <div id="respond" class="comment-respond">
                                                            <h3 id="reply-title" class="comment-reply-title">
                                                                <small><a rel="nofollow" id="cancel-comment-reply-link"
                                                                          href="/video/youtube-playlist-full-size-teaser-trailer-of-ant-man/#respond"
                                                                          style="display:none;">Cancel reply</a></small>
                                                            </h3>
                                                            <form action="https://demo.mythemeshop.com/video/wp-comments-post.php"
                                                                  method="post" id="commentform" class="comment-form">
                                                                <p class="comment-form-comment"><textarea id="comment"
                                                                                                          name="comment"
                                                                                                          cols="45"
                                                                                                          rows="8"
                                                                                                          aria-required="true"
                                                                                                          placeholder="Comment Text*"></textarea>
                                                                </p>
                                                                <p class="comment-form-author"><input id="author"
                                                                                                      name="author"
                                                                                                      type="text"
                                                                                                      placeholder="Name*"
                                                                                                      value=""
                                                                                                      size="30"/></p>
                                                                <p class="comment-form-email"><input id="email"
                                                                                                     name="email"
                                                                                                     type="text"
                                                                                                     placeholder="Email*"
                                                                                                     value=""
                                                                                                     size="30"/></p>
                                                                <p class="comment-form-url"><input id="url" name="url"
                                                                                                   type="text"
                                                                                                   placeholder="Website"
                                                                                                   value="" size="30"/>
                                                                </p>
                                                                <p class="form-submit"><input name="submit"
                                                                                              type="submit" id="submit"
                                                                                              class="submit"
                                                                                              value="Post Comment"/>
                                                                    <input type='hidden' name='comment_post_ID'
                                                                           value='27' id='comment_post_ID'/>
                                                                    <input type='hidden' name='comment_parent'
                                                                           id='comment_parent' value='0'/>
                                                                </p></form>
                                                        </div><!-- #respond -->
                                                    </div>
                                                </div><!--.commentsAdd-->
                                            </li>

                                            <li data-content="fbcomments">
                                                <div class="fb-comments"
                                                     data-href="https://demo.mythemeshop.com/video/youtube-playlist-full-size-teaser-trailer-of-ant-man/"
                                                     data-numposts="5" data-colorscheme="light" data-width="100%">
                                                         
                                                     </div>
                                            </li>
                                        </ul> <!-- cd-tabs-content -->
                                    </div> <!-- cd-tabs -->
                                </div> <!-- cd-tabs -->
                            </div><!--.post-single-content-->
                        </article><!--.single_post-->

                        <div class="related-posts"><h4>Related Posts</h4>
                            <div class="clear">
                                @foreach($related as $video)
                                    <article class="latestPost excerpt" id="post-{{ $video->id }}">
                                        <header>
                                            <div class="home-thumb">
                                                <a href="{{ $video->alias }}.html" title="{{ $video->title }}" class="featured-thumbnail">
                                                    <img  width="200" height="137" src="https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg" class="attachment-video-featured size-video-featured wp-post-image" alt="" title="" srcset="https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg 200w, https://i.ytimg.com/vi/{{ $video->id_video }}/mqdefault.jpg 105w" sizes="(max-width: 200px) 100vw, 200px" />
                                                    <span class="watchlater watchlater-27" data-postid="27">Xem ngay</span>   
                                                                
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
                            </div>
                        </div>            <!-- .related-posts -->
                    </div>
                </div><!--.g post-->
            </div><!--#content_box-->
        </div>
    </div><!--#page-->
@endsection

@section('js')
    <link rel='stylesheet' id='mts_yt_player-css'  href='https://demo.mythemeshop.com/video/wp-content/themes/mts_video/css/youtube-video-player.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='mts_perfect_scroll-css'  href='https://demo.mythemeshop.com/video/wp-content/themes/mts_video/css/perfect-scrollbar.css' type='text/css' media='all' />
    <script type='text/javascript' src='https://demo.mythemeshop.com/video/wp-includes/js/comment-reply.min.js'></script>
    <script type='text/javascript' src='https://demo.mythemeshop.com/video/wp-includes/js/wp-embed.min.js'></script>
    <script type='text/javascript' src='https://demo.mythemeshop.com/video/wp-content/themes/mts_video/js/sticky.js'></script>
    <script type='text/javascript' src='https://demo.mythemeshop.com/video/wp-content/themes/mts_video/js/youtube-video-player.jquery.min.js'></script>
    <script type='text/javascript' src='https://demo.mythemeshop.com/video/wp-content/themes/mts_video/js/perfect-scrollbar.js'></script>
    <script type='text/javascript' src='https://demo.mythemeshop.com/video/wp-content/themes/mts_video/js/jquery.mousewheel.js'></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#myList').youtube_video({
                playlist: '{{ $video_detail->id_playlist }}',
                playlist_type: 'vertical',
                max_results: {{ $video_detail->count_Video }},
                pagination: true,
                continuous: true,
                shuffle: false,
                show_channel_in_title: false,
                share_control: false,
                api_key: 'AIzaSyCdb0_J_yP7N5VMjeh4hSD9N7QKqyemwfw',
                youtube_link_control: false,
                now_playing_text: 'Now Playing',
                load_more_text: 'Load More',
                volume: false,
                autoplay: '',
                force_hd: false,
                show_controls_on_play: false,
                fullscreen_control: true,
                hide_youtube_logo: true,
                show_annotations: false,
                colors: {
                    "controls_bg": "rgba(0,0,0,.9)",
                    "buttons": "rgba(255,255,255,.5)",
                    "buttons_hover": "rgba(255,255,255,1)",
                    "buttons_active": "rgba(255,255,255,1)",
                    "time_text": "#FFFFFF",
                    "bar_bg": "rgba(255,255,255,.5)",
                    "buffer": "rgba(255,255,255,.25)",
                    "fill": "#FFFFFF",
                    "video_title": "#FFFFFF",
                    "video_channel": "#DFF76D",
                    "playlist_overlay": "rgba(0,0,0,.75)",
                    "playlist_title": "#FFFFFF",
                    "playlist_channel": "#DFF76D",
                    "scrollbar": "#FFFFFF",
                    "scrollbar_bg": "rgba(255,255,255,.25)",
                    "load_more_bg": "#000000",
                    "load_more_text": "#FFFFFF"
                },
                on_state_change: function (state) {
                    if (0 == state && jQuery('#mts_video_share_popup').length) {
                        jQuery('#mts_video_share_popup').bPopup();
                    }
                },
                showRelated: ''
            });
        });
    </script>
@endsection