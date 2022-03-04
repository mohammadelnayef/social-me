@extends('layouts.app')
@section('title','Edit Profile')
@section('content')

<!-- insert specific CSS -->
@push('css-styles')
<link rel="stylesheet" href="{{ asset('css/edit-profile.css') }}">
@endpush

<div class="container update-container">
            <div class="row update-row">
               <div class="col-6">
                   <div class="img-wrap">
                       @empty(Auth::user()->profile_img)
                       <img id="tmpImg" width="100%"src="/img/avatar.png" alt="Temp profile picture">
                       @endif
                       @isset(Auth::user()->profile_img)
                       <img id="tmpImg" width="100%"src="{{ Storage::url(Auth::user()->profile_img) }}" alt="profile picture">
                       @endisset
                   </div>
               </div>
               <div class="col-6 form-wrap">
               @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h1 class="pb-2">Update Profile</h1>
                <form action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Update profile image</label>
                        <input name="profile_img" class="form-control" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputName" class="form-label">User ID</label>
                      <input type="text" name="user_id" value="{{Auth::user()->user_id}}" class="form-control" id="exampleInputUserId" aria-describedby="nameHelp">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Full Name</label>
                      <input type="text" name="full_name" value="{{Auth::user()->name}}" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{Auth::user()->description}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="/profile/{{ Auth::id() }}" class="btn btn-danger">Cancel</a>
                  </form>
               </div>
            </div>
            
        </div>
    </div>
</div>

<!-- insert specific JS -->
@push('scripts')
<script src="{{ asset('js/edit-profile.js') }}"></script>
@endpush

@endsection


