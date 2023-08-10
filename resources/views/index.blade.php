@section('content')

    @extends('layouts.main')


    <!-- Begin Site Title
    ================================================== -->
    <div class="container">
        <div class="mainheading">
            <h1 class="sitetitle">The Tech Generalist [TG]</h1>
            <p class="lead">
                let's <em>Tech</em> it higher!
            </p>
        </div>
        <!-- End Site Title
        ================================================== -->

        <!-- Begin Featured
        ================================================== -->
        <section class="featured-posts">
            <div class="section-title">
                <h2><span>Featured</span></h2>
            </div>
            <div class="card-columns listfeaturedtag">

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="post.html">
                                <div class="thumbnail" style="background-image:url(https://imageio.forbes.com/specials-images/imageserve/5f57db71653ff9e8e4d10083/AI--Machine-learning--Hands-of-robot-and-human-touching-on-big-data-network/960x0.jpg?format=jpg&width=960);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">We're living some strange times</a></h2>
                                <h4 class="card-text">Explore the remarkable advancements in AI technology and its potential impact on various industries, from healthcare to finance.</h4>
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
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="post.html">
                                <div class="thumbnail" style="background-image:url(https://imageio.forbes.com/specials-images/imageserve/61e963ebf856dc4e08dafd9b/0x0.jpg?format=jpg&crop=3359,1889,x0,y0,safe&width=1200);">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">Unraveling Cybersecurity Myths: Debunking the Top Misconceptions</a></h2>
                                <h4 class="card-text">Dive into the world of cybersecurity and bust common myths to better understand the challenges and solutions in safeguarding digital assets.</h4>
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
                </div>
                <!--end post -->

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="post.html">
                                <div class="thumbnail" style="background-image:url({{ asset('img/demopic/uganda.png') }});">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">Adventures in Uganda: Embracing Nature's Wonders</a></h2>
                                <h4 class="card-text">Join me on an unforgettable journey through the breathtaking landscapes of Uganda.</h4>
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
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-5 wrapthumbnail">
                            <a href="post.html">
                                <div class="thumbnail" style="background-image:url({{ asset('img/demopic/4.jpg') }});">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7">
                            <div class="card-block">
                                <h2 class="card-title"><a href="post.html">San Francisco at its best view in all seasons</a></h2>
                                <h4 class="card-text">Flying 54,00 feet above it, Trust me I would Know. </h4>
                                <div class="metafooter">
                                    <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://pbs.twimg.com/profile_images/1590968738358079488/IY9Gx6Ok_400x400.jpg" alt="Elon Musk"></a>
								</span>
                                        <span class="author-meta">
								<span class="post-name"><a href="author.html">Elon Musk</a></span><br/>
								<span class="post-date">21 July 2023</span><span class="dot"></span><span class="post-read">2 min read</span>
								</span>
                                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

            </div>
        </section>
        <!-- End Featured
        ================================================== -->

        <!-- Begin List Posts
        ================================================== -->
        <section class="recent-posts">
            <div class="section-title">
                <h2><span>All Articles</span></h2>
            </div>
            <div class="card-columns listrecent">

                <!-- begin post -->
                @foreach($articles as $article)
                    <div class="card">
                        <a href="{{ route('articleshow', ['slug' => $article->slug]) }}">
                            <img class="img-fluid" src="{{ asset('img/demopic/coding.jpg') }}" alt="A guy coding">
                        </a>
                        <div class="card-block">
                            <h2 class="card-title">
                                <a href="{{ route('articleshow', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                            </h2>
                            <h4 class="card-text">{{ $article->excerpt }}</h4>
                            <div class="metafooter">
                                <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="https://gravatar.com/avatar/ef7263b73fcd7754229b28968a2c29c2?s=400&d=robohash&r=x" alt=" python Script"></a>
						</span>
                                    <span class="author-meta">
						<span class="post-name"><a href="author.html">Python Script</a></span><br/>
						<span class="post-date">21 July 2023</span><span class="dot"></span><span class="post-read">5 min read</span>
						</span>
                                    <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end post -->

 {{--               <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="{{ asset('img/demopic/voices-2.jpg') }}" alt="A swahili Man">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Voices of the Unseen: Preserving Endangered Languages in the Digital Age</a></h2>
                        <h4 class="card-text">Why google Swahili keyboards are bad, and why its' your fault</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="https://avatars.dicebear.com/v2/avataaars/ef7263b73fcd7754229b28968a2c29c2.svg" alt="Swahili Girl"></a>
						</span>
                                <span class="author-meta">
						<span class="post-name"><a href="author.html">Swahili Girl</a></span><br/>
						<span class="post-date">2 Mar 2023</span><span class="dot"></span><span class="post-read">4 min read</span>
						</span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="{{ asset('img/demopic/colors.jpg') }}" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">The Psychology of Colors in Web Design</a></h2>
                        <h4 class="card-text">Unraveling the Impact of Hues on Our Emotions</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="https://avatars.dicebear.com/v2/avataaars/214b7ce5a8a87eca8524d0e79d53439b.svg" alt="Mark Zuckerberg"></a>
						</span>
                                <span class="author-meta">
						<span class="post-name"><a href="author.html">Mark Zuckerbarg</a></span><br/>
						<span class="post-date">20 July 2023</span><span class="dot"></span><span class="post-read">6 min read</span>
						</span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="{{ asset('img/demopic/8.jpg') }}" alt="">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Thinking outside the box can help you prosper</a></h2>
                        <h4 class="card-text">The Power of Unconventional Thinking: How Embracing Creativity Drives Prosperity</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="https://avatars.dicebear.com/v2/avataaars/5e9f38c8146628bae7a3cc2e474f4014.svg" alt="Life Coach"></a>
						</span>
                                <span class="author-meta">
						<span class="post-name"><a href="author.html">@Lifecoach</a></span><br/>
						<span class="post-date">3 May 2023</span><span class="dot"></span><span class="post-read">6 min read</span>
						</span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="{{ asset('img/demopic/9.jpg') }}" alt="Real Estate Sideview">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">10 Things you should know about choosing your house</a></h2>
                        <h4 class="card-text">Choosing a house is more than location, as they say in real Estate. As you buy a house you also buy a home...</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="https://avatars.dicebear.com/v2/avataaars/d56c5f9d4c9f8147ce0a457970dd6629.svg" alt="The Realtor"></a>
						</span>
                                <span class="author-meta">
						<span class="post-name"><a href="author.html">The Realtor</a></span><br/>
						<span class="post-date">22 June 2023</span><span class="dot"></span><span class="post-read">8 min read</span>
						</span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end post -->

                <!-- begin post -->
                <div class="card">
                    <a href="post.html">
                        <img class="img-fluid" src="{{ asset('img/demopic/10.jpg') }}" alt="Welcoming gate">
                    </a>
                    <div class="card-block">
                        <h2 class="card-title"><a href="post.html">Visiting the world means learning cultures</a></h2>
                        <h4 class="card-text">Around the Globe in Cultures: Traveling as a Journey of Cultural Education</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="https://avatars.dicebear.com/v2/avataaars/cda62a5df6b0b63e56eddcdce8e7bde5.svg" alt="Sal"></a>
						</span>
                                <span class="author-meta">
						<span class="post-name"><a href="author.html">Eminem Official</a></span><br/>
						<span class="post-date">12 feb 2023</span><span class="dot"></span><span class="post-read">9 min read</span>
						</span>
                                <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <!-- end post -->

            </div>
        </section>
        <!-- End List Posts
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

    </div>
    <!-- /.container -->



@endsection
