<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    .form-login{
        border: 2px solid;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 3px 4px 4px 2px rgba(0,0,0,0.7);
    }
  </style>
  <body>
    <div class="container d-flex flex-column justify-content-center align-items-center"
    style="height:100vh">
    <div class="form-login">
    @if (session('status'))
    <div class="alert alert-danger">
    {{ session('message') }}
    </div>
        @endif
     <form action="" method="post" style="width: 400px">
        @csrf
        <div class="mb-3 text-center">
            <h1>Log In<h1>
        </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <button type="submit" class=" w-100 btn btn-primary">Login</button>
            <div class="mb-3 text-center">
            <p>Don't Have a Account? <a href="/register"
                style="text-decoration: none;">Register</a></p>
              </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>