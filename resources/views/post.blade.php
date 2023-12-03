@extends('layouts.main')
@section('container')

<div class="container">
    <div class = "row justify-content-center mb-5">
        <div  class = " col-md-8 ">
        <h2 class = "mt-3">{{$post->title}}</h2>
        <p>By. <a href="/blog?author={{ $post->author->username }}" class = "text-decoration-none text-dark">{{ $post->author->name }}</a> in<a href="/blog?category={{ $post->category->slug }}" class = "text-decoration-none text-dark"> {{ $post->category->name }}</a> <small>{{ $post->created_at->diffForHumans() }}</small></p>
        @if($post->image)
        <div style="max-height:450px; overflow:hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{$post->category->name}}">
        </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid " alt="{{$post->category->name}}">
        @endif
        <article class = "my-4 fs-5">
        {!! $post->body !!}
        </articel>
        <a href="/blog" class ="text-decoration-none badge bg-primary my-3">back to blog</a>
        </div>
    </div>
</div>

@endsection