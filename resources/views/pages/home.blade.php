@extends('layouts.default')

@section('header')

<header>
    <section id="masthead" class="text-center mb-5 pb-5">
        <div class="container">
            <h1 class="heading mb-4">Hello! My name is James Gifford and I enjoy working on web projects of all shapes and sizes.</h1>
            <p class="lead text-muted">Whether by writing clean code, implementing user interfaces, or testing new features I can assist with all aspects of web development to create solid web experiences. Please let me know if you need help with your next project.</p>
            <p class="my-5">
                <a href="/work" class="btn btn-lg btn-outline-primary mx-2">Check out my work</a>
                <a href="/contact" class="btn btn-lg btn-primary mx-2">Let's get in touch</a>
            </p>
        </div>
    </section>
</header>

@endsection

@section('content')

<div id="blog-preview" class="my-5 py-5 d-none">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>My Thoughts</h1>
            </div>
        </div>
        
    @foreach ($blogPosts as $post)
        <div class="row my-5">
            <div class="col-md-2 d-none d-md-block">
                <div class="date-icon">
                    <span class="month rounded-top">{{ $post->published_month }}</span>
                    <span class="day">{{ $post->published_day }}</span>
                    <span class="year rounded-bottom">{{ $post->published_year }}</span>
                </div>
            </div>
            <div class="col-md-10">
                <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <div class="date-text d-md-none">{{ $post->published_date }}</div>
                <p class="lead">{!! $post->first_paragraph !!}</p>
            </div>
        </div>
    @endforeach

        <div class="row text-center">
            <div class="col-md-12">
               <a href="/blog" class="btn btn-lg btn-outline-primary mb-5 mt-1">Read more of my blog</a>
            </div>
        </div>
    </div> <!-- /container -->
</div>

<div id="work-preview" class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>My Work</h1>
            </div>
        </div>
        
    @foreach ($workPosts as $post)
        <div class="row my-5">
            <div class="col-md-2 text-center">
                <img class="img-fluid mx-auto" src="/img/{{ $post->image }}" />
            </div>
            <div class="col-md-10 mb-3">
                <h2><a href="/work/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <p class="lead">{!! $post->first_paragraph !!}</p>
            </div>
        </div>
    @endforeach

        <div class="row text-center">
            <div class="col-md-12">
               <a href="/work" class="btn btn-lg btn-outline-primary mb-5 mt-1">View my work history</a>
            </div>
        </div>
    </div> <!-- /container -->
</div>

<div id="projects-preview" class="py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>My Projects</h1>
            </div>
        </div>
        
    @foreach ($projectPosts as $post)
        <div class="row my-5">
            <div class="col-md-2 d-none d-md-block">
                <img class="img-fluid mx-auto" src="/img/{{ $post->image }}" />
            </div>
            <div class="col-md-10">
                <h2><a href="/projects/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <div class="date-text d-md-none">{{ $post->published_date }}</div>
                <p class="lead">{!! $post->first_paragraph !!}</p>
            </div>
        </div>
    @endforeach

        <div class="row text-center">
            <div class="col-md-12">
               <a href="/projects" class="btn btn-lg btn-outline-primary mb-5 mt-1">See my other projects</a>
            </div>
        </div>
    </div> <!-- /container -->
</div>

<footer class="mt-5 pt-5 bg-dark">
    <div class="container">
        <div class="row text-center pb-5">
            <div class="col-md-12">
                <h1><a href="/contact" class="footer-contact btn btn-lg btn-primary mb-5">Contact Me</a></h1>
            </div>
        </div>
        <div class="row text-center pb-5">
            <div class="col-md-12">
                <p>Designed by James Gifford in Oregon with Laravel</p>
            </div>
        </div>
    </div>
</footer>

@endsection