@extends('layouts.app')

@section('content')
    
    <h3 style="margin-top: 10px">Blog Posts</h3>
    <br>
        @if(count($posts) > 0)
            @foreach(array_chunk($posts->all(), 3) as $chunk)
                <div class="row">
                    @foreach($chunk as $post)
                        <div class="col-sm-4">
                            <a href="/posts/{{$post->id}}">
                                <div class="blog-card">
                                    <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}">
                                    <div class="card-body">
                                        <h3>{{$post->title}}</h3>
                                        <p class="card-text"><small>Written on {{$post->created_at->format('d.m.Y H:i')}} by {{$post->user->name}}</small></p>
                                    </div>   
                                </div>    
                            </a>
                        </div>    
                    @endforeach    
                </div>  
            @endforeach
                {{$posts->links()}}
            @else
            <p>No posts were found</p>
        @endif
@endsection
