<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">

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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

@if(session()->has('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('main')}}">
        <img src="/img/logo_2_200x200.png" width="60" height="60" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{route('main')}}">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{route('faq')}}">FAQ</a>
            <a class="nav-item nav-link" href="{{url('/ask')}}">Ask us</a>
        </div>
    </div>
    <a class="nav-item nav-link" href="{{route('regUser')}}"><button type="button" class="btn btn-primary" style="width: 5em;">Join us</button></a>
    <a class="nav-item nav-link" href="{{route('loginUser')}}"><button type="button" class="btn btn-primary" style="width: 5em;">Log in</button></a>
</nav>

<div id="carouselimages" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#carouselimages" data-slide-to="0" class="active"></li>
        <li data-target="#carouselimages" data-slide-to="1"></li>
        <li data-target="#carouselimages" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('/img/image_2.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4" style="font: "><b>Explore the world</b></h2>
                <p class="lead">Find great places.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('/img/image_1.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4"><b>Increase your potential</b></h2>
                <p class="lead">Work together, succeed together.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('/img/image_3.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4"><b>Focus on this what is important</b></h2>
                <p class="lead">Start spending more time with your friends.</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
