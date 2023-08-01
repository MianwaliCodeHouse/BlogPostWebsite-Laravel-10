<div class="container-fluid">
  <div class="row">
  <div class="col-12 col-md-3 col-lg-2 bg-dark vh-100 overflow-auto">
    <h1 class="h1-responsive text-white text-center mt-3 mb-5">Dashboard</h1>
    <a href="" class="btn <?=!empty($posts)?'btn-primary':'btn-light'?> d-block mb-3">Posts</a>
    <a href="" class="btn <?=!empty($create)?'btn-primary':'btn-light'?> d-block mb-3">Create Post</a>
    <a href="" class="btn <?=!empty($edit)?'btn-primary':'btn-light'?> d-block mb-3">Edit Post</a>
    <a href="" class="btn <?=!empty($update)?'btn-primary':'btn-light'?> d-block mb-3">Update Post</a>
    <a href="" class="btn <?=!empty($delete)?'btn-primary':'btn-light'?> d-block mb-3">Delete Post</a>
    <a href="" class="btn btn-danger d-block mb-3">Logout</a>
  </div>
  <div class="col-12 col-md-9 col-lg-10 vh-100 overflow-auto">
    @yield('main')
  </div>
</div>
</div>