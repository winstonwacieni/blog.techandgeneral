@extends('layouts.main')

@section('title', $author->name)

@section('content')

    <!-- Begin Top Author Page
================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-md-offset-2">
                <div class="mainheading">
                    <div class="row post-top-meta authorpage">
                        <div class="col-md-10 col-xs-12">
                            <h1>{{ $author->name }}</h1>
                            <span class="author-description">Founder of <a target="_blank" href="#">TG</a>. I professionally develop websites & scripts since the Apocalypse (2023). You can reach me out on the social links below. or email winston.mureithi.i@gmail.com</span>
                            <div class="sociallinks"><a  target="_blank" href="https://dribbble.com/wacieni"><i class="fa fa-dribbble"></i></a> <span class="dot"></span> <a target="_blank" href="https://github.com/winstonwacieni"><i class="fa fa-github"></i></a></div>
                            <a target="_blank" href="https://twitter.com/winstonwacieni" class="btn follow">Follow</a>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <img class="author-thumb" src="https://1.gravatar.com/avatar/12e15b497ba610f117d8c9e31ed351a8431491d403431715c19b626685cae4f4" alt="Winston">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Author Meta
    ================================================== -->

    <!-- begin post -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 m-auto">
                <div class="card-columns listrecent">
                    @foreach($author->articles as $article)
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
                                        <span class="post-name"><a style="text-decoration: none" href="{{ route('author.show', ['id' => $article->author->id]) }}">{{ $article->author->name }}</a></span><br/>
                                        <span class="post-date">21 July 2023</span><span class="dot"></span><span class="post-read">5 min read</span>
                                    </span>
                                        <span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end post -->

    <!-- Begin Author Posts
    ================================================== -->
    {{--<div class="graybg authorpage">
        <div class="container">
            <div class="listrecent listrelated">

                <!-- begin post -->
                <div class="authorpostbox">
                    <div class="card">
                        <a href="author.html">
                            <img class="img-fluid img-thumb" src="https://imageio.forbes.com/specials-images/imageserve/5f57db71653ff9e8e4d10083/AI--Machine-learning--Hands-of-robot-and-human-touching-on-big-data-network/960x0.jpg?format=jpg&width=960" alt="">
                        </a>
                        <div class="card-block">
                            <h2 class="card-title"><a href="post.html">We're living some strange times</a></h2>
                            <h4 class="card-text">Explore the remarkable advancements in AI technology and its potential impact on various industries, from healthcare to finance.</h4>
                            <div class="metafooter">
                                <div class="wrapfooter">
									<span class="meta-footer-thumb">
									<a href="author.html"><img class="author-thumb" src="https://1.gravatar.com/avatar/12e15b497ba610f117d8c9e31ed351a8431491d403431715c19b626685cae4f4" alt="Winston"></a>
									</span>
                                    <span class="author-meta">
									<span class="post-name"><a href="author.html">Sal</a></span><br/>
									<span class="post-date">22 July 2023</span><span class="dot"></span><span class="post-read">6 min read</span>
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
    </div>--}}
    <!-- End Author Posts
    ================================================== -->

    <!-- Begin Twitter Timeline
    ================================================== -->
    <div class="container margtop3rem">
        <a class="twitter-grid" href="https://twitter.com/winstonwacieni">Author's Tweets</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <!-- End Twitter Timeline
    ================================================== -->

    <!-- Begin Footer
    ================================================== -->
    <div class="container">
        <div class="footer">
            <p class="pull-left">
                Copyright &copy; 2023 The TG Blog
            </p>
            <p class="pull-right">
                Web Design  by <a target="_blank" href="https://techandgeneral.com/">techandgeneral.com</a>
            </p>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- End Footer
    ================================================== -->

@endsection
