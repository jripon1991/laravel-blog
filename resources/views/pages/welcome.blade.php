@extends('main')

@section('title', '| Home')

@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Hello, Laravel!</h1>
                    <p class="lead">Welcome to my blog</p>
                    <p><a href="" class="btn btn-primary btn-lg" role="button">Popular Post</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
            @foreach ($posts as $post)
                <div class="post">
                    <h3><a href="{{ url('blog/'.$post->slug) }}">{{$post->title}}</a></h3>
                    <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : " "}}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary btn-xs">Read more</a>
                </div>
                <hr>
            @endforeach
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>

@endsection
