

<title>MCH | User Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                 
                  <h4 class="mt-1 mb-5 pb-1">MCH for MianwaliCodeHosue</h4>
                </div>
                

                <form action="{{ route('signUpData') }}" method="POST">
                  @csrf
                  <p>Please SignUp to Create account</p>

                  <div class="form-outline mb-4 form-floating">
                    <input type="text" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" name="name" value="{{ old('name') }}" />
                    <label class="form-label" for="form2Example11">Name</label>
                    <span class="text-danger">
                      @error('name')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="form-outline mb-4 form-floating">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" name="email" value="{{ old('email') }}"/>
                    <label class="form-label" for="form2Example11">Email</label>
                    <span class="text-danger">
                      @error('email')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class="form-outline mb-4  form-floating">
                    <input type="password" id="form2Example22" class="form-control" placeholder="1" name="password"/>
                    <label class="form-label" for="form2Example22">Password</label>
                    <span class="text-danger">
                      @error('password')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>
                  <div class="form-outline mb-4  form-floating">
                    <input type="password" id="form2Example22" class="form-control" placeholder="1" name="c_password" />
                    <label class="form-label" for="form2Example22">Confirm Password</label>
                    <span class="text-danger">
                      @error('c_password')
                        {{ $message }}
                      @enderror
                    </span>
                  </div>

                  <div class=" pt-1 mb-3 pb-1">
                    <button class="btn btn-primary btn-block mb-3">Submit</button>
                   
                  </div>

                </form>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Have an account?</p>
                    <a href="{{ route('login') }}">
                    <button type="button" class="btn btn-outline-danger">Login</button></a>
                  </div>


              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center bg-dark">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
