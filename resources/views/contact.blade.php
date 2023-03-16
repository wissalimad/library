@extends("master.layout")

@section("title","Contact")

@section("content")

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
    <div class="col-md-9 col-lg-6 col-xl-5">
        <h5>MAIL ME</h5>
        <p> admin3@gmail.com</p>
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <h1>CREATE ACCOUNT</h1>
        <form>
        <div class="form-outline mb-4">
            <input type="text" id="form" class="form-control form-control-lg" placeholder="full name"/>
          </div>
          <div class="form-outline mb-4">
            <input type="email" id="form" class="form-control form-control-lg" placeholder="email"/>
          </div>
          <div class="form-outline mb-4">
            <input type="password" id="form" class="form-control form-control-lg" placeholder="password" />
            </div>
          <div class="form-outline mb-4">
            <input type="password" id="form" class="form-control form-control-lg" placeholder="confirm password" />
          </div>
          <div class="d-flex justify-content-around align-items-center mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form" checked />
              <label class="form-check-label" for="form"> Remember me </label>
            </div>
          </div>
          <button type="submit" class="btn btn-outline-warning btn-lg btn-block">Sign in</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
