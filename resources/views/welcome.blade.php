@php
  $home='active';
@endphp
@extends('layout.main')
@push('head')
    <title>MCH | Home</title>
@endpush
@section('main')
<div id="carouselExampleDark" class="carousel carousel-Light slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="{{ url('assets/s1.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption bg-dark bg-opacity-50 p-3 mb-4 rounded d-none d-md-block">
          <h3>Welcome to MianwaliCodeHouse</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi odio voluptatibus ipsa. Iste minima voluptatibus, doloribus, at corporis tempora nobis dolor rem dicta laudantium, quia sequi commodi placeat quisquam? Assumenda.</p>
          <p>
            <a href="{{ route('blog') }}" class="btn btn-warning">Explore Blog</a>
          </p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ url('assets/s2.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption bg-dark bg-opacity-50 p-3 mb-4 rounded d-none d-md-block">
            <h3>Here You Will Learn</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi odio voluptatibus ipsa. Iste minima voluptatibus, doloribus, at corporis tempora nobis dolor rem dicta laudantium, quia sequi commodi placeat quisquam? Assumenda.</p>
            <p>
              <a href="" class="btn btn-danger">Web Development</a>
              <a href="" class="btn btn-primary">Fundamental Project</a>
              <a href="" class="btn btn-success">Project Building</a>
            </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ url('assets/s3.png') }}" class="d-block w-100" alt="...">
        <div class="carousel-caption bg-dark bg-opacity-50 p-3 mb-4 rounded d-none d-md-block">
            <h3>Project Base Learing Courses</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi odio voluptatibus ipsa. Iste minima voluptatibus, doloribus, at corporis tempora nobis dolor rem dicta laudantium, quia sequi commodi placeat quisquam? Assumenda.</p>
            <p>
              <a href="" class="btn btn-primary">PHP</a>
              <a href="" class="btn btn-warning">Python</a>
              <a href="" class="btn btn-success">JavaScript</a>
           
            </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="container mt-5 p-2">
  <h1 class="h1-responsive mb-4">Recent Posts</h1>
  <div class="d-flex justify-content-around flex-wrap gap-2">
    <div class="card" style="width: 22rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 22rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <div class="card" style="width: 22rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="text-center mt-4">
    <a href="{{ route('blog') }}" class="btn btn-warning btn-lg">Explore More</a>
  </div>
</div>




@endsection
