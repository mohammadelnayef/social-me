<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/single-post.css') }}">
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
                <div class="post-profile-info">
                        <a href=""><img src="/img/avatar.png" alt="profile picture"></a>
                        <a href="">mohammadelnayef</a>
                        <p>Image description here...</p>
                </div>
                <div class="all-comments"></div>
                <div class="interaction">
                    
                </div>
            </div>
        </div>
    </div>

    <footer>
        Copyright © 2022 elnayef.com
    </footer>
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>