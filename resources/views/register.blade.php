<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Create an account | SocialMe </title>
</head>
<body>
    <div class="container">
        <div class="row custom-row">
            <div class="col-6">
                <img class="social-me-logo" src="/img/socialme2.svg" alt="SocialMe Logo">
                <p>Connect with friends and the world.</p>
           </div>
           <div class="col-6">
           @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            <h1 class="pb-2">Create an account</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputName" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                </div>
                <button type="submit" class="btn btn-success">Create account</button>
                <a href="/" class="btn btn-danger">Back to Log In</a>
              </form>
           </div>
        </div>
    </div>

    <footer>
        <p>Copyright © 2022 elnayef.com | Icons by Fontawsome & Bootstrap 5 | Framework: Laravel 8</p>
    </footer>
    
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>