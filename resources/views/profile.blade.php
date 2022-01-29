<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Profile</title>
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

    <footer>
        Copyright © 2022 elnayef.com
    </footer>
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>