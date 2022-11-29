<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Project APP</title>
        <style>
            li{
                padding: 10px;
            }
        </style>
    </head>
    <body>
        @vite(['resources/js/app.js'])
       
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}">Article App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">Dashboard</a>
                </li>

                

                @guest
                <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
                </li>
                @endguest
            </ul>
            <form class="d-flex">
            @auth
                <li style="list-style:none" class="nav-item">
                <a class="nav-link" href="">{{auth()->user()->name}}</a>
                </li>
                <li style="list-style:none" class="nav-item">
                    <button class="btn btn-dark"><a class="nav-link text-white" href="{{route('logout')}}">Logout</a></button>
                </li>
                @endauth
            </form>
            </div>
        </div>
        </nav>
    </div>
        <!-- dynamic content -->

        @yield('content')
    </body>
</html>