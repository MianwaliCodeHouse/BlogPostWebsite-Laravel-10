@php
  $create='active';
@endphp
@extends('dashboard.layouts.main')
@push('head')
  <title>Dashboard | home</title>
@endpush
@section('main')
<style>
  .ck-content{
    height: 500px;
  }
</style>
<h1 class="h1-responsive mt-5 mb-3">Create Post</h1>
<div class="card">
  <div class="card-body">
    <form action="" method="post">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Post Title</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Short Description</label>
      </div>
      <div class="mb-3">
        <label for="floatingInput" class="form-label">Select Thumbnail</label>
        <input type="file" class="form-control" id="floatingInput" placeholder="name@example.com">
      </div>
      <div class="">
        <label for="floatingTextarea" class="form-label">Post Body</label>
        <textarea class="form-control" id="editor"></textarea>
      </div>
      <button class="btn btn-primary btn-lg d-block mt-3 mb-3">Create Post</button>
    </form>
  </div>
</div>
<div class="mb-5 bt-5">
  <br><br>
</div>

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ) )
		.catch( error => {
			console.error( error );
		} );
</script>
@endsection
