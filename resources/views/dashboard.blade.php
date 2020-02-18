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

    @if(session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Ohh yeah,</strong> {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
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
        <a class="nav-item nav-link" href="{{route('newPost')}}"><button type="button" class="btn btn-primary" style="width: 7em;">New Post</button></a>
        <a class="nav-item nav-link" href="{{route('userPosts')}}"><button type="button" class="btn btn-primary" style="width: 7em;">Your posts</button></a>
        <a class="nav-item nav-link" href="{{route('userProfile')}}"><button type="button" class="btn btn-primary" style="width: 7em;">Your profile</button></a>

        <form class="form-inline" action="{{url('search')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input class="form-control mr-sm-2" type="search" name="searchFor" id="searchFor" placeholder="Search by title" aria-label="Search" required>
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>

    </div>
    <a class="nav-item nav-link" href="{{url('logout')}}"><button type="button" class="btn btn-primary">Logout</button></a>
</nav>

    @foreach($images as $image)
        <div class="container" style="margin-top: 3em">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">{{$image->title}}</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <img style="height: 271px; width: 400px;" src="/images/{{$image->name}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endauth
</body>
</html>
