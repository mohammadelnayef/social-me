<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Welcome to SocialMe</title>
</head>
<body>
    <div class="container">
        <div class="row custom-row">
            <div class="col-6">
                <img class="social-me-logo" src="/img/socialme2.svg" alt="SocialMe Logo">
                <p>Connect with friends and the world.</p>
           </div>
           <div class="col-6">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
                <button type="submit" class="btn btn-success">Create new account</button>
              </form>
           </div>
        </div>
    </div>

    <footer>
        <p>Copyright © 2022 elnayef.com</p>
    </footer>
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>