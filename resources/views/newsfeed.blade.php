<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsfeed.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Newsfeed</title>
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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="post-card">
                    <div class="post-card-header">
                        <a href=""><img src="/img/avatar.png" alt="">Username</a>
                    </div>
                    <div class="post-card-body">
                        <img src="https://media.istockphoto.com/photos/abstract-background-wallpaper-picture-id952039286?b=1&k=20&m=952039286&s=170667a&w=0&h=LmOcMt7FHxFUAr2bOSfTUPV9sQhME6ABtAYLM0cMkR4=" alt="">
                    </div>
                    <div class="post-card-footer">
                        <i class="bi bi-heart-fill"></i>
                        <i class="bi bi-box-arrow-in-right"></i>
                        <i class="bi bi-zoom-in"></i>
                        <div class="input-group my-3">
                            <input type="text" class="form-control" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
                          </div>
                    </div>
                </div>
                <div class="post-card">
                    <div class="post-card-header">
                        <a href=""><img src="/img/avatar.png" alt="">Username</a>
                    </div>
                    <div class="post-card-body">
                        <img src="https://media.istockphoto.com/photos/abstract-background-wallpaper-picture-id952039286?b=1&k=20&m=952039286&s=170667a&w=0&h=LmOcMt7FHxFUAr2bOSfTUPV9sQhME6ABtAYLM0cMkR4=" alt="">
                    </div>
                    <div class="post-card-footer">
                        <i class="bi bi-heart-fill"></i>
                        <i class="bi bi-box-arrow-in-right"></i>
                        <i class="bi bi-zoom-in"></i>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Add a comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Post</button>
                          </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>