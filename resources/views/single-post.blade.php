<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/single-post.css') }}">
    <link rel="stylesheet" href="{{ asset('css/emojibuttonlistjs.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Post Name</title>
</head>
<body>
    <nav class="navbar navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/socialme2.svg" alt="SocialMe Logo" width="100">
            </a>
          <form class="d-flex search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn search-btn" type="submit">Search</button>
          </form>
          <div class="account">
              <a href=""><i class="bi bi-house-door-fill"></i>Newsfeed</a>
              <a href=""><img src="/img/avatar.png" alt="profile picture">Profile</a>
              <a href=""><i class="bi bi-door-open-fill"></i>Sign Out</a>
          </div>
        </div>
    </nav>

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
                    <a href="">mohammadelnayef</a>
                    <a class="back-btn btn btn-danger" href="">Close</a>             
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

    <footer>
        Copyright © 2022 elnayef.com
    </footer>
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/emojibuttonlistjs.min.js') }}"></script>
    <script src="{{ asset('js/single.post.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>