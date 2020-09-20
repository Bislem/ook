@extends('layouts.default')

@section('content')
<div class="container">
    <div class="blog container">
        @foreach ($results as $post)
            
    
            <div class="post-card">
                <div class="post-card-image">
                    <img src="{{$post->image}}" alt="s">
                </div>
                <div class="post-card-body">
                    <h3><?= $post->title ?></h3>
                    <div class="post-info">
                        <span><i class="fas fa-dollar-sign"></i> {{$post->price}}</span>
                    </div>    
                    <div>
                        <p>{{$post->description}}</p>
                    </div>
                    <div class="post-card-cta">
                        <a href="{{url('/services/'.$post->slug)}}" class="post-btn btn btn-sm primary">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
    <div>
        <div class="pagination">
            {{$results->links('layouts.pagination')}}
        </div>
    </div>

</div>
@endsection

@section('head')
    <link rel="stylesheet" href="css/portfolio.css">
@endsection