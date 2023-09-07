@extends('layouts.app')

@push('styles')
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

/* Split the screen in half */
.split {
  height: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
    left: 0;
    background-image: url({{ asset('img/purplebg.jpg') }});
    background-size: cover;
    background-repeat: no-repeat;
    width: 67%;
}


/* Control the right side */
.right {
  right: 0;
  background-color: #fff;
  width: 33%;
}

/* Center right content horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/*Center left content*/
.centered-left {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Media query for screens with width less than 1000px and height less than 1000px */
@media (max-width: 1000px) and (max-height: 1000px) {
    .left {
        display: none;
    }

    .right {
        width: 100%;
        left: 0;
        top: auto;
        bottom: 0;
    }
}

</style>

@endpush()


@section('content')
    <div class="split left">
      <div class="centered-left">
          <img src="{{ asset('img/logo.png') }}" width="190px" alt="">
          <br>
          <span style="font-size: 40pt;color: #fff">Welcome To Tech and General</span>
          <br>
          <div>
              <div style="border-bottom: 2px solid green; display: inline-block;">
                  <span style="font-size: 37px;color: #fff">Create an account to unlock these benefits</span>
              </div>
          </div>
          <div>
              <div style="display: inline-block;">
                  <ul style="text-align: left; padding-right: 160px; list-style-type: disc;font-size: 26px;color: #fff">
                      <li style="padding-bottom: 10px">Comment on articles and express yourself</li>
                      <li style="padding-bottom: 10px">Manage your Newsletters</li>
                      <li style="padding-bottom: 10px">Have a personal profile</li>
                      <li style="padding-bottom: 10px">Browse without the distraction of popup ads</li>
                  </ul>
              </div>
          </div>

      </div>
    </div>

    <div class="split right">
    <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Sign in</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
                                </svg></div>
                            <form class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">SIGN IN&nbsp;</button></div><span class="spinner-border spinner-border-sm" role="status"></span>
                                <p class="text-muted">Forgot your password?</p>
                                <p class="text-muted">Sign Up instead</p>
                                <section></section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
