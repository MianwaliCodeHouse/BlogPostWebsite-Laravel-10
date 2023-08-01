<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    @stack('head')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">MCH</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?=!empty($home)?'active':''?>" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=!empty($blog)?'active':''?>" href="{{ route('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?=!empty($contact)?'active':''?>" href="{{ route('contact') }}">Contact</a>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              @if (session()->has('userEmail') && session()->has('userName'))
              <a href="{{ route('logout') }}" class="btn btn-warning mx-1">Logout</a>

              @else

              <a href="{{ route('login') }}" class="btn btn-primary mx-1">SignIn</a>
              <a href="{{ route('signUp') }}" class="btn btn-primary mx-1">SignUp</a>
              @endif
              <a href="" class="btn btn-danger mx-1">Subcribe us</a>
            </form>
          </div>
        </div>
      </nav>