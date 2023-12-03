@extends('dashboard.layout.main')

@section('container')
<div class="container">
    <div class = "row my-3">
        <div  class = " col-lg-8">
        <h2 >{{$post->title}}</h2>
        <a href="/dashboard/posts" class="badge bg-success text-decoration-none text-white" ><span data-feather="arrow-left"></span> Back to my Post</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning text-decoration-none text-white"><span data-feather="edit"></span> Edit</a>
        @if($post->image)
        <div style="max-height:450px; overflow:hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{$post->category->name}}">
        </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}" class="img-fluid mt-3" alt="{{$post->category->name}}">
        @endif
        <article class = "my-4 fs-5">
        {!! $post->body !!}
        </articel>
        </div>
    </div>
</div>
@endsection