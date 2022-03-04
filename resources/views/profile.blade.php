@extends('layouts.app')
@section('title','Profile')
@section('content')

<!-- insert specific CSS -->
@push('css-styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

<div class="container profile-container">
    <div class="row">
        <div class="col-12">
            <div class="profile-head">
                <div class="profile-picture">
                    @empty($user->profile_img)
                    <img src="/img/avatar.png" alt="Profile Picture">
                    @endempty
                    @isset($user->profile_img)
                    <img src="{{ Storage::url($user->profile_img) }}" alt="Profile Picture">
                    @endisset
                    
                    
                </div>
                <div class="profile-info">
                    <h2>{{ $user->user_id }}</h2>
                    <div class="profile-stats">
                        <p><b>50</b> posts</p>
                        <p><b>100</b> followers</p>
                        <p><b>130</b> following</p>
                    </div>
                    <h1>{{ $user->name }}</h1>
                    <div class="profile-bio">
                        @empty($user->description)
                            <p>No description.</p>
                        @endempty
                        {{$user->description}}
                    </div>
                    @if (Request::segment(2) == Auth::id())    
                    <a class="btn btn-warning mt-2" href="/edit-profile/{{ $user->id }}">Edit Profile</a> 
                    @endif
                    @if (Auth::check() && Auth::id() != Request::segment(2))  
                    <a class="btn btn-success mt-2" href="">Follow</a> 
                    @endif
                </div>
            </div>
            <div class="profile-body">
                <div class="container">
                    <div class="row">

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <a href="/post/placeholder">
                                <div class="profile-post"></div>
                            </a>
                        </div>

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <a href="/post/placeholder">
                                <div class="profile-post"></div>
                            </a>
                        </div>

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <a href="/post/placeholder">
                                <div class="profile-post"></div>
                            </a>
                        </div>

                    </div>

                    <div class="row">

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <a href="/post/placeholder">
                                <div class="profile-post"></div>
                            </a>
                        </div>

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <a href="/post/placeholder">
                                <div class="profile-post"></div>
                            </a>
                        </div>

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <a href="/post/placeholder">
                                <div class="profile-post"></div>
                            </a>
                        </div>
                        
                    </div>
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


