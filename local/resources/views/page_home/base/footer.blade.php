<footer id="site-footer" class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
        <div class="footer-widgets bottom-footer-widgets widgets-num-3">
            <div class="container">
                <div class="f-widget f-widget-1">
                    <div id="mts_recent_posts_widget-2" class="widget widget_mts_recent_posts_widget horizontal-small">
                        <h3 class="widget-title">xem nhiều nhất</h3>
                        <ul class="advanced-recent-posts">			
                            @foreach() 			
                            <li class="post-box horizontal-small horizontal-container">
                                <div class="horizontal-container-inner">								
                                <div class="post-img">
                                    <a href="https://demo.mythemeshop.com/video/youtube-video-how-to-get-kisses-from-strangers/" title="[YouTube Video] How To Get Kisses From Strangers?">
                                        <img width="105" height="72" src="https://demo.mythemeshop.com/video/files/2014/03/how-to-get-kisses-105x72.jpg" class="attachment-video-widgetthumb size-video-widgetthumb wp-post-image" alt="" title="" srcset="https://demo.mythemeshop.com/video/files/2014/03/how-to-get-kisses-105x72.jpg 105w, https://demo.mythemeshop.com/video/files/2014/03/how-to-get-kisses-200x137.jpg 200w" sizes="(max-width: 105px) 100vw, 105px" />											</a>
                                </div>
                                    <div class="post-data">
                                        <div class="post-data-container">
                                            <div class="post-title">
                                                <a href="https://demo.mythemeshop.com/video/youtube-video-how-to-get-kisses-from-strangers/" title="[YouTube Video] How To Get Kisses From Strangers?">[YouTube Video] How To Get Kisses From&nbsp;&hellip;</a>
                                            </div>
                                            <div class="post-info">
                                                <span class="thetime updated"><i class="fa fa-clock-o"></i> March 13, 2016</span>
                                                <span class="thecomment"><i class="fa fa-comments"></i> 4</span>
                                            </div> <!--.post-info-->
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>                    
                </div>
                <div class="f-widget f-widget-2">
                    <div id="text-3" class="widget widget_text"><h3 class="widget-title">Giới thiệu</h3>			
                        <div class="textwidget">
                            <p>Nội dung chủ yếu của website là tổng hợp các video từ Youtube</p>
                        </div>
                    </div>                    
                </div>
                <div class="f-widget f-widget-3 last">
                    <div id="tag_cloud-2" class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tagcloud">
                            @foreach($main_menu_items as $item)
                                @foreach($item->childs as $child)
                                    <a href='{{ $child->alias }}.html' style='font-size: 22pt;'>{{ $child->title }}</a>
                                @endforeach
                            @endforeach
                        </div>
                    </div>


                    <div id="social-profile-icons-2" class="widget social-profile-icons">
                    <div class="social-profile-icons">
                    <ul class="">
                    <li class="social-facebook"><a title="Facebook" href="#" ><i class="fa fa-facebook"></i></a></li>
                    <li class="social-gplus"><a title="Google+" href="#" ><i class="fa fa-google-plus"></i></a></li>
                    <li class="social-pinterest"><a title="Pinterest" href="#" ><i class="fa fa-pinterest"></i></a></li><li class="social-instagram"><a title="Instagram" href="#" ><i class="fa fa-instagram"></i></a></li><li class="social-dribbble"><a title="Dribbble" href="#" ><i class="fa fa-dribbble"></i></a></li><li class="social-soundcloud"><a title="LinkedIn" href="#" ><i class="fa fa-soundcloud"></i></a></li><li class="social-twitter"><a title="Twitter" href="#" ><i class="fa fa-twitter"></i></a></li><li class="social-vimeo"><a title="Vimeo" href="#" ><i class="fa fa-vimeo-square"></i></a></li><li class="social-stumbleupon"><a title="StumbleUpon" href="#" ><i class="fa fa-stumbleupon"></i></a></li><li class="social-tumblr"><a title="Tumblr" href="#" ><i class="fa fa-tumblr"></i></a></li><li class="social-github"><a title="GitHub" href="#" ><i class="fa fa-github-alt"></i></a></li><li class="social-youtube"><a title="YouTube" href="#" ><i class="fa fa-youtube"></i></a></li><li class="social-foursquare"><a title="FourSquare" href="#" ><i class="fa fa-foursquare"></i></a></li><li class="social-reddit"><a title="Reddit" href="#" ><i class="fa fa-reddit"></i></a></li><li class="social-email"><a title="Email" href="#" ><i class="fa fa-envelope-o"></i></a></li><li class="social-rss"><a title="RSS" href="#" ><i class="fa fa-rss"></i></a></li>
                    </ul>
                    </div>
                    </div>                    
                    </div>
            </div>
        </div><!--.bottom-footer-widgets-->
        <div class="container">
            <div class="copyrights">
                <!--start copyrights-->
                <div class="row" id="copyright-note">
                    <span><a href=" https://demo.mythemeshop.com/video/" title=" Just another MyThemeShop Playground site">Video</a> Copyright &copy; 2017. Theme by <a rel="nofollow" href="http://mythemeshop.com/">MyThemeShop</a></span>
                    <div class="to-top">
                        <ul id="menu-footer-menu" class="menu clearfix"><li id="menu-item-241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241"><a href="https://demo.mythemeshop.com/video/page-left-sidebar/">About Us</a></li>
                            <li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="https://demo.mythemeshop.com/video/contact-page/">Contact Us</a></li>
                            <li id="menu-item-174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174"><a href="https://demo.mythemeshop.com/video/shortcodes/">Shortcodes</a></li>
                        </ul>        <a href="#blog" class="toplink"><i class=" fa fa-chevron-up"></i></a></div>
                </div>
                <!--end copyrights-->
            </div>
        </div><!--.container-->
    </footer><!--#site-footer-->