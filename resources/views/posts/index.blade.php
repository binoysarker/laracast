@extends('layouts.master')
@section('content')
  {{-- expr --}}
  <div class="col-sm-8 blog-main">

    <div class="blog-post">
      @foreach ($posts as $post)
        {{-- expr --}}
        <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} By <a href="#">{{$post->user->name}} </a></p>

        <p>{{$post->body}}</p>
      @endforeach
      
    </div><!-- /.blog-post -->

    

    <nav class="blog-pagination">
      <a class="btn btn-outline-primary" href="#">Older</a>
      <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

  </div><!-- /.blog-main -->
@endsection