@extends('layouts.main')

@section('title', ' | ' . $article->title)

@section('content')

    <!-- Begin Article
================================================== -->
    <div class="container">
        <div class="row">

            <x-post.fixed-left-share />

            <!-- Begin Post -->
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="mainheading">

                    <!-- Begin Top Meta -->
                    <div class="row post-top-meta">
                        <div class="col-md-2">
                            <a href="author.html"><img class="author-thumb" src="https://1.gravatar.com/avatar/12e15b497ba610f117d8c9e31ed351a8431491d403431715c19b626685cae4f4?size=128" alt="Winston"></a>
                        </div>
                        <div class="col-md-10">
                            <a class="link-dark" href="author.html">Winston </a><a href="#" class="btn follow">Follow</a>
                            <span class="author-description">Founder of techangeneral.com(TG) and creator of <b>The Tech guy </b> page. His favorite tech stack is material UI</span>
                            <span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
                        </div>
                    </div>
                    <!-- End Top Menta -->

                    <h1 class="posttitle">{{ $article->title }}</h1>

                </div>

                <!-- Begin Featured Image -->
                <img class="featured-image img-fluid" src="{{ asset('img/demopic/colors.jpg') }}" alt="Colors and Hues">
                <!-- End Featured Image -->

                <!-- Begin Post Content -->
                <div class="article-post"  style='text-align: justify'>

                    <p>{!! \Stevebauman\Purify\Facades\Purify::clean($article->body) !!}</p>
                    <blockquote>
                        {{ $article->block_quote }}
                    </blockquote>
                </div>

                <!-- End Post Content -->

                <!-- Begin Tags -->
                <div class="after-post-tags">
                    <ul class="tags">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Psychology</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Web</a></li>
                    </ul>
                </div>
                <!-- End Tags -->

            </div>
            <!-- End Post -->

        </div>
    </div>
    <!-- End Article
    ================================================== -->

    <div class="hideshare"></div>

    <!-- Begin Related
    ================================================== -->
    <div class="graybg">
        <div class="container">
            <div class="row listrecent listrelated">

                <!-- begin post -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="post.html">
                            <img class="img-fluid img-thumb" src="https://imageio.forbes.com/specials-images/imageserve/5f57db71653ff9e8e4d10083/AI--Machine-learning--Hands-of-robot-and-human-touching-on-big-data-network/960x0.jpg?format=jpg&width=960" alt="">
                        </a>
                        <div class="card-block">
                            <h2 class="card-title"><a href="post.html">Explore the remarkable advancements in AI</a></h2>
                            <div class="metafooter">
                                <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://1.gravatar.com/avatar/12e15b497ba610f117d8c9e31ed351a8431491d403431715c19b626685cae4f4?size=128" alt="Winston"></a>
								</span>
                                    <span class="author-meta">
								<span class="post-name"><a href="author.html">Winston</a></span><br/>
								<span class="post-date">19 July 2023</span><span class="dot"></span><span class="post-read">6 min read</span>
								</span>
                                    <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="post.html">
                            <img class="img-fluid img-thumb" src="https://imageio.forbes.com/specials-images/imageserve/61e963ebf856dc4e08dafd9b/0x0.jpg?format=jpg&crop=3359,1889,x0,y0,safe&width=1200" alt="Cyber Security">
                        </a>
                        <div class="card-block">
                            <h2 class="card-title"><a href="post.html">Unraveling Cybersecurity Myths: Debunking the Top Misconceptions</a></h2>
                            <div class="metafooter">
                                <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://gravatar.com/avatar/99ba47bf036419cafca37524008d29c6?s=400&d=robohash&r=x" alt="TG Bot"></a>
							</span>
                                    <span class="author-meta">
							<span class="post-name"><a href="author.html">TG Bot</a></span><br/>
							<span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
							</span>
                                    <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="post.html">
                            <img class="img-fluid img-thumb" src="{{ asset('img/demopic/uganda.png') }}" alt="">
                        </a>
                        <div class="card-block">
                            <h2 class="card-title"><a href="post.html">Adventures in Uganda: Embracing Nature's Wonders</a></h2>
                            <div class="metafooter">
                                <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://gravatar.com/avatar/99ba47bf036419cafca37524008d29c6?s=400&d=identicon&r=x" alt="Sys Admin"></a>
							</span>
                                    <span class="author-meta">
							<span class="post-name"><a href="author.html">Sys Admin TG</a></span><br/>
							<span class="post-date">22 July 2017</span><span class="dot"></span><span class="post-read">6 min read</span>
							</span>
                                    <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

            </div>
        </div>
    </div>
    <!-- End Related Posts
    ================================================== -->

    <!-- Begin Twitter Timeline
    ================================================== -->
    <div class="container margtop3rem">
        <a class="twitter-grid" href="https://twitter.com/winstonwacieni">@winstonwacieni</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <!-- End Twitter Timeline
    ================================================== -->

    <!-- Begin Footer
    ================================================== -->
    <div class="footer">
        <p class="pull-left">
            Copyright &copy; 2023 The Tech Guy
        </p>
        <p class="pull-right">
            Designed by <a target="_blank" href="https://github.com/winstonwacieni">Wacieni Winston</a>
        </p>
        <div class="clearfix">
        </div>
    </div>
    <!-- End Footer
    ================================================== -->


@endsection
