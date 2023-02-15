<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Books | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Kaushan+Script&display=swap" rel="stylesheet">
</head>
<style>
    .main{
        height: 100vh;
    }

    .sidebar{
        background-color: silver;
    }
    .navbar-brand{
        font-family: 'Creepster', cursive;
        font-size: 22px;
        color: black;
    }

    .navbar-brand:hover{
        
        color: white;
    }
    .sidebar a{
        text-decoration: none;
        padding: 12px 20px;
        color: black;
        display: block;
    }

    .sidebar a:hover{
        background-color: #698269;
    }

    .sidebar a.active{
        border-right: solid 5px #F3EFE0;
    }
    .books{
        background-color: grey;
    }
    .card-data{
        border-radius: 5px;
        padding: 20px 40px;
        border: solid 1px;
        color: #fff;
    }
    .card-data i{
        font-size: 30px;
    }
    .desc{
        font-size: 20px;
    }
    .count{
        font-size: 25px;
    }
    .category{
        background-color:  purple;
    }
    .user{
        background-color: black;
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-between">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="bi bi-journal-richtext"></i>Uphil|Books</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
      </div>
    </nav>

    <div class="body-main h-100">
        <div class="row g-0 h-100">
            <div class="sidebar col-lg-2 p-2 collapse d-lg-block" 
            id="navbarSupportedContent">
            @if(Auth::user()->roles_id == 1)
                <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class= 'active' @endif><i class="active bi bi-house-door"></i> Dashboard</a>
                <a href="/users" @if(request()->route()->uri == 'users') class= 'active' @endif><i class="active bi bi-person-video2"></i> User</a>
                <a href="/category" @if(request()->route()->uri == 'category') class= 'active' @endif><i class="active bi bi-tags"></i> Category</a>
                <a href="/books" @if(request()->route()->uri == 'books') class= 'active' @endif><i class="active bi bi-book-half"></i> Books</a>
                <a href="/rentlogs" @if(request()->route()->uri == 'rentlogs') class= 'active' @endif><i class="active bi bi-cart-plus"></i> Rent Logs</a>
                <a href="/logout" class=" bottom-0 start-0 bi bi-door-open"> Logout</a>
            @else
            <a href="/profile" @if(request()->route()->uri == 'profile') class= 'active' @endif><i class="bi bi-people"></i> profile</a>
            <a href="/logout" class=" bottom-0 bi bi-door-open"> Logout</a>
            @endif
            </div>
            <div class="content col-lg-10 p-3 ">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>