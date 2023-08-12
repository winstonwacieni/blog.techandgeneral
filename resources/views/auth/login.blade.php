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
      <div class="centered">
          <div>
              <img src="{{ asset('img/logo.png') }}" width="100px" alt="">
              <br>
              <span style="font-size: 18px">Hi, there!</span>
          </div>
          <div style="padding-top: 10px">
              <strong><span style="font-size: 23px">Create an account</span></strong>
          </div>

        <form action="" method="" style="font-family: 'Poppins', sans-serif;">
            <div class="input-div">
                <div class="i">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text"class='input'>
                </div>
            </div>
        </form>

      </div>
    </div>
@endsection
