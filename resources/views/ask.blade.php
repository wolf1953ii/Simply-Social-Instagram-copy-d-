<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                    <a class="nav-item nav-link" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{route('faq')}}">FAQ</a>
                    <a class="nav-item nav-link active" href="{{route('ask')}}">Ask us</a>
                </div>
            </div>
            <a class="nav-item nav-link" href="{{route('regUser')}}"><button type="button" class="btn btn-primary" style="width: 5em;">Join us</button></a>
            <a class="nav-item nav-link" href="{{route('loginUser')}}"><button type="button" class="btn btn-primary" style="width: 5em;">Log in</button></a>
        </nav>

        <div style="margin-top: 5em">
        <div class="card col-md-3" style="margin: auto;">
            <div class="card-header">{{ __('Ask us') }}</div>
            <div class="card-body">

        <form action="{{route('ask')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Message</label>
                <textarea name="content" class="form-control" required></textarea>
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Contact us</button>
            </div>
        </form>
        </div>
        </div>
        </div>


    </body>
</html>
