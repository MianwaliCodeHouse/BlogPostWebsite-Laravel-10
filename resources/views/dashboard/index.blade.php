@php
  $posts='active';
@endphp
@extends('dashboard.layouts.main')
@push('head')
  <title>Dashboard | home</title>
@endpush
@section('main')
<h1 class="h1-responsive mt-5 mb-3">All Posts</h1>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    
  </div>
  <h5 class="card-header"><a href="#" class="btn btn-success mx-2">Edit</a><a href="#" class="btn btn-danger mx-2">Delete</a></h5>
</div>


@endsection