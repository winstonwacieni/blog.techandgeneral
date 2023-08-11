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
                        <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                            <img class="img-fluid" src="{{ asset('img/demopic/coding.jpg') }}" alt="A guy coding">
                        </a>
                        <div class="card-block">
                            <h2 class="card-title">
                                <a href="{{ route('article.show', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                            </h2>
                            <h4 class="card-text">{{ $article->excerpt }}</h4>
                            <div class="metafooter">
                                <div class="wrapfooter">
                                    <span class="meta-footer-thumb">
                                        <a href="{{ route('author.show', ['id' => $article->author->id]) }}">
                                            @php
                                                // An array containing the available default options for Gravatar.
                                                $defaultOptions = ['monsterid', 'wavatar', 'robohash', 'retro'];
                                                // Generate a random index from the $defaultOptions array.
                                                $randomIndex = array_rand($defaultOptions);
                                                // Get the actual random option based on the random index.
                                                $randomOption = $defaultOptions[$randomIndex];
                                            @endphp
                                            <img
                                                src="https://www.gravatar.com/avatar/{{ md5($article->author->id) }}?d={{ $randomOption }}&s=200"
                                                alt="Avatar"
                                                class="author-thumb">
                                        </a>
                                    </span>
                                    <span class="author-meta">
                                        <span class="post-name">
                                            <a style="text-decoration: none" href="{{ route('author.show', ['id' => $article->author->id]) }}">{{ $article->author->name }}</a>
                                        </span>
                                        <br>
                                        <span class="post-date">{{ ($article->created_at)->diffForHumans() }}</span>
                                        <span class="dot"></span><span class="post-read">5 min read</span>
                                    </span>
                                    <span class="post-read-more">
                                     <form
                                         action="{{ route('bookmarks.bookmark', ['article' => $article->id]) }}"
                                         method="POST">
                                        @csrf
                                        <button type="submit" class="bookmark-button" style="background: none; border: none; cursor: pointer;">
                                            <svg width="25" height="25" viewbox="0 0 25 25">
                                                <path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
