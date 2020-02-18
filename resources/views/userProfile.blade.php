<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/img/logo_2_200x200.png" sizes="any" type="image/png">

    <title>Simply Social</title>

    <style>
        .carousel-item
        {
            height: 91.1vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        body
        {
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-color: #444444;
        }
    </style>

</head>

<body>

@auth()
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{url('dashboard')}}">
            <img src="/img/logo_2_200x200.png" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <div class="card-body" style="color: white; font-size: larger">
                    <b>Welcome {{ ucfirst(Auth()->user()->name) }}</b>
                </div>
            </div>
            <a class="nav-item nav-link" href="{{url('dashboard')}}"><button type="button" class="btn btn-primary" style="width: 7em;">Dashboard</button></a>
            <a class="nav-item nav-link" href="{{url('newPost')}}"><button type="button" class="btn btn-primary" style="width: 7em;">New post</button></a>
            <a class="nav-item nav-link" href="{{url('userPosts')}}"><button type="button" class="btn btn-primary" style="width: 7em;">Your posts</button></a>
        </div>
        <a class="nav-item nav-link" href="{{url('logout')}}"><button type="button" class="btn btn-primary">Logout</button></a>
    </nav>

    <div class="container" style="margin-top: 5em">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Your profile details</div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <label>Your id: {{auth()->id()}}</label>
                        </div>
                        <div class="row justify-content-center">
                            <label>Your name: {{ucfirst(Auth()->user()->name)}}</label>
                        </div>
                        <div class="row justify-content-center">
                            <label>Your email: {{Auth()->user()->email}}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endauth
</body>
</html>
