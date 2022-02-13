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
                    <img src="/img/avatar.png" alt="Profile Picture">
                </div>
                <div class="profile-info">
                    <h2>mohammad_eln</h2>
                    <div class="profile-stats">
                        <p><b>50</b> posts</p>
                        <p><b>100</b> followers</p>
                        <p><b>130</b> following</p>
                    </div>
                    <h1>Mohammad Elnayef</h1>
                    <div class="profile-bio">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, error.
                    </div>
                    <a class="btn btn-success mt-2" href="">Follow</a> 
                </div>
            </div>
            <div class="profile-body">
                <div class="container">
                    <div class="row">

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <div class="profile-post"></div>
                        </div>

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <div class="profile-post"></div>
                        </div>

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <div class="profile-post"></div>
                        </div>

                    </div>

                    <div class="row">

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <div class="profile-post"></div>
                        </div>

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <div class="profile-post"></div>
                        </div>

                        <div class=".col-12 .col-md-6 col-lg-4">
                            <div class="profile-post"></div>
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


