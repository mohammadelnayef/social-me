@extends('layouts.app')
@section('title','Single Post')
@section('content')

<!-- insert specific CSS -->
@push('css-styles')
<link rel="stylesheet" href="{{ asset('css/single-post.css') }}">
<link rel="stylesheet" href="{{ asset('css/emojibuttonlistjs.min.css') }}">
@endpush

<div class="container post-container">
    <div class="row my-5">
        <div class="image-section col-8">
            <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" alt="">
            <div class="overlay"></div>
            <img class="" src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832__480.jpg" alt="">
        </div>
        <div class="comments-section col-4">
            <div class="post-profile-info mt-2">
                <a href=""><img src="/img/avatar.png" alt="profile picture"></a>
                <a href="">{{ Auth::user()->name }}</a>
                <a class="back-btn btn btn-danger" href="{{ url()->previous()}}">Close</a>             
                <p class="mt-2 ">Image description here...</p>
                <hr>
            </div>
            <div class="all-comments">
                <div class="comment mt-3">
                <a href=""><img src="/img/avatar.png" alt="profile picture"></a>
                <a href="">mohammadelnayef</a>
                <p class="d-inline">nice pic 😍</p> 
                </div>
                <div class="comment mt-3">
                <a href=""><img src="/img/avatar.png" alt="profile picture"></a>
                <a href="">mohammadelnayef</a>
                <p class="d-inline">awesome 😂</p> 
                </div>                 
                    
            </div>
            <div class="interaction">
                <hr>
                <div class="interaction-btns">
                    <i class="bi bi-heart-fill"></i>
                    <i class="bi bi-chat"></i>
                    <p>Liked by 100 people</p>
                </div>
                <div class="interaction-comment mt-2">
                <i id="picker" class="bi bi-emoji-smile"></i>
                <input id="example" type="text" placeholder="Add a comment..."/>
                <div class="btn btn-success">Post</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- insert specific JS -->
@push('scripts')
<script src="{{ asset('js/emojibuttonlistjs.min.js') }}"></script>
<script src="{{ asset('js/single.post.js') }}"></script>
@endpush

@endsection


