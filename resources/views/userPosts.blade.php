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
            <a class="nav-item nav-link" href="{{url('dashboard')}}"><button type="button" class="btn btn-primary" style="width: 7em;">Dashboard</button></a>
            <a class="nav-item nav-link" href="{{url('newPost')}}"><button type="button" class="btn btn-primary" style="width: 7em;">New post</button></a>
            <a class="nav-item nav-link" href="{{url('userProfile')}}"><button type="button" class="btn btn-primary" style="width: 7em;">Your Profile</button></a>
        </div>
        <a class="nav-item nav-link" href="{{url('logout')}}"><button type="button" class="btn btn-primary">Logout</button></a>
    </nav>

    @foreach($images as $image)
        <div class="container" style="margin-top: 3em">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{$image->title}}@if($image->privacy)<div class="justify-content-center"><b>This post is private</b></div>@endif</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <img style="height: 271px; width: 400px;" src="/images/{{$image->name}}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                                <div class="col-4 justify-content-center">
                                    <form id="file-delete-form" action="{{url('delete')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <button type="submit" name="deletePost" id="deletePost" class="btn btn-primary" value="{{$image->id}}" style="width: 8em;">Delete post</button>
                                    </form>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-4 justify-content-center">
                                        <form id="file-edit-form" action="{{url('edit')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <button type="submit" name="editPostTitle" id="editPostTitle" class="btn btn-primary" value="{{$image->id}}" style="width: 8em;">Edit title</button>
                                        </form>
                                    </div>
                                @if($image->privacy)
                                    <div class="col-4 justify-content-center">
                                        <form id="make-public-post" action="{{url('public')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <button type="submit" name="publicPost" id="publicPost" class="btn btn-primary" value="{{$image->id}}" style="width: 8em;">Make public</button>
                                        </form>
                                    </div>
                                @endif
                                @if(!$image->privacy)
                                    <div class="col-4 justify-content-center">
                                        <form id="make-private-post" action="{{url('privata')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <button type="submit" name="privatePost" id="privatePost" class="btn btn-primary" value="{{$image->id}}" style="width: 8em;">Make private</button>
                                        </form>
                                    </div>
                                @endif
                                <div class="col-4 justify-content-center">
                                    <a href="/images/{{$image->name}}">
                                        <button class="btn btn-primary" style="width: 8em;">Download</button>
                                    </a>
                                </div>
                                </div>
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
