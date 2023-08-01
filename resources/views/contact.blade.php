@php
  $contact='active';
@endphp
@extends('layout.main')
@push('head')
  <title>MCH | contact</title>
@endpush

@section('main')
<!--Section: Contact v.2-->
<section class="container mb-5 mt-5">

  <!--Section heading-->
  <h2 class="h1-responsive font-weight-bold text-center mb-3 mt-5">Contact us</h2>
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
      a matter of hours to help you.</p>

  <div class="row  mx-auto">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5  mx-auto">
          <form action="" method="POST" >

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">
                      <div class="md-form mb-3 form-floating">
                          <input type="text" id="name" name="name" class="form-control" placeholder="text">
                          <label for="name" class="">Your name</label>
                      </div>
                  </div>
                  <!--Grid column-->

                

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                  <div class="col-md-12">
                      <div class="md-form mb-3 form-floating">
                          <input type="text" id="subject" name="subject" class="form-control" placeholder="text">
                          <label for="subject" class="">Subject</label>
                      </div>
                  </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                  <!--Grid column-->
                  <div class="col-md-12">

                      <div class="md-form form-floating">
                          <textarea type="text" id="message" name="message" rows="4" class="form-control" placeholder="text" style="height: 180px"></textarea>
                          <label for="message">Your message</label>
                      </div>

                  </div>
              </div>
              <!--Grid row-->

          </form>

          <div class="text-md-left mt-3">
              <button class="btn btn-primary ">Submit</button>
          </div>
          
      </div>


  </div>

</section>


@endsection