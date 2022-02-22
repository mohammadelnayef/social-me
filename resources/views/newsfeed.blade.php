@extends('layouts.app')
@section('title','Newsfeed')
@section('content')

<!-- insert specific CSS -->
@push('css-styles')
<link rel="stylesheet" href="{{ asset('css/newsfeed.css') }}">
@endpush

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="post-card">
                <div class="post-card-header">
                    <a href="/profile/placeholder"><img src="/img/avatar.png" alt="">Username</a>
                </div>
                <div class="post-card-body">
                    <a href="/post/placeholder">
                        <img src="https://media.istockphoto.com/photos/abstract-background-wallpaper-picture-id952039286?b=1&k=20&m=952039286&s=170667a&w=0&h=LmOcMt7FHxFUAr2bOSfTUPV9sQhME6ABtAYLM0cMkR4=" alt="">
                    </a>
                </div>
                <div class="post-card-footer">
                    <i class="bi bi-heart-fill"></i>
                    <i class="bi bi-box-arrow-in-right"></i>
                    <a href="/post/placeholder">    
                        <i class="bi bi-zoom-in"></i>
                    </a>
                    <b>100 Likes</b>
                    <b class="ms-1">3 Comments</b>
                    <div class="input-group my-3">
                        <input type="text" class="form-control" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
                        <p>1 Day ago</p>
                    </div>
                </div>
            </div>

            <div class="post-card">
                <div class="post-card-header">
                    <a href="/profile/placeholder"><img src="/img/avatar.png" alt="">Username</a>
                </div>
                <div class="post-card-body">
                    <a href="/post/placeholder">
                        <img src="https://media.istockphoto.com/photos/abstract-background-wallpaper-picture-id952039286?b=1&k=20&m=952039286&s=170667a&w=0&h=LmOcMt7FHxFUAr2bOSfTUPV9sQhME6ABtAYLM0cMkR4=" alt="">
                    </a>
                </div>
                <div class="post-card-footer">
                    <i class="bi bi-heart-fill"></i>
                    <i class="bi bi-box-arrow-in-right"></i>
                    <a href="/post/placeholder">    
                        <i class="bi bi-zoom-in"></i>
                    </a>
                    <b>100 Likes</b>
                    <b class="ms-1">3 Comments</b>
                    <div class="input-group my-3">
                        <input type="text" class="form-control" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
                        <p>1 Day ago</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>


@endsection


